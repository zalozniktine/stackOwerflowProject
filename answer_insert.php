<?php
require 'povezava.php';
include 'session.php';



if(!isset($user_id)){
    header("location:login2.php");
    exit;
}

$answer = $_POST['answer'];
$question_id = $_POST['question_id'];
$dt = date('Y-m-d h:i:s');



$query = 'INSERT INTO odgovori (uporabnik_id,vprasanje_id,odgovor,datum_objave) VALUES (?,?,?,?)';
$pdo->prepare($query)->execute([$user_id, $question_id, $answer, $dt]);

header("location:question.php?id=$question_id")




?>