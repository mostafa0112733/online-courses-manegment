<?php
session_start();
require '../cdb.php';
$course_id = $_GET['course_id'];

?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="../assets//css/bootstrap.css" rel="stylesheet">
    <link href="../assets/js/bootstrap.js" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:ital,wght@0,100;0,300;1,400&family=Teko:wght@600&display=swap" rel="stylesheet">
<style>
    .list-group-item.active{  background-color: #19A7CE; }
    .list-group-item.active:focus,
.list-group-item.active:hover {
  background-color: #19A7CE; 
}
</style>
</head>
<body style="background-color:#DBE2EF;">
<div class="container mt-3">
    <h1>Your Matiral</h1>
    <?php
    if (isset($_SESSION['user_id']) && $_SESSION['user_type'] == 'student') {
        $user_id = $_SESSION['user_id'];
        
        $qry = "SELECT Courses.course_name, Persons.full_name, Materials.*
        FROM Materials
        INNER JOIN Courses ON Materials.course_id = Courses.id 
        INNER JOIN Persons ON Materials.person_id = Persons.id
        WHERE Courses.id = '$course_id'";
        $result = $cdb->query($qry);
        if ($result->num_rows > 0) {
            ?>
            <table class="table">	
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Instructor Name</th>
                    <th scope="col">title </th>
                    <th scope="col">description </th>
                    <th scope="col">file </th>
                    <th scope="col">Uploaded At</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><span style="background-color:#146C94;color:#F9F7F7;" class="btn btn-sm  rounded-pill "><?= $row['course_name'] ?></span></td>
                        <td><span style="background-color:#146C94;color:#F9F7F7;" class="btn btn-sm  rounded-pill "><?= $row['full_name'] ?></span></td>
                        <td><span style="background-color:#146C94;color:#F9F7F7;" class="btn btn-sm  rounded-pill "><?= $row['title'] ?></span></td>
                        <td><span style="background-color:#146C94;color:#F9F7F7;" class="btn btn-sm  rounded-pill "><?= $row['description'] ?></span></td>
                        <td><span style="background-color:#146C94;color:#F9F7F7;" class="btn btn-sm  rounded-pill "><a href="<?= $row['file_path'] ?>" download="<?= basename($row['file_path']) ?>" target="_blank"><?= $row['file_path'] ?></a></span></td>
                        <td><span style="background-color:#146C94;color:#F9F7F7;" class="btn btn-sm  rounded-pill "><?= $row['uploaded_at'] ?></span></td>
                    </tr>
                    <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
        <?php 
        } else {
            echo "No Matiral found.";
        }
    } else {
        echo "Please login as a student to view your courses.";
    }
    ?>
    <a href="../index.php"class="position-fixed bottom-0 mb-5  btn position-fixed" style="background-color:#146C94;color:#F9F7F7;">Logout</a>
    <a href="courses_student.php"class=" mb-5  btn position-fixed" style="background-color:#146C94;color:#F9F7F7;">go back</a>

</div>
