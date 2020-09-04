<?php
include 'Config.php';


session_start();
if ($_SESSION['LoggedIn'] == TRUE && !isset($_SESSION['error'])) {
    if ($_SESSION['IsAdmin'] == TRUE) {
        header('Location: StartAdmin.php');
    }
    else {
        header('Location: Start.php');
    }
}

?>
<!DOCTYPE HTML>
<html lang="PL">
    <head>
        <?php include APP_DIR_TMP . 'Head.html'; ?>
        <title>GRA MIEJSKA</title>
    </head>
    <body onload="checkDevice()">
    <center>
    <div class='content wrapper flex-grow-1 col-sm-10 col-md-8 col-lg-4'>
    <?php include APP_DIR_TMP . 'Body.php' ?>
        <form action='Configuration/Authentication.php' method='post'>
            <div class='card text-center'>
                <div class='card-header'><p class='h4'><b>Logowanie</b></p></div>
                    <div class='card-body'>
                    <?php
                        if(isset($_SESSION['error'])) {
                            $error = $_SESSION['error'];
                            echo '<div class="alert alert-danger" role="alert">';
                            echo $error;
                            echo '</div>';
                        }
                    ?>
                        <div class="element">
                            <div class="input-group-prepend input-group-prepend-custom">
                                <span class="input-group-text" id="">Login</span>
                            </div>
                            <div class="input-group input-check">
                                <input type="text" class="form-control" name="Login" id="Login" required>
                            </div>
                        </div>

                        <div class="element">
                            <div class="input-group-prepend input-group-prepend-custom">
                                <span class="input-group-text" id="">Hasło</span>
                            </div>
                            <div class="input-group input-check">
                                <input type="password" class="form-control" name="Password" id="Password" required>
                            </div>
                        </div>
                    </div>
            </div>
            <div class='card-footer text-muted'><button class='btn btn-success btn-lg btn-block' type='submit' value="Login">Zaloguj się!</button></div>
        </form>
    </div>
        <footer id="target">
            <?php include 'Templates/Footer.html'; ?>
        </footer>
    </center>
    </body>
</html>

<?php
    unset($_SESSION['error']);
    if (isset($_SESSION['destroy']) && $_SESSION['destroy'] === 1) {
        session_destroy();
    }
?>
