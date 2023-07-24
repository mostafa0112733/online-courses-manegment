<?php
session_start();
require 'cdb.php';
if (isset($_SESSION['user_id']) && ($_SESSION['user_type'] == 'instructor' || $_SESSION['user_type'] == 'student')) {
    $user_id = $_SESSION['user_id'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $password =$_POST['password'];
         
        // Validate password using a regular expression
        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()])[A-Za-z\d!@#$%^&*()]{8,}$/', $password)) {
          echo '<script>alert("Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one digit, and one symbol from the standard set of symbols.");</script>';
        } else {
          $hashed_password = md5($password);
            $qry = "UPDATE Persons p
                    SET `password` = '$hashed_password'
                    WHERE p.id = $user_id;
                   ";
            $res = mysqli_query($cdb,$qry);
            if ($res) {
              echo '<script>alert("Password updated successfully!");</script>';
            } else {
            echo '<script>alert("the password must be not less than 8 charcter and contain at lest 1 chrcter uppercase and lowercase and number and symbol");</script>';
            }
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="assets//css/bootstrap.css" rel="stylesheet">
    <link href="assets/js/bootstrap.js" rel="stylesheet">
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
<div class="row justify-content-center mt-5 pt-5">
        <div class="col-6">
            <div class="card">
                <h1 class="text-center my-3" style=" color:#DBE2EF">New password</h1>
                <div class="card-body">
                    <form method="post" action="#">
                      <div class="mb-3">  
                      <label for="first_Name">new password</label>   
                      <input name='password' type="password" value="<?= $r['password'] ?? '' ?>" class="form-control my-1" style="height: 50px; background-color:#DBE2EF" required>
                      </div>
                      <button type="submit" style="background-color:#146C94; border:0px;" class="btn text-white form-control mt-5">Add</button>
                    </form>
               </div>
           </div>
        </div>
</div>


