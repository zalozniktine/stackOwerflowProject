<?php
require 'povezava.php';
include 'session.php';

$user = $user_id;
$id = $_POST['answer_id'];
$l = 1;
$value=3;

$uporabnik = '';
$odgovor = '';

$stmt = $pdo->query('SELECT * FROM lajki');
while ($row = $stmt->fetch())
{
    if ($row['Value'] == $l and $row['uporabnik_id'] == $user and  $row['odgovor_id'] == $id){
        $value = 0;
    }
    if ($row['Value'] == -1 and $row['uporabnik_id'] == $user and  $row['odgovor_id'] == $id){
        $value = 1;
        $uporabnik = $row['uporabnik_id'];
        $odgovor = $row['odgovor_id'];
    }
}

if ($value == 1){
    $stmt2 = $pdo->prepare('UPDATE lajki SET Value = ? WHERE uporabnik_id=? AND odgovor_id=?');
    $stmt2->execute([1, $uporabnik, $odgovor]);
}else if ($value != 0) {
    $query = 'INSERT INTO lajki (Value,uporabnik_id,odgovor_id) VALUES (?,?,?)';
    $pdo->prepare($query)->execute([$l, $user, $id]);
}else{
    echo "taki vnos je ze";
}

header('Location: question.php?id=$id');

?>