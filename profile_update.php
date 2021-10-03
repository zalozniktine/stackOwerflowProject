<?php
include 'session.php';
include 'povezava.php';

$username = $_POST['username'];
$email = $_POST['email'];
$pass1 = $_POST['pass'];
//$file = $_POST['fileToUpload'];

if(!empty($pass1)){
    $pass = password_hash($pass1, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare('UPDATE uporabniki SET email = ?, username = ?, pass = ? WHERE id = ?');
    $stmt->execute([$email, $username, $pass, $user_id]);
    header("location:profile.php");
}else{
    $stmt = $pdo->prepare('UPDATE uporabniki SET email = ?, username = ? WHERE id = ?');
    $stmt->execute([$email, $username, $user_id]);
    header("location:profile.php");
}

if (isset($_POST['ssubmit'])) {
    //update slike
    $target_dir = "profile_pictures/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        $uploadOk = 0;
    }
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif") {
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            //vse je ok, zapišemo v bazo
            $query = "UPDATE uporabniki SET image=? WHERE id=?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$target_file,$user_id]);

            //header("Location: edit-profile.php");
            die();
        }
    }
    header("location:profile.php");
}
?>