<?php
require 'povezava.php';
include 'session.php';

if(!isset($user_id)){
    header("location:login2.php");
    exit;
}

$type = $_POST['type'];
$id = $_POST['id'];

if($type == 'question'){
    
    $stmt = $pdo->prepare('SELECT * FROM odgovori WHERE vprasanje_id = ?');
    $stmt->execute([$id]);
    while ($row = $stmt->fetch())
    {
        $pdo->prepare('DELETE FROM komentarji WHERE odgovor_id = ?')->execute([$row['id']]);
    }   
    $pdo->prepare('DELETE FROM odgovori WHERE vprasanje_id=?')->execute([$id]);

    $query = "DELETE FROM vprasanja WHERE id=?";
    $pdo->prepare($query)->execute([$id]);
}
if($type == 'answer'){
    $query = "DELETE FROM odgovori WHERE id=?";
    $pdo->prepare($query)->execute([$id]);
}
if($type == 'comment'){
    $query = "DELETE FROM komentarji WHERE id=?";
    $pdo->prepare($query)->execute([$id]);
}
header('location: activity.php');
?>