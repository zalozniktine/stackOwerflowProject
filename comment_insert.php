<?php
require 'povezava.php';
include 'session.php';

echo $comment = $_POST['comment'];
echo $queston_id = $_POST['question_id'];

$query = 'INSERT INTO odgovori (uporabnik_id,odgovor_id,komentar) VALUES (?,?,?)';
$pdo->prepare($query)->execute([$user_id, $question_id, $pass]);




?>