<?php 
require __DIR__ . '/../cdb.php';
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['course_name'])) {
            $course_name = $_POST['course_name'];

            // Construct SQL query
            $qry = "INSERT INTO Courses (course_name, Organizations_admins_id) VALUES ('$course_name', '$user_id')";

            $res = mysqli_query($cdb, $qry);
           
        } 
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (isset($_POST['phone_number']) && isset($_POST['full_name'])&& isset($_POST['email'])&& isset($_POST['user_type'])) {
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $password = 123456789;
        $user_type = $_POST['user_type'];

        // Check if email already exists in organizations table
        $org_qry = "SELECT * FROM `Organizations` WHERE `Company_Email`='$email'";
        $org_res = mysqli_query($cdb, $org_qry);
        if (mysqli_num_rows($org_res) > 0) {
            die("Email already exists in Organizations table.");
        }

        // Check if email already exists in persons table
        $person_qry = "SELECT * FROM `Persons` WHERE `email`='$email'";
        $person_res = mysqli_query($cdb, $person_qry);
        if (mysqli_num_rows($person_res) > 0) {
            die("Email already exists in Persons table.");
        }

        // Construct SQL query to insert into Persons table
        $person_qry = "INSERT INTO `Persons`(`full_name`,`email`,`phone_number`,`password`,`Organizations_admins_id`,`user_type`)
              VALUES ('$full_name','$email','$phone_number','$password','$user_id','$user_type')";
        $person_res = mysqli_query($cdb, $person_qry);
    }
  }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Check if the required fields are set in the $_POST array
        if (isset($_POST['course_id']) && isset($_POST['Person_id'])) {
            // Retrieve the selected course id
            $course_id = $_POST['course_id'];

            // Retrieve the selected instructor id
            $Person_id = $_POST['Person_id'];

            // Insert a new row in the course_instructors table
            $qry = "INSERT INTO `Courses_Instructors` (`course_id`, `Person_id`, `Organizations_admins_id`) 
                    VALUES ('$course_id', '$Person_id', '$user_id')";
            $res = mysqli_query($cdb, $qry);

          
        } 
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Check if the required fields are set in the $_POST array
        if (isset($_POST['student_id']) && isset($_POST['course_instructor_id'])) {
            // Retrieve the selected student id
            $student_id = $_POST['student_id'];

            // Retrieve the selected course id
            $course_instructor_id = $_POST['course_instructor_id'];

            // Insert a new row in the course_enrollments table
            $qry = "INSERT INTO `course_enrollments`(`Person_id`, `course_instructor_id`,`Organizations_admins_id`) 
            VALUES ('$student_id','$course_instructor_id','$user_id')";
            $res = mysqli_query($cdb, $qry);

          
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
<div class="container-fluid">
    <div class="row"style="background-color:#F9F7F7">
        <div class="col-3">
            <div class="text-dark fw-bold p-5 fs-2"> EFER</div>
            <p class="px-5 pb-3">MAIN MENU</p>

    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active mx-5 w-75 border-0 " id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home"><img width="25" height="25" src="https://img.icons8.com/ios-filled/50/performance-macbook.png" alt="performance-macbook"/>
                <span class="px-3">Dashboard</span></a>
      <a class="list-group-item list-group-item-action mx-5 w-75 border-0" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile"><img width="25" height="25" src="https://img.icons8.com/windows/32/add-user-group-woman-woman.png" alt="add-user-group-woman-woman"/>
                <span class="px-3">Add Courses</span></a>
      <a class="list-group-item list-group-item-action mx-5 w-75 border-0" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages"><img width="25" height="25" src="https://img.icons8.com/ios/50/add-administrator.png" alt="add-administrator"/>
                <span class="px-3">Add User</span></a>
      <a class="list-group-item list-group-item-action mx-5 w-75 border-0" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings"><img width="25" height="25" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/48/external-system-accounting-tanah-basah-glyph-tanah-basah.png" alt="external-system-accounting-tanah-basah-glyph-tanah-basah"/>
                <span class="px-3">Join Ins</span></a>
      <a class="list-group-item list-group-item-action mx-5 w-75 border-0" id="list-lol-list" data-bs-toggle="list" href="#list-lol" role="tab" aria-controls="list-lol"><img width="25" height="25" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/48/external-system-accounting-tanah-basah-glyph-tanah-basah.png" alt="external-system-accounting-tanah-basah-glyph-tanah-basah"/>
                <span class="px-3">Join stu</span></a>
      <a class="list-group-item list-group-item-action mx-5 w-75 border-0" id="list-nice-list" data-bs-toggle="list" href="#list-nice" role="tab" aria-controls="list-nice"><img width="25" height="25" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/48/external-system-accounting-tanah-basah-glyph-tanah-basah.png" alt="external-system-accounting-tanah-basah-glyph-tanah-basah"/>
                <span class="px-3">View cou</span></a>
      <a class="list-group-item list-group-item-action mx-5 w-75 border-0" id="list-pro-list" data-bs-toggle="list" href="#list-pro" role="tab" aria-controls="list-pro"><img width="25" height="25" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/48/external-system-accounting-tanah-basah-glyph-tanah-basah.png" alt="external-system-accounting-tanah-basah-glyph-tanah-basah"/>
                <span class="px-3">View ins</span></a>
      <a class="list-group-item list-group-item-action mx-5 w-75 border-0" id="list-bro-list" data-bs-toggle="list" href="#list-bro" role="tab" aria-controls="list-bro"><img width="25" height="25" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/48/external-system-accounting-tanah-basah-glyph-tanah-basah.png" alt="external-system-accounting-tanah-basah-glyph-tanah-basah"/>
                <span class="px-3">View stu</span></a>
                                <a href="../index.php" class="btn text-white " style="background-color: #146C94;bottom:0%; ">Logout</a>

    </div>
  </div>
  <div class="col-9" style="background-color:#DBE2EF;">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        <?php include 'dashbord.php' ?>
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      <?php include 'add_courses.php' ?>
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
      <?php include 'add_user.php' ?>
      </div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
      <?php include 'join_ins.php' ?>
    </div>
     <div class="tab-pane fade" id="list-lol" role="tabpanel" aria-labelledby="list-lol-list">
     <?php include 'join_stu.php' ?>
    </div>
      <div class="tab-pane fade" id="list-nice" role="tabpanel" aria-labelledby="list-nice-list">
      <?php include 'view_cou.php' ?>

    </div>
      <div class="tab-pane fade" id="list-pro" role="tabpanel" aria-labelledby="list-pro-list">
      <?php include 'view_ins.php' ?>

    </div>
      <div class="tab-pane fade" id="list-bro" role="tabpanel" aria-labelledby="list-bro-list">
      <?php include 'view_stu.php' ?>


    </div>
    </div>
  </div>
</div>
</div>
<script src="../assets/js/jquery-3.6.0.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-FmBSG9Iu5hxfUt+gI+wRVcwAL6s8LDZwb4UQ2YUcUGlW8fMxhF6Q1sfZan6xOZvj" crossorigin="anonymous"></script>
</body>
</html>
