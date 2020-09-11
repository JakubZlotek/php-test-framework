<?php
include '../Config.php';
@session_start();

$search = "SELECT * FROM exams";
$score = $conn->query($search);
?>

<!DOCTYPE html>
<html lang="PL">
<head>
    <meta charset="UTF-8">
    <?php include '../Includes/Head.php'?>
    <title>Kreator zadań</title>
</head>
<body>
  <?php include '../Includes/Nav.php'?>
    <center>
        <div class="content wrapper flex-grow-1 col-sm-10 col-md-8 col-lg-4">
        <form action="http://testy.jajuwa.pl/ServerSide/QuestionCreatorExecutor.php" method="post" enctype="multipart/form-data">
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
                                    <span class="input-group-text">Test</span>
                                </div>
                                <div class="input-group input-check">
                                    <select class="form-control" id="users-veryfing" name="TaskNumber" required>
                                        <?php
                                        if ($score->num_rows > 0) {
                                            while($row = $score->fetch_assoc()) {
                                                echo "<option value='". $row['id'] ."' required>". $row['name'] ."</option>";
                                            }
                                        }
                                        else {
                                            echo "0 Tasks";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="element">
                                <div class="input-group-prepend input-group-prepend-custom">
                                    <span class="input-group-text" id="">Pytanie</span>
                                </div>
                                    <div class="input-group input-check">
                                    <!--<textarea class="Size" name="Content" id="editor"></textarea>-->
                                    <input type="text" class="form-control" name="question" placeholder="Kto wypowiedział słynną sentencję: „A po co wybierać? Najlepiej wziąć obie” "required>
                                </div>
                            </div>

                            <!-- <div class="input-group form-check">
                                <input type="checkbox" class="form-check-input" id="Checkbox1" name="Checkbox1" onclick="Check1()">
                                <label class="form-check-label form-check-label-custom" for="Checkbox1">Zdjęcie do zadania</label>
                            </div>
                            <div class="element show" id="show1">
                                <div class="custom-file">
                                    <input type="file" class="filestyle custom-file-input" name="fileToUpload" id="fileToUpload">
                                    <label class="custom-file-label" for="fileToUpload" aria-describedby="inputGroupFileAddon02">Wybierz Plik</label>
                                </div>
                            </div> -->


                            <div class="element">
                                <div class="input-group-prepend input-group-prepend-custom">
                                    <span class="input-group-text" id="">Odpowiedź 1</span>
                                </div>
                                    <div class="input-group input-check">
                                    <input type="text" class="form-control" name="answer1" id="a1" placeholder="Piotr Gustyn" required>
                                </div>
                            </div>
                            <div class="element">
                                <div class="input-group-prepend input-group-prepend-custom">
                                    <span class="input-group-text" id="">Odpowiedź 2</span>
                                </div>
                                    <div class="input-group input-check">
                                    <input type="text" class="form-control" name="answer2" id="a2" placeholder="Jan Paweł II" required>
                                </div>
                            </div>
                            <div class="element">
                                <div class="input-group-prepend input-group-prepend-custom">
                                    <span class="input-group-text" id="">Odpowiedź 3</span>
                                </div>
                                    <div class="input-group input-check">
                                    <input type="text" class="form-control" name="answer3" id="a3" placeholder="Krzysztof Landos" required>
                                </div>
                            </div>
                            <div class="element">
                                <div class="input-group-prepend input-group-prepend-custom">
                                    <span class="input-group-text" id="">Odpowiedź 4</span>
                                </div>
                                    <div class="input-group input-check">
                                    <input type="text" class="form-control" name="answer4" id="a4" placeholder="Anna Słotwińska - Jakóbowska" required>
                                </div>
                            </div>
                            <div class="element">
                                <div class="input-group-prepend input-group-prepend-custom">
                                    <span class="input-group-text" id="">Poprawna Odpowiedź</span>
                                </div>
                                    <div class="input-group input-check">
                                    <select class="custom-select" name="correct_answer" id="answer" required>
                                        <option value="correct1" id="o1">Odpowiedź 1</option>
                                        <option value="correct2" id="o2">Odpowiedź 2</option>
                                        <option value="correct3" id="o3">Odpowiedź 3</option>
                                        <option value="correct4" id="o4">Odpowiedź 4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted"><button class="btn btn-primary btn-lg btn-block" type="submit" name="Submit" value="submit" id="submit">Utwórz Zadanie!</button></div>
                </div>
                </form>
        </div>
    </center>
    <?php include '../Includes/Body.php'?>
    <?php include '../Includes/Footer.php'?>
</body>
<script>
    $(document).ready(function(){
        // Get value on button click and show alert
        $("#submit").click(function(){
            var str1 = $("#a1").val();
            var str2 = $("#a2").val();
            var str3 = $("#a3").val();
            var str4 = $("#a4").val();
        
            $("#o1").val(str1);
            $("#o2").val(str2);
            $("#o3").val(str3);
            $("#o4").val(str4);
        });
    });
</script>
</html>
    <?php unset($_SESSION["error"]); ?>
