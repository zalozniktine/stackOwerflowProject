<?php
session_start();
include '../povezava.php';
require 'google-api/vendor/autoload.php';



$client = new Google_Client();

// Enter your Client ID
$client->setClientId('973846383263-v7o84bbv79sq07m34badb6kd808v4jgg.apps.googleusercontent.com');
// Enter your Client Secrect
$client->setClientSecret('zqNNC4dEp6ShSMMqyYExaofY');
// Enter the Redirect URL
$client->setRedirectUri('http://localhost:3000/google_login/login_google_check.php');

// Adding those scopes which we want to get (email & profile Information)
$client->addScope("email");
$client->addScope("profile");


if(isset($_GET['code'])):

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    if(!isset($token["error"])){

        $client->setAccessToken($token['access_token']);

        // getting profile information
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
    
        // Storing data into database
        $id = /*mysqli_real_escape_string*/($google_account_info->id);
        $full_name = (trim($google_account_info->name));
        $email = ($google_account_info->email);
        $profile_pic = ($google_account_info->picture);

        // checking user already exists or not
        /*
        $get_user = mysqli_query($pdo, "SELECT `google_id` FROM `users` WHERE `google_id`='$id'");
        if(mysqli_num_rows($get_user) > 0){

            $_SESSION['login_id'] = $id; 
            header('Location: home.php');
            exit;

        }
        else{*/

            // if user not exists we will insert the user
            //$insert = mysqli_query($pdo, "INSERT INTO `users`(`google_id`,`name`,`email`) VALUES('$id','$full_name','$email')");

            $query = 'INSERT INTO uporabniki (google_id,username,email) VALUES (?,?,?)';
            $pdo->prepare($query)->execute([$id, $full_name, $email]);

            $googleId = "SELECT * FROM uporabniki WHERE google_id=?";
            $google = $pdo->prepare($googleId);
            $google->execute([$id]);
            $user = $google->fetch();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['username'];
            //echo /*$_SESSION['user_id'] = */$user;
            header('location:../index.php');
            //header('Location: home.php');
            /*
            if($insert){
                $_SESSION['login_id'] = $id; 
                header('Location: home.php');
                exit;
            }
            else{
                echo "Sign up failed!(Something went wrong).";
            }*/

        //}

    }
    else{
        header('Location: login2.php');
        exit;
    }
    
else: 
    // Google Login Url = $client->createAuthUrl(); 
?>

<?php endif; ?>