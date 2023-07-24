<?php include 'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Frequently Asked Questions</title>
</head>
<body>

  <div class="container mt-5">
    <h1 class="mb-4">Frequently Asked Questions (FAQ)</h1>

    <div class="accordion" id="faqAccordion">

      <!-- General Questions -->
      <div class="card">
        <div class="card-header" id="generalHeading">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#generalCollapse" aria-expanded="true" aria-controls="generalCollapse">
              General Questions
            </button>
          </h5>
        </div>

        <div id="generalCollapse" class="collapse show" aria-labelledby="generalHeading" data-parent="#faqAccordion">
          <div class="card-body">
            <p>Question 1: What is our organization's mission?</p>
            <p>Answer: Our organization's mission is to empower individuals and organizations through education by providing high-quality learning resources and fostering a supportive learning community.</p>
            
            <p>Question 2: How can I contact your organization?</p>
            <p>Answer: You can contact our organization through various channels. You can reach out to our support team by sending an email to support@organization.com or by calling our helpline at +1-123-456-7890. Additionally, you can also connect with us through our social media channels for quick updates and communication.</p>
            
            <p>Question 3: How do I request to join your system?</p>
            <p>Answer: To request to join our system, please visit our website and navigate to the "Join Us" or "Registration" section. Fill out the registration form with your relevant information, including your name, email address, and any other required details. Submit the form, and our team will review your request. If approved, you will receive an email notification with instructions on how to set up your account and access our system.</p>
          </div>
        </div>
      </div>

      <!-- Account Management -->
      <div class="card">
        <div class="card-header" id="accountHeading">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#accountCollapse" aria-expanded="false" aria-controls="accountCollapse">
              Account Management
            </button>
          </h5>
        </div>

        <div id="accountCollapse" class="collapse" aria-labelledby="accountHeading" data-parent="#faqAccordion">
          <div class="card-body">
            <p>Question 1: How do I create an account?</p>
            <p>Answer: To create an account, please follow these steps:

Visit our website and navigate to the registration page.
Fill out the registration form with the required information, such as your organization's name, contact person's name, email address, and any other necessary details.
Submit the form to send the account creation request to our system.
Our team will review the request and create an account for your organization based on the provided information.
Once the account is created, you will receive an email with your login credentials and further instructions on how to access and use the system.</p>
            
            <p>Question 2: How can I update my account information?</p>
            <p>Answer: To update your account information, log in to your account and navigate to the "Account Settings" or "Profile" page. From there, you can edit your personal details, such as your name, email address, contact information, and profile picture. Make the necessary changes and click on the "Save" or "Update" button to save your updated account information.</p>
            
            <p>Question 3: What should I do if I forget my password?</p>
            <p>Answer: If you forget your password, you can reset it by clicking on the "Forgot Password" or "Reset Password" link on the login page. Enter the email address associated with your account, and we will send you an email with a password reset link. Follow the instructions in the email to set a new password for your account. Make sure to choose a strong password that is unique and not easily guessable. If you need further assistance, you can contact our support team for help with password recovery.</p>
          </div>
        </div>
      </div>

      <!-- Courses -->
      <div class="card">
        <div class="card-header" id="coursesHeading">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#coursesCollapse" aria-expanded="false" aria-controls="coursesCollapse">
              Courses
            </button>
          </h5>
        </div>

        <div id="coursesCollapse" class="collapse" aria-labelledby="coursesHeading" data-parent="#faqAccordion">
          <div class="card-body">
            <p>Question 1: How can I add a new course?</p>
            <p>Answer: To add a new course, log in to your account and navigate to the "Courses" or "Course Management" section. Look for the option to "Add New Course" or "Create Course." Fill out the required information, such as the course title, description, duration, and any other relevant details. You may also upload course materials, such as videos, documents, or presentations. Once you have provided all the necessary information, click on the "Save" or "Submit" button to add the new course to your system.</p>
            
            <p>Question 2: Can I edit or delete a course after it has been added?</p>
            <p>Answer: Yes, as an administrator or course manager, you can edit or delete a course after it has been added. To make changes to a course, navigate to the "Course Management" section or access the specific course's settings. From there, you can edit the course details, update the content, modify the schedule, or make any other necessary adjustments. If you wish to delete a course, locate the option to "Delete Course" or "Remove Course." Please note that deleting a course will permanently remove all associated content and data.</p>
            
            <p>Question 3: How do I assign instructors to courses?</p>
            <p>Answer: To assign instructors to courses, go to the course management section or the specific course's settings. Look for the option to "Manage Instructors" or "Assign Instructors." From there, you can search for and select the instructors you want to assign to the course. You may have the option to assign multiple instructors to a single course, depending on your system's capabilities. Once you have selected the instructors, save the changes, and they will be assigned to the course. Instructors will then have the necessary access and permissions to manage and conduct the course activities.</p>
          </div>
        </div>
      </div>

      <!-- Instructors -->
      <div class="card">
        <div class="card-header" id="instructorsHeading">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#instructorsCollapse" aria-expanded="false" aria-controls="instructorsCollapse">
              Instructors
            </button>
          </h5>
        </div>

        <div id="instructorsCollapse" class="collapse" aria-labelledby="instructorsHeading" data-parent="#faqAccordion">
          <div class="card-body">
            <p>Question 1: How can I become an instructor?</p>
            <p>Answer: To become an instructor, you can join an organization that offers instructor opportunities and has a system for adding instructors. Please visit our website and navigate to the "Join as an Instructor" or "Instructor Registration" section. Fill out the registration form, providing details about your qualifications, experience, and areas of expertise. If approved, you will gain access to the instructor dashboard, where you can add courses, manage students, and schedule online meetings. Our team will review your application, and if selected, we will contact you with further instructions on how to proceed as an instructor within our organization.</p>
            
            <p>Question 2: How do I schedule an online meeting for my course?</p>
            <p>Answer: As an instructor, you can schedule online meetings for your course through our platform. Log in to your account and navigate to the course management or instructor dashboard. Look for the option to "Schedule Meeting" or "Create Event." Select the date, time, and duration of the meeting, and provide any additional details or agenda. Save the meeting, and it will be added to the course schedule. Students enrolled in your course will be notified of the meeting and provided with the necessary details to join the online session.</p>
            
            <p>Question 3: Can I add or remove students from my course?</p>
            <p>Answer: As an instructor, you typically do not have the authority to directly add or remove students from a course. Student enrollment is typically managed by the system administrators or course administrators. If you have specific concerns regarding student enrollment or if you believe a student should be added or removed from your course, please contact the system administrators or the designated course administrators. They will be able to assist you and make any necessary adjustments to the student roster for your course.</p>
          </div>
        </div>
      </div>

   

    </div> <!-- End of accordion -->

  </div> <!-- End of container -->

  <div class="card text-center bg-dark text-white">
  <div class="card-body">
    <h5 class="card-title">EFEA</h5>
    <p class="card-text">Education facial expression analysis</p>
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
          <div class="btn btn-dark btn-border-1 w-100 ">
            <a href="help.php" style="color:teal; text-decoration:none">Help</a>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
