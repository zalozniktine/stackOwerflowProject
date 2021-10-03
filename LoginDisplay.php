<?php
include_once 'povezava.php';
$user = $_SESSION['user_id'];

$stmt = $pdo->query('SELECT username FROM uporabniki');
while ($row = $stmt->fetch())
{
    $username = $row['username'];
}

echo $username

?>