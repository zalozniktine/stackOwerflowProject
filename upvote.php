<?php
require 'povezava.php';
include 'session.php';

$user = $user_id;
$id = $_POST['answer_id'];
$l = 1;
$value=3;

$stmt = $pdo->query('SELECT * FROM lajki');
while ($row = $stmt->fetch())
{
    if ($row['Value'] == $l || $row['uporabnik_id'] == $user ||  $row['odgovor_id'] == $id){
        $value = 0;
    }
}
echo $row;
if ($value != 0) {
    $query = 'INSERT INTO lajki (Value,uporabnik_id,odgovor_id) VALUES (?,?,?)';
    $pdo->prepare($query)->execute([$l, $user, $id]);
}else{
    echo "taki vnos je ze";
}

?>