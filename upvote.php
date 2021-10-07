<?php
require 'povezava.php';
include 'session.php';

if(!isset($user_id)){
    header("location:login2.php");
    exit;
}

$user = $user_id;
$id = $_POST['answer_id'];
$qid = $_POST['question_id'];

$l = 1;
$value=3;

$uporabnik = '';
$odgovor = '';

$stmt = $pdo->query('SELECT * FROM lajki');
while ($row = $stmt->fetch())
{
    //to preveri ce je uporabnik na istem odgovoru downotu ze
    if ($row['Value'] == $l and $row['uporabnik_id'] == $user and  $row['odgovor_id'] == $id){
        echo $value = 0;
    }
    
    if ($row['Value'] == -1 and $row['uporabnik_id'] == $user and  $row['odgovor_id'] == $id){
        echo $value = 1;
        $uporabnik = $row['uporabnik_id'];
        $odgovor = $row['odgovor_id'];
    }
}

if ($value == 1){
    $stmt2 = $pdo->prepare('UPDATE lajki SET Value = ? WHERE uporabnik_id=? AND odgovor_id=?');
    $stmt2->execute([1, $uporabnik, $odgovor]);
    header("Location: question.php?id=$qid");
}else if ($value == 0) {
    echo "taki vnos je ze";
    
}else{
    $query = 'INSERT INTO lajki (Value,uporabnik_id,odgovor_id) VALUES (?,?,?)';
    $pdo->prepare($query)->execute([$l, $user, $id]);
    header("Location: question.php?id=$qid");
}


?>