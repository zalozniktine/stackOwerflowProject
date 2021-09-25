<?php
include_once 'povezava.php';
include 'session.php';

$naslov = $_POST['naslov'];
$opis = $_POST['opis'];
$dt = date('Y-m-d h:i:s');

$user_id = $_SESSION['user_id'];
if (!empty($naslov) && !empty($opis) && isset($_SESSION['user_id'])) {
    $query = 'INSERT INTO vprasanja (uporabnik_id,Naslov,opis,datum_objave) VALUES (?,?,?,?)';
    $pdo->prepare($query)->execute([$user_id, $naslov, $opis, $dt]);
    echo "uspesno vneseno vprasanje";
}
header("Location: index.php");
?>