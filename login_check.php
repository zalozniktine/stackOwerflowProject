<?php
session_start();
include_once 'povezava.php';
$email = $_POST['email'];
$pass = $_POST['pass'];
//preverim, če sem prejel podatke
if (!empty($email) && !empty($pass)) {
    //$pass = sha1($pass.$salt);
    
    $query = "SELECT * FROM uporabniki WHERE email=?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email]);
    
    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch();
        if (password_verify($pass, $user['pass'])) {
            $_SESSION['user_id'] = $user['id'];  
            $_SESSION['user_name'] = $user['username'];
            $_SESSION['image'] = $user['image'];
            //$_SESSION['admin'] = $user['admin'];        
            header("Location: index.php");
            echo 'uspesna prijava';
            die;
        }
    }
}
header('Refresh: 2; URL=https://oblaak.si/login2.php');
echo 'neuspesna prijava';
?>