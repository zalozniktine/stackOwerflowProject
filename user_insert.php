<?php
require 'povezava.php';

echo $username = $_POST['username'];
echo $email = $_POST['email'];
echo $pass1 = $_POST['password'];
//preverim podatke, da so obvezi vnešeni
if (!empty($username) && !empty($email) && !empty($pass1))
{  
    //$pass = sha1($pass1.$salt);
    $pass = password_hash($pass1, PASSWORD_DEFAULT);
    
    $query = 'INSERT INTO uporabniki (username,email,pass) VALUES (?,?,?)';
    $pdo->prepare($query)->execute([$username, $email, $pass]);

    echo "kul";
    //header("Location: Login.php");
}
else {
    echo "ni kul";
    //header("Location: registration.php");
}
?>