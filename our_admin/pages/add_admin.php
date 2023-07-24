<?php 
 require __DIR__ . '/../../cdb.php';
if($_POST){
  $full_name =  $_POST['full_name'];
  $email =  $_POST['email'];
  $phone_number =  $_POST['phone_number'];
  $password =  $_POST['password'];
  // Construct SQL query
  $qry = "INSERT INTO `Persons`(`full_name`,`email`,`phone_number`,`password`,`user_type`)
   VALUES ('$full_name','$email','$phone_number','$password','website_admin')";
  $res = mysqli_query($cdb,$qry);
  if ($res) {
    echo "<div class='alert alert-success'>Organization added successfully!</div>";
}else {
    echo "<div class='alert alert-danger'>Error adding organization.</div>";
}
}
?>		
    <div class="row justify-content-center mt-5 pt-5">
        <div class="col-6">
            <div class="card">
                <h1 class="text-center my-3" style=" color:#DBE2EF">Add Admin</h1>
                <div class="card-body">
                    <form method="post" action="#">
                        <div class="mb-3">
                          <label for="first_Name">full Name</label>
                            <input type="text" class="form-control my-1" id="full_name" name='full_name' placeholder="full Name" style="height: 50px; background-color:#DBE2EF" required />
                            </div>
      
                        <div class="mb-3">
                        <label for="middle_name">email</label>
                            <input type="email" class="form-control my-1" id="email" name='email' placeholder="email " style="height: 50px; background-color:#DBE2EF" required />
                            </div>
      
                        <div class="mb-3">
                        <label for="last_name">phone_number</label>
                            <input type="number" class="form-control my-1" id="phone_number" name='phone_number' placeholder="phone number" style="height: 50px; background-color:#DBE2EF" required />
                            </div>
      
                        <div class="mb-3">
                        <label for="email">password</label>
                            <input type="password" class="form-control my-1" id="password" name='password' placeholder="password " style="height: 50px; background-color:#DBE2EF" required />
                        </div>
      
         
                        <button type="submit" style="background-color:#146C94; border:0px;" class="btn text-white form-control mt-5">Add</button>
                    </form>
                </div>
            </div>
            <br><br><br><br><br><br><br>
        </div>
    </div>
 
