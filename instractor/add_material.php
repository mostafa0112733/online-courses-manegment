<?php
require '../cdb.php';

$id = $_GET['id'];

if (isset($_FILES['file_path']) && isset($_POST['title']) && isset($_POST['description'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    // Process uploaded file
    $target_dir = "uploads/";
    $file_name = $_FILES['file_path']['name'];
    $file_tmp = $_FILES['file_path']['tmp_name'];
    $file_type = $_FILES['file_path']['type'];
    $file_size = $_FILES['file_path']['size'];
    $file_path = $target_dir . $file_name;
    
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    
    // Retrieve instructor ID from instructors table
    $instructor_id_query = "SELECT `Person_id` FROM `courses_instructors` WHERE `course_id` = $id";
    $instructor_id_result = $cdb->query($instructor_id_query);
    $instructor_id_row = $instructor_id_result->fetch_assoc();
    $instructor_id = $instructor_id_row['Person_id'];
    
    $qry = "INSERT INTO `Materials` (`course_id`, `Person_id`, `title`, `file_path`, `description`)
            VALUES ($id, $instructor_id, '$title', '$file_path', '$description')";

    $result = $cdb->query($qry);
    if ($result) {
        echo "<div class='alert alert-success'>Material added successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error adding material: " . mysqli_error($cdb) . "</div>";
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
    <div class="container mt-3">
        <div class="row justify-content-center mt-5 pt-5">
            <div class="col-4">
                <div class="card" style="background-color: #F9F7F7; border-radius: 25px">
                    <h1 class="text-center my-3">Add Material</h1>
                    <div class="card-body">
                        <form action="add_material.php?id=<?= $id ?>" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" style="height: 50px; background-color:#DBE2EF" required>
                            </div>
                            <div class="mb-3">
                                <label for="file_path">File</label>
                                <input type="file" class="form-control" id="file_path" name="file_path" style="height: 50px; background-color:#DBE2EF" required>
                            </div>
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" style="height: 50px; background-color:#DBE2EF" required></textarea>
                            </div>
                            <button type="submit" class="btn text-white w-100 mt-5" style="background-color: #146C94;">Add</button>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <a href="../index.php"class="position-fixed bottom-0 mb-5  btn position-fixed" style="background-color:#146C94;color:#F9F7F7;">Logout</a>
        <a href="instractor_header.php"class=" mb-5  btn position-fixed" style="background-color:#146C94;color:#F9F7F7;">go back</a>

    </div>
    
</body>
</html>
