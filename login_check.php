<?php
//session_start();
include_once 'povezava.php';
$user = $_SESSION['user_id'];

$stmt = $pdo->prepare("SELECT username FROM uporabniki WHERE id=?");
$stmt->execute([$user]);
echo $name = $stmt->fetchColumn();
?>