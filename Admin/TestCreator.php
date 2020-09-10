<?php
session_start();
include '../Config.php';

?>
<!DOCTYPE html>
<html lang="PL">
<head>
    <meta charset="UTF-8">
    <?php include 'http://testy.jajuwa.pl/Includes/Head.php'?>
    <title>Kreator zadań</title>
</head>
<body>
    <center>
    <?php include 'http://testy.jajuwa.pl/Includes/Nav.php'?>
        <div class="content wrapper flex-grow-1 col-sm-10 col-md-8 col-lg-4">
        <form method="post" enctype="multipart/form-data">
        <?php include 'http://testy.jajuwa.pl/Includes/Body.php' ?>
                <div class="card text-center">
                    <div class="card-header"><p class="h4">KREATOR PYTAŃ</p></div>
                        <div class="card-body">
                            <?php
                                if(isset($_SESSION["error"]))
                                {
                                    $error = $_SESSION["error"];
                                    echo '<div class="alert alert-success" role="alert">';
                                    echo $error; #Pomyślnie dodano nowe Zadanie
                                    echo '</div>';
                                }
                            ?>
                            <div class="element">
                                <div class="input-group-prepend input-group-prepend-custom">
                                    <span class="input-group-text" id="">Pytanie</span>
                                </div>
                                    <div class="input-group input-check">
                                    <textarea class="Size" name="Content" id="editor"></textarea>
                                </div>
                            </div>

                            <div class="input-group form-check">
                                <input type="checkbox" class="form-check-input" id="Checkbox1" name="Checkbox1" onclick="Check1()">
                                <label class="form-check-label form-check-label-custom" for="Checkbox1">Zdjęcie do zadania</label>
                            </div>

                            <div class="element show" id="show1">
                                <div class="custom-file">
                                    <input type="file" class="filestyle custom-file-input" name="fileToUpload" id="fileToUpload">
                                    <label class="custom-file-label" for="fileToUpload" aria-describedby="inputGroupFileAddon02">Wybierz Plik</label>
                                </div>
                                <select class="form-control control" id="select1" name="fileToUpload1" >
                                    <option value="" disable default hidden>Wybierz kolejność:</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>

                            <div class="element">
                                <div class="input-group-prepend input-group-prepend-custom">
                                    <span class="input-group-text" id="">Kod Zadania</span>
                                </div>
                                    <div class="input-group input-check">
                                    <input type="text" class="form-control" name="AnswerToTheTask" placeholder="LEGO" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted"><button class="btn btn-primary btn-lg btn-block" type="submit" name="Submit" value="submit1">Utwórz Zadanie!</button></div>
                </div>
                </form>
        </div>
    </center>
    <footer>
        <?php include 'http://testy.jajuwa.pl/Includes/Footer.php'?>
    </footer>
</body>
</html>
    <?php unset($_SESSION["error"]); ?>
