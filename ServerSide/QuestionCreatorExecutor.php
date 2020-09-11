<?php

include 'http://testy.jajuwa.pl/Config.php';

$question = $_POST['question'];
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$answer4 = $_POST['answer4'];
$correct_answer = $_POST['correct_answer'];

echo $question . "\n";
echo $answer1 . "\n";
echo $answer2 . "\n";
echo $answer3 . "\n";
echo $answer4 . "\n";
echo $correct_answer . "\n";

$stmt = $conn->prepare('INSERT INTO Users (Login, Password) VALUES (?, ?) ');
$stmt->bind_param('ss', $Uzytkownik, $Haslo);
$stmt->execute();
$stmt->close();

$error = 'Pomyślnie dodano nowe konto: '.$Uzytkownik.'';
$_SESSION['error'] = $error;

header("Location: http://testy.jajuwa.pl/Admin/QuestionCreator.php");

?>