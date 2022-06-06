<?php
session_start();
if (!isset($_SESSION['sessionid'])) {
    echo "<script>alert('Session not available. Please login');</script>";
    echo "<script> window.location.replace('login.php')</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="../css/basic_layout.css">
    
    <title>W3.CSS Template</title>
  </head>
  <body>

    <nav>
      <div class="logo">MyTutor</div>
      <div class="bx bx-menu" id="menu-icon"></div>
      <ul class="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="subjectpage.php">Course</a></li>
        <li><a href="tutorpage.php">Tutor</a></li>
        <li><a href="#">Subscription</a></li>
        <li><a href="#">Profile</a></li>
      </ul>
    </nav>

    
    
    <!-- End of the page -->
    <footer>
      <p>&copy; 2022 MyTutor Inc. All rights reserved.</p>
      <div class="social-icon">
        <a href="#" class="fa fa-facebook"></a>  
        <a href="#" class="fa fa-twitter"></a>  
        <a href="#" class="fa fa-linkedin"></a>  
        <a href="#" class="fa fa-instagram"></a>  
        <a href="#" class="fa fa-youtube"></a>  
      </div>
    </footer>
    <script src="../js/navigation.js"></script>
  </body>
</html>
