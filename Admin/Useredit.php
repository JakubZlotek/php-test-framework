<?php
// Initialize the session
session_start();

if (isset($_GET['userid'])) {
       $userid =  $_GET['userid'];
}

require_once "../config.php";

$sql = "SELECT id, username, created_at, avatar, imie, nazwisko, email FROM users WHERE id = '" . $userid . "'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
   $id = $row["id"];
   $username = $row["username"];
   $created_at = $row["created_at"];
   $avatar = $row["avatar"];
   $imie = $row["imie"];
   $nazwisko = $row["nazwisko"];
   $email = $row["email"];
};



if($_SERVER["REQUEST_METHOD"] == "POST"){

    $id = trim($_POST["id"]);
    if(!empty(trim($_POST["username"]))){
      $username = trim($_POST["username"]);
      $stmt = $conn->prepare("UPDATE users SET username = ? WHERE id = ?");
      $stmt->bind_param("sss", $username, $id);
      $stmt->execute();
    };

    if(!empty(trim($_POST["first_name"]))){
      $imie = trim($_POST["first_name"]);
      $stmt = $conn->prepare("UPDATE users SET imie = ? WHERE id = ?");
      $stmt->bind_param("sss", $imie, $id);
      $stmt->execute();
    };

    if(!empty(trim($_POST["last_name"]))){
      $nazwisko = trim($_POST["last_name"]);
      $stmt = $conn->prepare("UPDATE users SET nazwisko = ? WHERE id = ?");
      $stmt->bind_param("sss", $nazwisko, $id);
      $stmt->execute();
    };

    if(!empty(trim($_POST["email"]))){
      $email = trim($_POST["email"]);
      $stmt = $conn->prepare("UPDATE users SET email = ? WHERE id = ?");
      $stmt->bind_param("sss", $email, $id);
      $stmt->execute();
    };




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
                 <div class="tab-pane" id="messages">

                   <h2></h2>

                   <hr>
                      <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="registrationForm">
                          <div class="form-group">

                              <div class="col-xs-6">
                                  <label for="first_name"><h4>Imie: </h4></label>
                                  <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                              </div>
                          </div>
                          <div class="form-group">

                              <div class="col-xs-6">
                                <label for="last_name"><h4>Nazwisko: </h4></label>
                                  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                              </div>
                          </div>

                          <div class="form-group">

                              <div class="col-xs-6">
                                  <label for="phone"><h4>Phone</h4></label>
                                  <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-xs-6">
                                 <label for="mobile"><h4>Mobile</h4></label>
                                  <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                              </div>
                          </div>
                          <div class="form-group">

                              <div class="col-xs-6">
                                  <label for="email"><h4>Email</h4></label>
                                  <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                              </div>
                          </div>
                          <div class="form-group">

                              <div class="col-xs-6">
                                  <label for="email"><h4>Location</h4></label>
                                  <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                              </div>
                          </div>
                          <div class="form-group">

                              <div class="col-xs-6">
                                  <label for="password"><h4>Password</h4></label>
                                  <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                              </div>
                          </div>
                          <div class="form-group">

                              <div class="col-xs-6">
                                <label for="password2"><h4>Verify</h4></label>
                                  <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
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

                 </div><!--/tab-pane-->
                 <div class="tab-pane" id="settings">


                      <hr>
                      <form class="form" action="##" method="post" id="registrationForm">
                          <div class="form-group">

                              <div class="col-xs-6">
                                  <label for="first_name"><h4>First name</h4></label>
                                  <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                              </div>
                          </div>
                          <div class="form-group">

                              <div class="col-xs-6">
                                <label for="last_name"><h4>Last name</h4></label>
                                  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                              </div>
                          </div>

                          <div class="form-group">

                              <div class="col-xs-6">
                                  <label for="phone"><h4>Phone</h4></label>
                                  <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-xs-6">
                                 <label for="mobile"><h4>Mobile</h4></label>
                                  <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                              </div>
                          </div>
                          <div class="form-group">

                              <div class="col-xs-6">
                                  <label for="email"><h4>Email</h4></label>
                                  <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                              </div>
                          </div>
                          <div class="form-group">

                              <div class="col-xs-6">
                                  <label for="email"><h4>Location</h4></label>
                                  <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                              </div>
                          </div>
                          <div class="form-group">

                              <div class="col-xs-6">
                                  <label for="password"><h4>Password</h4></label>
                                  <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                              </div>
                          </div>
                          <div class="form-group">

                              <div class="col-xs-6">
                                <label for="password2"><h4>Verify</h4></label>
                                  <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                              </div>
                          </div>
                          <div class="form-group">
                               <div class="col-xs-12">
                                    <br>
                                  	<button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                   	<!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                                </div>
                          </div>
                  	</form>
                  </div>

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
