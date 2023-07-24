<?php 
require __DIR__ . '/../cdb.php';

$id = $_GET['id'];

if ($_POST) {
    $course_name = $_POST['course_name'];	
    $qry = "UPDATE `Courses` SET `course_name`='$course_name' WHERE id = $id;";
    $res = mysqli_query($cdb, $qry);
    header('location:view_courses.php');	
}

$qry = "SELECT * FROM `Courses` where id = $id";
$res = mysqli_query($cdb, $qry);
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
<body>
    <div class="container">
        <div class="row justify-content-center mt-5" style="height: 100vh;">
            <div class="col-6">
                <div class="card rounded">
                    <h1 class="text-center my-3" style="color: #DBE2EF;">Update Course</h1>
                    <div class="card-body">
                        <?php foreach ($res as $r) : ?>
                        <form method="post" action="#">
                            <div class="mb-3">
                                <label for="course_name" class="form-label">Course Name</label>
                                <input style="height: 50px; background-color:#DBE2EF" type="text" class="form-control" id="course_name" name="course_name" value="<?= $r['course_name'] ?>" required>
                            </div>
                            <button type="submit" class="btn text-white w-100 mt-5" style="background-color: #146C94;">Update</button>
                        </form>
                        <?php endforeach; ?>
                    </div>
                </div>    <a href="org_admin.php" class="mb-5 btn position-fixed" style="background-color: #146C94; color: #F9F7F7;">Go Back</a>

            </div>
        </div>
        
    </div>
</body>
</html>
