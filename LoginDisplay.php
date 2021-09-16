<?php
session_start();
include_once 'povezava.php';
$user = $_SESSION['user_id'];

$stmt = $pdo->query('SELECT username FROM uporabniki');
while ($row = $stmt->fetch())
{
    $username = $row['username'];
}



if (isset($_SESSION['user_id'])) {
    echo '<div class="loginDisplay">
<tr>
    <td> <p class="n">Prijavljeni ste kot: '.$username.'</p></td>
    
</tr>
<tr><td><a class="odjava" href="odjava.php">Odjava</a></td></div>
';
}
?>