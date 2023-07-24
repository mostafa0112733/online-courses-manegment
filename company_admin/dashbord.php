<?php require __DIR__ . '/../cdb.php';
if (isset($_SESSION['user_id']) ) {
    $user_id = $_SESSION['user_id'];
}
?>
<div class="card my-5">
        <div class="card-body  "style="background-color:#DBE2EF;">
            <h2 ><img width="50" height="50" src="https://img.icons8.com/ios-filled/50/performance-macbook.png" alt="performance-macbook"/>
Dashboard</h2>
            <div class="row m-5">
            <div class="container">
    <div class="row">
        <div class="col-4">
            <div class="card mb-3 " style="background-color:#DBE2EF; border:0px;">
                <div class="card-body" style="background-color:#146C94; border-radius: 25px;width :250px">
                    <p class="text-white fs-5">Total instructor</p>
    <h4 class="text-white">
                <?php
    $qry = "SELECT COUNT(*) AS Instructors_count FROM Persons WHERE user_type = 'instructor' AND Organizations_admins_id= $user_id";
    $res = mysqli_query($cdb, $qry);
    $row = $res->fetch_assoc();
    echo $row['Instructors_count'];
?>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card mb-3" style="background-color:#DBE2EF; border:0px;"> 
                <div class="card-body" style="background-color:#146C94; border-radius: 25px;width :250px">
                <p class="text-white fs-5">Total student</p>
                <h4 class="text-white">

                <?php
    $qry = "SELECT COUNT(*) AS student_count FROM Persons WHERE user_type = 'student' AND Organizations_admins_id= $user_id";
    $res = mysqli_query($cdb, $qry);
    $row = $res->fetch_assoc();
    echo $row['student_count'];
?>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card mb-3" style="background-color:#DBE2EF;border:0px;">
                <div class="card-body" style="background-color:#146C94; border-radius: 25px;width :250px">
                <p class="text-white fs-5">Total Courses</p>
                <h4 class="text-white">
                <?php
    $qry = "SELECT COUNT(*) AS Courses_count FROM Courses WHERE  Organizations_admins_id= $user_id";
    $res = mysqli_query($cdb, $qry);
    $row = $res->fetch_assoc();
    echo $row['Courses_count'];
?>
                        </div>
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-4">
            <div class="card mb-3" style="background-color:#DBE2EF; border:0px;">
                <div class="card-body" style="background-color:#19A7CE; border-radius: 25px;width :250px">
                <p class="text-white fs-5">Total Persons</p>
                <h4 class="text-white">
                <?php
    $qry = "SELECT COUNT(*) AS Persons_count FROM Persons WHERE  Organizations_admins_id= $user_id";
    $res = mysqli_query($cdb, $qry);
    $row = $res->fetch_assoc();
    echo $row['Persons_count'];
?>
                </div>
            </div>
        </div>

    </div>
<br><br><br><br><br><br><br><br><br>
</div>
            </div>
        </div>
    </div>
    