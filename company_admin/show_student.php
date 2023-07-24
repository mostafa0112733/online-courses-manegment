<?php

require __DIR__ . '/../cdb.php';

$id = $_GET['id'];

$qry = "SELECT c.course_name 
        FROM  Course_Enrollments ce 
        INNER JOIN  Courses_Instructors ci ON ce.course_instructor_id = ci.id 
        INNER JOIN  Courses c ON ci.course_id = c.id 
        INNER JOIN  persons p ON p.id = ce.person_id 
        WHERE p.id = '$id'";
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

</head>
<body style="  background-color: #DBE2EF; ">

<!-- Display the instructor data in a table -->
<div class="container">

<div class="card w-100 mt-3">
    <div class="card-body" style="background-color: #F9F7F7;">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="fw-normal">#</th>
                        <th scope="col" class="fw-normal">Course Name</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($r = mysqli_fetch_assoc($res)) : ?>
                    <tr>
                        <td><?= $n++ ?></td>
                        <td><?= $r['course_name'] ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

</div>
<a href="org_admin.php"class=" mb-5  btn position-fixed" style="background-color:#146C94;color:#F9F7F7;">go back</a>

