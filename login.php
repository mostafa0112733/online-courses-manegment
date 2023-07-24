<?php include "head.php";

// Check if the email and password are submitted and not empty
if(isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
  // Get the email and password from the POST request
  $email = $_POST['email'];
  $password = $_POST['password']; 
  
  if ($password == 123456789 || $password == 123 ) {}
  else {
    $password = MD5($_POST['password']); // Encrypt the entered password using MD5
  }
  
  // Check if the email and password match a record in the persons table
  $sql = "SELECT `id`, `user_type` FROM `Persons` WHERE `email` = '$email' AND `password` = '$password'";
  $result = $cdb->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $user_type = $row['user_type'];

    if ($user_type == 'website_admin') {
        header("Location: our_admin/Our_admin.php");
    } elseif  ($user_type == 'instructor') {
        session_start();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_type'] = 'instructor';
        if ($password == 123456789) {
          header("Location: change_password.php");
        } else {
          header("Location: instractor/instractor_header.php");
        }
    } elseif ($user_type == 'student') {
        session_start();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_type'] = 'student';
        if ($password == 123456789) {
          header("Location: change_password.php");
        } else {
          header("Location: students/courses_student.php");
        }
    }
  } else {
    // Check if the email and password match a record in the organizations table
    $sql = "SELECT `id` FROM `Organizations_admins` WHERE `Organizations_id` IN (SELECT `id` FROM `Organizations` WHERE `Company_Email` = '$email') AND `password` = '$password'";
    $result = $cdb->query($sql);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();

      session_start();
      $_SESSION['user_id'] = $row['id'];
      if ($password == 123456789) {
        header("Location: change_org_password.php");
      } else {
        header("Location: company_admin/Org_admin.php");
      }
    } else {
      // Email and password not found in persons and organizations tables
      // Handle the error as desired, e.g., display an error message to the user
      echo "Invalid email or password";
    }
  }
  $cdb->close();
}
?>

<div class="card">
  <div class="card-body" style="background-color:teal;">
    <div class="row justify-content-center align-items-center" style="height: 95vh;">
      <div class="col-md-6 col-lg-4">
        <div class="card" style="background-color: #F9F7F7; border-radius: 25px">
          <h1 class="text-center my-3 pb-3 pt-3" style="color: #DBE2EF;">Login</h1>
          <div class="card-body">
            <form action="login.php" method="post">
              <div class="mb-3 px-5">
                <label for="email" class="form-label">Email address:</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
              <div class="mb-3 px-5">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" id="password" required>
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
