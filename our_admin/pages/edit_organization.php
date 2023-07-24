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

</head>
<?php
$id = mysqli_real_escape_string($cdb, $_GET['id']);
$qry = "SELECT o.*, r.* FROM Organizations_admins o INNER JOIN Organizations r ON o.Organizations_id = r.id WHERE o.id = '$id'";
$res = mysqli_query($cdb,$qry);

if ($res && mysqli_num_rows($res) > 0) {
    $r = mysqli_fetch_assoc($res);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name =  $_POST['full_name'];
    $phone_number =  $_POST['phone_number'];
    $Company_Name =  $_POST['Company_Name'];
    $Company_Email =   $_POST['Company_Email'];
    $Additional_information =  $_POST['Additional_information'];
    $active_date =  $_POST['active_date'];
    $due_date =   $_POST['due_date'];
    $Country =   $_POST['Country'];
    
    $qry = "UPDATE Organizations_admins o 
            INNER JOIN Organizations r ON o.Organizations_id = r.id 
            SET r.`full_name` = '$full_name', 
                r.`phone_number` = '$phone_number',
                r.`Company_Name` = '$Company_Name', 
                r.`Company_Email` = '$Company_Email',
                r.`Country` = '$Country',
                o.`due_date`='$due_date',
                o.`active_date`='$active_date' 
            WHERE o.id = '$id'";
    $res = mysqli_query($cdb,$qry);
}
?>

<body style="background-color:#DBE2EF;">
<div class="card ">
  <div class="card-body"style="background-color:#DBE2EF;">
                                         <div class="row justify-content-center  ">
                                             <div class="col-6" >
                                                 <div class="card " style="background-color: #F9F7F7; border-radius: 25px">
                                                     <h1 class="text-center my-3 pb-3 pt-3" style="color: #DBE2EF;">Update Organication</h1> 
                                                     <div class="card-body">
                    <form method="post" action="#">
                        <div class="row mb-3">
                            <div class="col">
                                <label for="full_name">Full Name</label>
                                <input name='full_name' type="text" value="<?= $r['full_name'] ?? '' ?>" class="form-control my-1"   class="form-control my-1" style="height: 50px; background-color:#DBE2EF" required />
                            </div>
                            <div class="col">
                                <label for="phone_number">Phone Number</label>
                                <input name='phone_number' type="number" value="<?= $r['phone_number'] ?? '' ?>" class="form-control my-1"  class="form-control my-1" style="height: 50px; background-color:#DBE2EF" required />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="Company_Name">Company Name</label>
                                <input name='Company_Name' type="text" value="<?= $r['Company_Name'] ?? '' ?>" class="form-control my-1"  class="form-control my-1" style="height: 50px; background-color:#DBE2EF" required />
                            </div>
                            <div  class="col">
                            <label for="Company_Email">Company Email</label>
                            <input name='Company_Email' type="email" value="<?= $r['Company_Email'] ?? '' ?>" class="form-control my-1"  class="form-control my-1" style="height: 50px; background-color:#DBE2EF" required />
                        </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="active_date">Active Date</label>
                                <input name='active_date' type="date" value="<?= $r['active_date'] ?? '' ?>" class="form-control my-1"  class="form-control my-1" style="height: 50px; background-color:#DBE2EF" required />
                            </div>
                            <div class="col">
                                <label for="due_date">Due Date</label>
                                <input name='due_date' type="date" value="<?= $r['due_date'] ?? '' ?>" class="form-control my-1"  class="form-control my-1" style="height: 50px; background-color:#DBE2EF" required />
                            </div>
                        </div>

                        <div class="mb-3">
                                <label for="Country">Country</label>
                                <input name='Country' type="text" value="<?= $r['Country'] ?? '' ?>" class="form-control my-1 w-50"  class="form-control my-1" style="height: 50px; background-color:#DBE2EF" required />
                            </div>
                        <div class="mb-3">
                            <label for="Additional_information">Additional Information</label>
                            <input name='Additional_information' type="text" value="<?= $r['Additional_information'] ?? '' ?>" class="form-control my-1"  class="form-control my-1" style="height: 50px; background-color:#DBE2EF" required />
                        </div>

                        <button type="submit" class="btn text-white w-100 mt-5" style="background-color: #146C94;">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
