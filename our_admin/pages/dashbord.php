<?php require __DIR__ . '/../../cdb.php'; ?>
<div class="card my-5">
    <div class="card-body" style="background-color:#DBE2EF;">
        <h2><img width="50" height="50" src="https://img.icons8.com/ios-filled/50/performance-macbook.png" alt="performance-macbook" />
            Dashboard</h2>
            <div class="row my-3">
        <div class="col-4">
            <div class="card mb-3" style="background-color:#DBE2EF; border:0px;">
                <div class="card-body" style="background-color:#146C94; border-radius: 25px;width :250px">
                <p class="text-white fs-5">Total Instructors</p>
                <h4 class="text-white">
                <?php
    $qry = "SELECT COUNT(*) AS Instructors_count FROM Persons WHERE user_type = 'instructor'";
    $res = mysqli_query($cdb, $qry);
    $row = $res->fetch_assoc();
    echo $row['Instructors_count'];
?>

                                </h4>
                            </div>
                        </div>
                    </div>
        <div class="col-4">
            <div class="card mb-3" style="background-color:#DBE2EF; border:0px;"> 
                <div class="card-body" style="background-color:#146C94; border-radius: 25px;width :250px">
                <p class="text-white fs-5">Total Student</p>
                                <h4 class="text-white">
                                <?php
    $qry = "SELECT COUNT(*) AS Instructors_count FROM Persons WHERE user_type = 'student'";
    $res = mysqli_query($cdb, $qry);
    $row = $res->fetch_assoc();
    echo $row['Instructors_count'];
?>
                                </h4>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card mb-3" style="background-color:#DBE2EF;border:0px;">
                <div class="card-body" style="background-color:#146C94; border-radius: 25px;width :250px">
                <p class="text-white fs-5">Total Courses</p>
                <h4 class="text-white">
                                    <?php
                                    $qry="SELECT COUNT(*) AS Courses_count FROM Courses";
                                    $res = mysqli_query($cdb, $qry);
                                    $row = $res->fetch_assoc();
                                    echo $row['Courses_count'];
                                    ?>
                                </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-4">
            <div class="card mb-3" style="background-color:#DBE2EF; border:0px;">
                <div class="card-body" style="background-color:#19A7CE; border-radius: 25px;width :250px">
                <p class="text-white fs-5">Total Organizations</p>
                <h4 class="text-white">
                <h4 class="text-white">
                                    <?php
                                    $qry="SELECT COUNT(*) AS organization_count FROM Organizations_admins";
                                    $res = mysqli_query($cdb, $qry);
                                    $row = $res->fetch_assoc();
                                    echo $row['organization_count'];
                                    ?>
                                </h4>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card mb-3" style="background-color:#DBE2EF; border:0px;">
                <div class="card-body" style="background-color:#19A7CE;border-radius: 25px;width :250px">
                <p class="text-white fs-5">Total Persons</p>
                                <h4 class="text-white">
                                <?php
                                 $qry = "SELECT COUNT(*) AS Persons_count FROM Persons WHERE user_type != 'website_admin'";
                                 $res = mysqli_query($cdb, $qry);
                                 $row = $res->fetch_assoc();
                                 echo $row['Persons_count'];
                                 ?>
                          </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4" style="background-color:#DBE2EF; border:0px;">
            <div class="card mb-3" style="background-color: #F9F7F7; border-radius: 25px;width :250px">
                <div class="card-body">
                <p class="text-dark fs-5">Total Materials</p>
                <h4 class="text-dark">
                                    <?php
                                    $qry="SELECT COUNT(*) AS Materials_count FROM Materials";
                                    $res = mysqli_query($cdb, $qry);
                                    $row = $res->fetch_assoc();
                                    echo $row['Materials_count'];
                                    ?>
                                </h4>                
                              </div>
            </div>
        </div>
        <div class="col-4" style="background-color:#DBE2EF; border:0px;">
            <div class="card mb-3" style="background-color: #F9F7F7; border-radius: 25px;width :250px">
                <div class="card-body">
                <p class="text-dark fs-5">Total Meetings</p>
                <h4 class="text-dark">
                                    <?php
                                    $qry="SELECT COUNT(*) AS Meetings_count FROM Meetings";
                                    $res = mysqli_query($cdb, $qry);
                                    $row = $res->fetch_assoc();
                                    echo $row['Meetings_count'];
                                    ?>
                                </h4>                 
                </div>
            </div>
        </div>
      </div><br><br><br><br><br><br><br>
    </div>
</div>
