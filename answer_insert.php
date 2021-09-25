<?php
require 'povezava.php';
include 'session.php';

echo $answer = $_POST['answer'];
echo $question_id = $_POST['question_id'];

$query = 'INSERT INTO odgovori (uporabnik_id,vprasanje_id,odgovor) VALUES (?,?,?)';
$pdo->prepare($query)->execute([$user_id, $question_id, $answer]);




?>