<?php 
require __DIR__ . '/../cdb.php';

// get the instructor ID from the URL parameter
$id = $_GET['id'];

if ($_POST) {
    $full_name = $_POST['full_name'];	
    $email = $_POST['email'];	
    $phone_number = $_POST['phone_number'];	
    $password = $_POST['password'];	

    $qry = "UPDATE `Persons` SET `full_name`='$full_name', `email`='$email', `phone_number`='$phone_number', `password`='$password' WHERE id = $id;";
    $res = mysqli_query($cdb, $qry);
    header('location: org_admin.php');	
}

// fetch the instructor data for the given ID
$qry = "SELECT * FROM Persons WHERE Persons.id = $id";
$res = mysqli_query($cdb, $qry);

if (mysqli_num_rows($res) > 0) {
    $r = mysqli_fetch_assoc($res);
} else {
    die("Instructor not found.");
}
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
<body style="background-color:#DBE2EF">
<div class="container">
    <div class="card">
        <div class="card-body" style="background-color:#DBE2EF;">
            <div class="row justify-content-center align-items-center" style="height: 80vh;">
                <div class="col-6">
                    <div class="card" style="background-color: #F9F7F7; border-radius: 25px">
                        <h1 class="text-center my-3 pb-3 pt-3" style="color: #DBE2EF;">Update Instructor</h1>
                        <div class="card-body">
                            <form method="post" action="">
                                <div class="form-group">
                                    <label for="full_name">Full Name</label>
                                    <input type="text" name="full_name" id="full_name" class="form-control" value="<?php echo $r['full_name']; ?>" style="height: 50px; background-color:#DBE2EF">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="<?php echo $r['email']; ?>" style="height: 50px; background-color:#DBE2EF">
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="text" name="phone_number" id="phone_number" class="form-control" value="<?php echo $r['phone_number']; ?>" style="height: 50px; background-color:#DBE2EF">
                                </div>

                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <button type="submit" class="btn text-white w-100 mt-5" style="background-color: #146C94;">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="org_admin.php" class="mb-5 btn position-fixed" style="background-color: #146C94; color: #F9F7F7;">Go Back</a>
</div>
</body>
</html>
