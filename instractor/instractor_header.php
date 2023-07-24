<?php
require '../cdb.php';
session_start();
$user_id = $_SESSION['user_id'];
?>
<div class="container mt-3">
    <h1>Your Courses</h1>
    <?php
   if (isset($_SESSION['user_id']) && $_SESSION['user_type'] == 'instructor') {
    $user_id = $_SESSION['user_id'];
    $qry = "SELECT Courses.id, Courses.course_name FROM `courses_instructors` 
            INNER JOIN `courses` ON `courses_instructors`.`course_id` = `courses`.`id`
            INNER JOIN `persons` ON `courses_instructors`.`Person_id` = `persons`.`id`
            WHERE `persons`.`id` = $user_id";
    $result = $cdb->query($qry);
        if ($result->num_rows > 0) {
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
    

            <table class="table"  style="background-color: #F9F7F7; border-radius: 25px">	
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">view material</th>
                    <th scope="col">add  material</th>
                    <th scope="col">view Schedule</th>   
                    <th scope="col">add Schedule</th>   
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td ><?= $row['course_name'] ?></td>
                        <td ><a href="view_material.php?id=<?= $row['id'] ?>" style="background-color:#146C94;color:#F9F7F7;" class="btn btn-sm  rounded-pill ">view</a></td>
                        <td><a href="add_material.php?id=<?= $row['id'] ?>" style="background-color:#146C94;color:#F9F7F7;" class="btn btn-sm  rounded-pill ">Add </a></td>
                        <td><a href="view_schedule.php?id=<?= $row['id'] ?>" style="background-color:#146C94;color:#F9F7F7;" class="btn btn-sm  rounded-pill ">view</a></td>
                        <td><a href="make_Schedule.php?id=<?= $row['id'] ?>" style="background-color:#146C94;color:#F9F7F7;" class="btn btn-sm  rounded-pill ">Add </a></td>
                    
                    </tr>
                <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
<?php 
    } else {
        echo "No courses found.";
    }
} else {
    echo "Please login to view your courses.";
}
?>
<a href="../index.php"class="position-fixed bottom-0 mb-5  btn position-fixed" style="background-color:#146C94;color:#F9F7F7;">Logout</a>
