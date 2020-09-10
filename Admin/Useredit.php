<?php
// Initialize the session
session_start();

if (isset($_GET['userid'])) {
       $userid =  $_GET['userid'];
}

require_once "../config.php";

$sql = "SELECT id, username, created_at, avatar, name, surname, email FROM users WHERE id = '" . $userid . "'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
   $id = $row["id"];
   $username = $row["username"];
   $created_at = $row["created_at"];
   $avatar = $row["avatar"];
   $imie = $row["name"];
   $nazwisko = $row["surname"];
   $email = $row["email"];
};
mysqli_close($conn);


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


    <div class="container bootstrap snippet">
        <div class="row">
      		<div class="col-sm-3"><!--left col-->


          <div class="text-center">
            <img src="<?php echo $avatar?>" style="width: 160px;height: 160px; border-radius: 100%" alt="avatar">
          </div></hr><br>




            <ul class="list-group">
              <li class="list-group-item text-muted">User ID: <?php echo $id?></li>
            </ul>
              <ul class="list-group">
                <li class="list-group-item text-muted">Data Dołączenia:</br> <?php echo $created_at?></li>
              </ul>



            </div><!--/col-3-->
        	<div class="col-sm-9">



              <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>
                      <form class="form" action="editaction.php" method="post" id="registrationForm">
                          <div class="form-group">

                              <div class="col-xs-6">
                                  <label for="first_name"><h4>Imie: </h4></label>
                                  <input type="text" class="form-control" name="first_name" id="first_name" placeholder="<?php echo $imie?>">
                              </div>
                          </div>
                          <div class="form-group">

                              <div class="col-xs-6">
                                <label for="last_name"><h4>Nazwisko: </h4></label>
                                  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="<?php echo $nazwisko?>">
                              </div>
                          </div>


                          <div class="form-group">
                              <div class="col-xs-6">
                                 <label for="username"><h4>Nazwa Użytkownika</h4></label>
                                 <input type="hidden" id="id" name="id" value="<?php echo $username?>">
                                  <input type="text" class="form-control" name="username" id="mobile" placeholder="<?php echo $username?>" title="<?php echo $username?>">
                              </div>
                          </div>
                          <div class="form-group">

                              <div class="col-xs-6">
                                  <label for="email"><h4>Email</h4></label>
                                  <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo $email?>">
                              </div>
                          </div>

                          <div class="form-group">
                               <div class="col-xs-12">
                                    <br>
                                  	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                   	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                </div>
                          </div>
                  	</form>

                  <hr>

                 </div><!--/tab-pane-->

              </div><!--/tab-content-->

            </div><!--/col-9-->
        </div><!--/row-->




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
