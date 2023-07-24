<?php require "../cdb.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-white">
  <div class="container-fluid">
    <a class="navbar-brand px-5" href="#"><i class="fab fa-airbnb text-primary"></i> Emo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">
        <!-- <li class="nav-item">
          <a class="nav-link px-3 active" aria-current="page" href="#">Create meeting</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link px-3 " aria-current="page" href="courses_student.php">courses</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle px-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            schedule a meeting
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Schedule_courses.php">Schedule_courses</a></li>
              <li><a class="dropdown-item" href="Schedule/show_History_Schedule.php">show_History_Schedule</a></li>
              <li><a class="dropdown-item" href="Schedule/show_Schedule.php">show_Schedule</a></li>
            </ul>
          </li>
       
       
     
       
      </ul>

    </div>
  </div>
</nav>
<!-- contanir -->
</div>
<?php include"../footer.php";?>
