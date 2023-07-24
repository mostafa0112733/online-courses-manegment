<?php
require __DIR__ . '/../cdb.php';

$id = $_GET['id'];
$qry = "delete from Courses where id = $id; ";
$res = mysqli_query($cdb, $qry);
header('location: org_admin.php');
