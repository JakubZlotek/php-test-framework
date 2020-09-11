<?php

include 'http://testy.jajuwa.pl/Config.php';

$exam_id = $_POST['test'];
$question = $_POST['question'];
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$answer4 = $_POST['answer4'];
$correct_answer = $_POST['correct_answer'];

$stmt = $conn->prepare('INSERT INTO tests (exam_id, question, answer1, answer2, answer3, answer4, correct_answer) VALUES (?, ?, ?, ?, ?, ?, ?) ');
$stmt->bind_param('issssss', $exam_id, $question, $answer1, $answer2, $answer3, $answer4, $correct_answer);
$stmt->execute();
$stmt->close();

$error = "Pomyślnie dodano nowe pytanie";
$_SESSION['error'] = $error;

header("Location: http://testy.jajuwa.pl/Admin/QuestionCreator.php");

?>