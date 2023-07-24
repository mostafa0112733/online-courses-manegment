<?php require __DIR__ . '/../../cdb.php'; 
$id = $_GET['id'];
if ($_POST) {
    $full_name = $_POST['full_name'];
    $Company_Name = $_POST['Company_Name'];
    $Company_Email = $_POST['Company_Email'];
    $Country = $_POST['Country'];
    $phone_number = $_POST['phone_number'];
    $Additional_information = $_POST['Additional_information'];
    $qry = "UPDATE Organizations SET `full_name` = '$full_name', `phone_number` = '$phone_number', `Company_Email` = '$Company_Email', `Company_Name` = '$Company_Name', `Country` = '$Country', `Additional_information` = '$Additional_information' WHERE id = '$id'";
    $res = mysqli_query($cdb, $qry);
    if ($res) {
        header('location:../Our_admin.php');
        exit();
    } else {
        echo "Error updating request: " . mysqli_error($cdb);
        exit();
    }
}
$qry = "SELECT * FROM Organizations WHERE id = '$id'";
$res = mysqli_query($cdb, $qry);

if (mysqli_num_rows($res) == 0) {
    echo "Request not found";
    exit();
}
$r = mysqli_fetch_assoc($res);
?>
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
    .list-group-item.active{  background-color: #19A7CE; }
    .list-group-item.active:focus,
.list-group-item.active:hover {
  background-color: #19A7CE; 
}
</style>
</head>
<body style="background-color:#DBE2EF;">
<div class="card ">
  <div class="card-body"style="background-color:#DBE2EF;">
                                         <div class="row justify-content-center  " >
                                             <div class="col-6" >
                                                 <div class="card " style="background-color: #F9F7F7; border-radius: 25px">
                                                     <h1 class="text-center my-3 pb-3 pt-3" style="color: #DBE2EF;">Edit Request</h1> 
                                                     <div class="card-body">

                    
	<?php
	$n = 1;
	foreach ($res as $r) :?>
	<form action="#" method="post">
	       <div class="mb-3 px-5">
                <label for="full_name">Full Name</label>   
	       	    <input name='full_name' type="text" value="<?= $r['full_name'] ?>" class="form-control my-1" style="height: 50px; background-color:#DBE2EF" required />
	       </div>
		
			<div class="mb-3 px-5">
                <label for="full_name">Company Name</label> 
				<input name='Company_Name' type="text" value="<?= $r['Company_Name'] ?>" class="form-control my-1"  style="height: 50px; background-color:#DBE2EF" required/>
			</div>


				<div class="mb-3 px-5">
                <label for="Company_Email">Company Email</label> 
				<input name='Company_Email' type="text" value="<?= $r['Company_Email'] ?>" class="form-control my-1" style="height: 50px; background-color:#DBE2EF" required />
			</div>

			<div class="mb-3 px-5">
                <label for="full_name">Country</label> 
				<input name='Country' type="text" value="<?= $r['Country'] ?>" class="form-control my-1" style="height: 50px; background-color:#DBE2EF" required/>
			</div>

			<div class="mb-3 px-5">
                <label for="full_name">phone number</label> 
				<input name='phone_number' type="number" value="<?= $r['phone_number'] ?>" class="form-control my-1" style="height: 50px; background-color:#DBE2EF" required/>
			</div>

			<div class="mb-3 px-5">
                <label for="full_name">Additional information</label> 
				<input name='Additional_information' type="text" value="<?= $r['Additional_information'] ?>"  class="form-control my-1" style="height: 50px; background-color:#DBE2EF" required />
			</div>

            <button type="submit" class="btn text-white w-100 mt-5" style="background-color: #146C94;">Update</button>
		
	</form>
<?php endforeach; ?>
<table>






















