<?php require __DIR__ . '/../../cdb.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../../assets/js/bootstrap.js" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:ital,wght@0,100;0,300;1,400&family=Teko:wght@600&display=swap" rel="stylesheet">
<style>
    .list-group-item.active{  background-color: blue; }
    .list-group-item.active:focus,
.list-group-item.active:hover {
  background-color: blue; 
}
</style>
</head>
<body style=" background-color:#DBE2EF">
<?php

$id = $_GET['id'];

if ($_POST) {

    $Company_Email = $_POST['Company_Email'];

    $active_date = $_POST['active_date'];
    $due_date = $_POST['due_date'];

    // check if email already exists in Persons table
    $email_exists_query = "SELECT * FROM Persons WHERE email='$Company_Email'";
    $email_exists_result = mysqli_query($cdb, $email_exists_query);

    if (mysqli_num_rows($email_exists_result) > 0) {
        // email already exists, show error message
        echo "<div class='alert alert-danger'>Email already exists in Persons table.</div>";
    } else {
        // email doesn't exist, insert into Organizations table
        $insert_organization_query = "INSERT INTO `Organizations_admins` (`Organizations_id`,  `active_date`, `due_date`)
                                       VALUES ('$id', '$active_date', '$due_date')";
        $insert_organization_result = mysqli_query($cdb, $insert_organization_query);

        if ($insert_organization_result) {
            header('location:../Our_admin.php');
        } else {
            echo "<div class='alert alert-danger'>Error adding organization.</div>";
        }
    }
}
$qry = "SELECT * FROM `Organizations` where id = $id";
$res = mysqli_query($cdb, $qry);
?>
	<?php
	$n = 1;
	foreach ($res as $r) :?>
<div class="container-fluid">
    <div class="row justify-content-center mt-5 pt-5">
        <div class="col-6">
            <div class="card rounded">
                <h1 class="text-center my-3">Add Organization</h1>
                <div class="card-body">
                    <form method="post" action="#">
                        <div class="mb-3 px-5">
                            <label for="full_name">Active date</label>
                            <input name='active_date' type="date" class="form-control my-1" style="height: 50px; background-color:#DBE2EF"   required />
                        </div>

                        <div class="mb-3 px-5">   
                            <label for="email">Due date</label>
                            <input name='due_date' type="date" class="form-control my-1" style="height: 50px; background-color:#DBE2EF" required />
                        </div>

                        <div class="mb-3 px-5">
                            <input name='Company_Email' type="hidden" value="<?= $r['Company_Email'] ?> class="form-control my-1"  required />
                        </div>

                        <button type="submit" style="background-color:#146C94; border:0px;" class="btn text-white form-control mt-5">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

				<?php endforeach; ?>

