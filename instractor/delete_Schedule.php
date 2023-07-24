<?php include "../head.php";
$id = $_GET['id'];
$qry = "delete from Schedule where id = $id; ";
$res = mysqli_query($cdb, $qry);
header('location:../view/view_courses.php');
