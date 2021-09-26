<?php
require 'povezava.php';
include 'session.php';

echo $comment = $_POST['comment'];
echo $answer_id = $_POST['answer_id'];

$query = 'INSERT INTO komentarji (uporabnik_id,odgovor_id,komentar) VALUES (?,?,?)';
$pdo->prepare($query)->execute([$user_id, $answer_id, $comment]);




?>