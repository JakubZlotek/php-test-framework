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
    <link href="Styles/carousel.css" rel="stylesheet">
</head>
<body>

  <script>
    document.body.className += ' fade-out';
  </script>

  <?php include 'Includes/Nav.php'?>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-2">Fluid jumbotron.</h1>
      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      <button class="btn btn-outline-danger">This is a Button</button>
    </div>
  </div>
  <div class="page-scroll">

    


  <div class="container">



    <?php include 'Includes/Body.php'?>
    <?php include 'Includes/Footer.php'?>
  </div>


  <script>
    $(function() {
      $('body').removeClass('fade-out');
    });
  </script>

</body>
</html>
