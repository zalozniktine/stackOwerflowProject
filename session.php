<?php
session_start();


if (isset($_SESSION['user_id'])) {
    include 'povezava.php';
    $user_id = $_SESSION['user_id'];

    $nek = "SELECT * FROM uporabniki WHERE id=?";
    $smh = $pdo->prepare($nek);
    $smh->execute([$user_id]);
    $userr = $smh->fetch();
    $user_name = $userr['username'];
}
?>