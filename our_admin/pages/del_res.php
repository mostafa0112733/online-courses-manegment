<?php require __DIR__ . '/../../cdb.php';
$id = $_GET['id'];
$qry = "delete from Organizations where id = $id; ";
$res = mysqli_query($cdb, $qry);
header('location:../Our_admin.php');
