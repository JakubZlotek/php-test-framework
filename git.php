<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
shell_exec('cd C:\xampp\htdocs\php-test-framework && git pull https://f79c32b345bc433f52bc2aa628579a20ce149c74@github.com/jakubzlotek/php-test-framework.git');
}

?>


<html lang="pl">

<head>
  <meta charset="UTF-8">
  <title>Git Repo</title>
  <?php include 'Includes/Head.php'?>
</head>

<body>

<form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="registrationForm">

  <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Aktualizacja Repo</button>

</form>




    <?php include 'Includes/Body.php'?>
  </div>


</body>

</html>
