<?php
// Initialize the session
session_start();
?>


<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <?php include '../Includes/Head.php'?>
    <link href="../Styles/main.css" rel="stylesheet">
</head>
<body>

  <script>
    document.body.className += ' fade-out';
  </script>

  <?php include '../Includes/Nav.php'?>
<br>







  <div class="container">

    <div class="card-deck mb-3 text-center">



        <?php

      require_once "../config.php";

      $sql = "SELECT id, username, created_at FROM users ORDER BY `id` ASC";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {


        echo '<div class="col-md-4"><div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">' . $row["username"]. '</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Konto Utworzone: </br><small class="text-muted">' . $row["created_at"]. '</small></h1>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">EDYTUJ</button>
          </div>
        </div></div>';


      }
      } else { echo "0 results"; }
      $conn->close();
      ?>




    </div>



    <?php include '../Includes/Body.php'?>
    <?php include '../Includes/Footer.php'?>
  </div>


  <script>
    $(function() {
      $('body').removeClass('fade-out');
    });
  </script>

</body>
</html>
