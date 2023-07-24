<?php
require __DIR__ . '/../cdb.php';

$id = $_GET['id'];

if ($_POST) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];

    $qry = "UPDATE `Persons` SET `full_name`='$full_name',`email`='$email',
            `phone_number`='$phone_number',`password`='$password'
            WHERE id = $id;";
    $res = mysqli_query($cdb, $qry);
    header('location:org_admin.php');
}

// Fetch the student record from the database
$qry = "SELECT * FROM `Persons` WHERE id = $id";
$res = mysqli_query($cdb, $qry);
$student = mysqli_fetch_assoc($res);
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/js/bootstrap.js" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:ital,wght@0,100;0,300;1,400&family=Teko:wght@600&display=swap" rel="stylesheet">
</head>
<body style="background-color: #DBE2EF">

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-6 mt-5">
            <div class="card rounded">
                <h1 class="text-center my-3">Update student</h1>
                <div class="card-body">
                    <form method="post" action="#">
                        <div class="row mb-3">
                            <div class="col">
                                <label for="full_name">Full Name</label>
                                <input name="full_name" type="text" value="<?php echo $student['full_name']; ?>" class="form-control" style="height: 50px; background-color: #DBE2EF" required />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="email">Email</label>
                                <input name="email" type="email" value="<?php echo $student['email']; ?>" class="form-control" style="height: 50px; background-color: #DBE2EF" required />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="phone_number">Phone Number</label>
                                <input name="phone_number" type="tel" value="<?php echo $student['phone_number']; ?>" class="form-control" style="height: 50px; background-color: #DBE2EF" required />
                            </div>
                        </div>
                        <div class="row mb-3">
 
                        </div>
                        <button type="submit" class="btn text-white w-100 mt-5" style="background-color: #146C94;">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="org_admin.php" class="mb-5 btn position-fixed" style="background-color: #146C94; color: #F9F7F7;">Go Back</a>
</div>
</body>
</html>
