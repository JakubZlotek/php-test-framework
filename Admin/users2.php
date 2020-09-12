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

  <?php include '../Includes/Nav.php'?>

  <div class="container">


      <div class="card border-0 shadow my-5 contentcard">
        <div class="card-body p-5 text-center">


                <?php

                require_once "../config.php";

                $sql = "SELECT id, name, surname, created_at, avatar, admin FROM users ORDER BY `id` ASC";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {

                  if ($row["admin"] == 1) {
                    $text = '<t style="color:#b61d36" style="margin-bottom: 0">Administrator</t>';
                  } else {
                    $text = '<t style="color:#228c16" style="margin-bottom: 0">Użytkownik</t>';
                  };

                  echo '<div class="col-md-4"><div class="card themestyle mb-4 shadow-sm">
                    <div class="card-header">'. $text .'
                      <h4 class="my-0 font-weight-normal">' . $row["name"]. " ". $row["surname"]. '</h4>
                    </div>
                    <div class="card-body">
                    <img src="' . $row["avatar"]. '" style = "width: 160px;height: 160px; border-radius: 100%">
                      <h2 class="card-title pricing-card-title">Konto Utworzone: </br><small class="text-muted">' . $row["created_at"]. '</small></h2>
                      <a class="btn btn-lg btn-block btn-outline-primary" role="button" href="http://testy.jajuwa.pl/admin/useredit.php?userid='. $row["id"]. '">EDYTUJ</a>
                    </div>
                  </div></div>';


                }
                } else { echo "0 results"; }
                $conn->close();
                ?>

        </div>
      </div>
    </div>




    <?php include '../Includes/Body.php'?>
    </div>


    <?php include '../Includes/Footer.php'?>



</body>
</html>
