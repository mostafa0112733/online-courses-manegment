<?php 
include 'header.php';?>
<div class="container mt-5"  >
  <div class="row mt-5" >
    <div class="col-md-6 p-5 mt-5" >
      <h1 style="color:teal;">    Contact EFEA    </h1>
<p>Please complete this form, and a member of the team will be in touch as soon as possible.</p>
<hr>
<h3 style="color:teal;">Customer support
</h3>
      <p>We’re here to help. If you have technical issues, please email support@EFEA.com
    </p>
    <hr>
    The Post Building, Museum St
    <br>
Egypt Nasr City, Cairo <br><br>

Email: info@EFEA.com <br>
Twitter: @EFEA <br>
LinkedIn: company/EFEA
    </div>

    <div class="col-md-6 p-5 mt-4"  style= "background: linear-gradient(to bottom right ,#2C3333,#2E4F4F,#0E8388,#CBE4DE );"">

      <div class="box ">

        <form method="post" action="#">

              <label for="full_name" class="form-label text-white">Full name</label>
              <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" required>

              <label for="phone_number" class="form-label text-white">Phone Number</label>
              <input type="number" class="form-control" name="phone_number" id="phone_number" placeholder="Phone Number" required>

              <label for="Company_Name" class="form-label text-white">Company Name</label>
              <input type="text" class="form-control" name="Company_Name" id="Company_Name" placeholder="Company name" required>

              <label for="Comoany_Email" class="form-label text-white">Company Email</label>
              <input type="email" class="form-control" name="Comoany_Email" id="Comoany_Email" placeholder="Company Email" required>

              <label for="Country" class="form-label text-white">Country/Region</label>
              <select class="form-select" name="Country" id="Country" required>
              <option value="Egypt">Egypt</option>
                <option value="United States">United States</option>
                <option value="Canada">Canada</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Germany">Germany</option>
                <option value="France">France</option>
                <option value="Japan">Japan</option>
                <option value="China">China</option>
                <option value="India">India</option>
                <option value="Australia">Australia</option>
              </select>


              <label for="Additional_information" class="form-label text-white">Additional information related to your business needs</label>
              <textarea class="form-control" name="Additional_information" id="Additional_information" rows="3" required></textarea>
            <p class="text-white pt-3">By clicking submit below, you consent to allow hazy.com to store and process the information submitted above. You can unsubscribe from these communications at any time.</p>
          <?php
            if($_POST){
  $full_name = $_POST['full_name'];
  $phone_number = $_POST['phone_number'];
  $Company_Name = $_POST['Company_Name'];
  $Comoany_Email =  $_POST['Comoany_Email'];
  $Country =  $_POST['Country'];
  $Additional_information = $_POST['Additional_information'];

  // Construct SQL query
  $qry = "INSERT INTO `Organizations`(`full_name`,`phone_number`,`Company_Name`,`Company_Email`,`Country`,`Additional_information`) 
  VALUES ('$full_name','$phone_number','$Company_Name','$Comoany_Email','$Country','$Additional_information')";
  $res = mysqli_query($cdb,$qry);


  if ($res) {
    echo '<div class="text-white">Data inserted successfully.</div>';
} else {
    echo '<div class="text-danger">Error: ' . mysqli_error($cdb) . '</div>';
}

}
?><br>
          <button type="submit" class="btn btn-primary mt-3 text-white" style="background-color: teal;" >Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<br><br>
<div class="card text-center bg-dark text-white">
  <div class="card-body">
    <h5 class="card-title">ES</h5>
    <p class="card-text">Education System</p>
    <div class="d-flex justify-content-center">
  
        <div class="col-3 col-md-1">
          <div class="btn btn-dark btn-border-1">
            <a href="index.php" style="color:teal; text-decoration:none">Home</a>
          </div>
        </div>
        <div class="col-3 col-md-1">
          <div class="btn btn-dark btn-border-1">
            <a href="why_deep_learing.php" style="color:teal; text-decoration:none">why deep learing</a>
          </div>
        </div>
        <div class="col-3 col-md-1">
          <div class="btn btn-dark btn-border-1">
            <a href="our_technology.php" style="color:teal; text-decoration:none">our technology</a>
          </div>
        </div>
        <div class="col-3 col-md-1">
          <div class="btn btn-dark btn-border-1 w-100">
            <a href="education_system.php" style="color:teal; text-decoration:none">Education System</a>
          </div>
        </div>
        <div class="col-3 col-md-1">
          <div class="btn btn-dark btn-border-1 w-100">
            <a href="get_in_touch.php" style="color:teal; text-decoration:none">Get In Touch</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>