<?php 

require __DIR__ . '/../cdb.php';

    $id = $_GET['id'];

    $qry = "SELECT c.id, c.course_name, p.full_name 
            FROM Courses_Instructors ci
            INNER JOIN Courses c ON c.id = ci.course_id 
            INNER JOIN persons p ON p.id = ci.person_id 
            WHERE c.id = $id";

    $res = mysqli_query($cdb, $qry);
    $n = 1;
?>


<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
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
<!-- display the instructor data in a table -->
<div class="container">
<div class="card w-100 mt-3">
    <div class="card-body" style="background-color: #F9F7F7;">
        <div class="row">
            <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Instructor Name</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($res as $r): ?>
                <tr>
                    <td><?= $n++ ?></td>
                    <td><?= $r['full_name'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


  </div>

</div></div>
<a href="org_admin.php"class=" mb-5  btn position-fixed" style="background-color:#146C94;color:#F9F7F7;">go back</a>

</div>
