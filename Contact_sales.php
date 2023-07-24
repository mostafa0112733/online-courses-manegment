<?php 
include 'header.php';
if($_POST){
  $full_name = $_POST['full_name'];
  $phone_number = $_POST['phone_number'];
  $Company_Name = $_POST['Company_Name'];
  $Comoany_Email =  $_POST['Comoany_Email'];
  $Country =  $_POST['Country'];
  $Additional_information = $_POST['Additional_information'];

  // Construct SQL query
  $qry = "INSERT INTO `Requests`(`full_name`,`phone_number`,`Company_Name`,`Company_Email`,`Country`,`Additional_information`) 
  VALUES ('$full_name','$phone_number','$Company_Name','$Comoany_Email','$Country','$Additional_information')";
  $res = mysqli_query($cdb,$qry);


  if ($res) {
    echo "Data inserted successfully.";
  } else {
    echo "Error: " . mysqli_error($cdb);
  }
}
?>
<div class="container">
  <div class="row">
    <div class="col-md-6 p-5">
      <h1>Contact Sales</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, error tempore, sit doloribus quod recusandae ullam tempora cupiditate iusto eligendi facilis veniam labore, harum quos voluptatum corporis impedit enim aperiam?</p>
      <p>Fill out the form to get in touch with one of our representatives.</p>
      <img src="assets/images/Screenshot (518).png" class="h-50 w-100 pt-5" alt="">
    </div>
    <div class="col-md-6 p-5">
      <div class="box bg-white">
        <h2>Please enter your information</h2>
        <p>* Required information</p>
        <form method="post" action="#">
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="full_name" class="form-label">Full name*</label>
              <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" required>
            </div>
            <div class="col-md-6">
              <label for="phone_number" class="form-label">Phone Number*</label>
              <input type="number" class="form-control" name="phone_number" id="phone_number" placeholder="Phone Number" required>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="Company_Name" class="form-label">Company Name*</label>
              <input type="text" class="form-control" name="Company_Name" id="Company_Name" placeholder="Company name" required>
            </div>
            <div class="col-md-6">
              <label for="Comoany_Email" class="form-label">Company Email*</label>
              <input type="email" class="form-control" name="Comoany_Email" id="Comoany_Email" placeholder="Company Email" required>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-md-6">
              <label for="Country" class="form-label">Country/Region*</label>
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
            </div>
            </div>
           
              <label for="Additional_information" class="form-label">Additional information related to your business needs*</label>
              <textarea class="form-control" name="Additional_information" id="Additional_information" rows="3" required></textarea>
            
          
            
          <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

            







    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>