<?php
require 'povezava.php';
include 'session.php';

if(!isset($user_id)){
    header("location:login2.php");
    exit;
}

$comment = $_POST['comment'];
$answer_id = $_POST['answer_id'];
$question_id = $_POST['question_id'];

$query = 'INSERT INTO komentarji (uporabnik_id,odgovor_id,komentar) VALUES (?,?,?)';
$pdo->prepare($query)->execute([$user_id, $answer_id, $comment]);

header("location:question.php?id=$question_id")


?>