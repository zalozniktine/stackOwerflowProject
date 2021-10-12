<?php
include ('povezava.php');
include ('session.php');
include('config.php');

$facebook_output = '';

$facebook_helper = $facebook->getRedirectLoginHelper();

if(isset($_GET['code']))
{
 if(isset($_SESSION['access_token']))
 {
  $access_token = $_SESSION['access_token'];
 }
 else
 {
  $access_token = $facebook_helper->getAccessToken();

  $_SESSION['access_token'] = $access_token;

  $facebook->setDefaultAccessToken($_SESSION['access_token']);
 }

 $_SESSION['user_id'] = '';
 $_SESSION['user_name'] = '';
 $_SESSION['user_email_address'] = '';
 $_SESSION['user_image'] = '';

 $graph_response = $facebook->get("/me?fields=id,name,email", $access_token);

 $facebook_user_info = $graph_response->getGraphUser();


$id=$facebook_user_info->getId();
$ime=$facebook_user_info->getName();
$email=$facebook_user_info->getEmail();
$picture='https://graph.facebook.com/'.$id.'/picture';

        //check if user exists
        $query = "SELECT * FROM uporabniki WHERE facebook_id=?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        
        if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['username'];
        $_SESSION['image'] = $user['image'];
        header('location:/index.php');
        }

        else{

            // if user not exists we will insert the user
            $query = 'INSERT INTO uporabniki (facebook_id,username,email) VALUES (?,?,?)';
            $pdo->prepare($query)->execute([$id, $ime, $email]);
            echo $id;
            $googleId = "SELECT * FROM uporabniki WHERE facebook_id=?";
            $google = $pdo->prepare($googleId);
            $google->execute([$id]);
            $user = $google->fetch();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['username'];
            $_SESSION['image'] = $user['image'];
            //echo /*$_SESSION['user_id'] = */$user;
            echo 'vneslo novega userja';
            header('location:/index.php');

            }
    
}
else
{
 // Get login url
    $facebook_permissions = ['email']; // Optional permissions

    $facebook_login_url = $facebook_helper->getLoginUrl('https://oblaak.si/facebook_login.php', $facebook_permissions);

    // Render Facebook login button
    header('Location:'.$facebook_login_url);
}
?>