<?php
//include 'session.php';

$host = 'localhost';
$db   = 'stackowerflow';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
     $pdo = new PDO($dsn, $user, $pass, $options);




/*
$link = mysqli_connect($host, $user, $password, $database);
        or die("Ne morem do streznika");
*/

//samo streznik
/*$link= mysqli_connect($host,$user,$password)
        or die("Ne morem do streznika");*/

//do baze
/*mysqli_select_db($link,$database)
        or die("Ne morem do baze");

mysqli_set_charset($link, "utf-8");*/

?>