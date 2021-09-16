<?php
require 'povezava.php';

$username = $_POST['username'];
$email = $_POST['email'];
$pass1 = $_POST['password'];
$pass2 = $_POST['password2'];
$use = '1';

$stmt = $pdo->query('SELECT username FROM uporabniki');
while ($row = $stmt->fetch()) {
    $row['username'] . "\n";
    if ($username != $row['username']) {
        echo $use = '0';
    }else{
        $use = '1';
    }
}

    //preverim podatke, da so obvezi vnešeni
    if (!empty($username) && !empty($email) && !empty($pass1) && ($pass1 == $pass2) && ($use == '0')) {
        //$pass = sha1($pass1.$salt);
        $pass = password_hash($pass1, PASSWORD_DEFAULT);
    
        $query = 'INSERT INTO uporabniki (username,email,pass) VALUES (?,?,?)';
        $pdo->prepare($query)->execute([$username, $email, $pass]);

        echo "kul";
    //header("Location: Login.php");
    } else {
        echo "ni kul";
        //header("Location: registration.php");
    }
?>