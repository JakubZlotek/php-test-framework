<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="PL">
<head>
    <meta charset="UTF-8">
    <?php require 'http://testy.jajuwa.pl/Includes/Head.php'; ?>
    <title>Kreator zadań</title>
</head>
<body>
    <center>
    <?php require 'http://testy.jajuwa.pl/Includes/Nav.php'; ?>
        <div class="content wrapper flex-grow-1 col-sm-10 col-md-8 col-lg-4">
        <form method="post" enctype="multipart/form-data">
        <?php require 'http://testy.jajuwa.pl/Includes/Body.php'; ?>
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
                            </div>


                            <div class="element">
                                <div class="input-group-prepend input-group-prepend-custom">
                                    <span class="input-group-text" id="">Odpowiedź 1</span>
                                </div>
                                    <div class="input-group input-check">
                                    <input type="text" class="form-control" name="answer1" placeholder="Odpowiedź 1" required>
                                </div>
                            </div>
                            <div class="element">
                                <div class="input-group-prepend input-group-prepend-custom">
                                    <span class="input-group-text" id="">Odpowiedź 2</span>
                                </div>
                                    <div class="input-group input-check">
                                    <input type="text" class="form-control" name="answer2" placeholder="Odpowiedź 2" required>
                                </div>
                            </div>
                            <div class="element">
                                <div class="input-group-prepend input-group-prepend-custom">
                                    <span class="input-group-text" id="">Odpowiedź 3</span>
                                </div>
                                    <div class="input-group input-check">
                                    <input type="text" class="form-control" name="answer3" placeholder="Odpowiedź 3" required>
                                </div>
                            </div>
                            <div class="element">
                                <div class="input-group-prepend input-group-prepend-custom">
                                    <span class="input-group-text" id="">Odpowiedź 4</span>
                                </div>
                                    <div class="input-group input-check">
                                    <input type="text" class="form-control" name="answer4" placeholder="Odpowiedź 4" required>
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
        <?php require 'http://testy.jajuwa.pl/Includes/Footer.php'?>
    </footer>
</body>
</html>
    <?php unset($_SESSION["error"]); ?>
