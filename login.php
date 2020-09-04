<?php
include 'Config.php';
?>
<!DOCTYPE HTML>
<html lang="PL">

<head>
  <?php include 'Includes/Head.php'?>
  <title>Login</title>
</head>

<body>
  <center>
    <div class="container-fluid page">


    <div class='content wrapper flex-grow-1 col-sm-10 col-md-8 col-lg-4'>
      <form action='dupanarazie.php' method='post'>
        <div class='card text-center'>
          <div class='card-header'>
            <p class='h4'><b>Logowanie</b></p>
          </div>
          <div class='card-body'>

            <div class="input-group-prepend input-group-prepend-custom">
              <span class="input-group-text" id="">Login</span>
            </div>
            <div class="input-group input-check">
              <input type="text" class="form-control" name="Login" id="Login" required>
            </div>



            <div class="input-group-prepend input-group-prepend-custom">
              <span class="input-group-text" id="">Hasło</span>
            </div>
            <div class="input-group input-check">
              <input type="password" class="form-control" name="Password" id="Password" required>
            </div>

          </div>
        </div>
        <div class='card-footer text-muted'><button class='btn btn-success btn-lg btn-block' type='submit' value="Login">Zaloguj się!</button></div>
      </form>
    </div>

  </center>
  </div>
</body>

</html>
