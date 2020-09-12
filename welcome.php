<?php
include 'Config.php';
// Initialize the session
@session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>


<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <?php include 'Includes/Head.php'?>
    <link href="Styles/main.css" rel="stylesheet">
</head>
<body>

  <?php include 'Includes/Nav.php'?>

  <div class="container">


      <img src="img/banner.png" class="col-md-12 contentcard" alt="">
      <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
          <h1 class="font-weight-light">Fixed Full Page Background Image</h1>
          <p class="lead">In this snippet, the background image is fixed to the body element. Content on the page will scroll, but the image will remain in a fixed position!</p>
          <p class="lead">Scroll down...</p>
          <div style="height: 700px"></div>
          <p class="lead mb-0">You've reached the end!</p>
        </div>
      </div>
    </div>




    <?php include 'Includes/Body.php'?>
    </div>


    <?php include 'Includes/Footer.php'?>



</body>
</html>
