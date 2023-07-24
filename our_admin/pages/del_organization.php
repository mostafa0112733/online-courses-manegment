<?php require __DIR__ . '/../../cdb.php'; 

$id = $_GET['id'];
$qry = "delete from Organizations_admins where id = $id; ";
$res = mysqli_query($cdb, $qry);
header('location:../Our_admin.php');
