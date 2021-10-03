<?php
require 'google-api/vendor/autoload.php';

// Creating new google client instance
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
    $client->setAccessToken($token['access_token']);

    // getting profile information
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();

    // showing profile info
    echo "<pre>";
    var_dump($google_account_info);

else: 
    // Google Login Url = $client->createAuthUrl(); 


/*
<a class="login-btn" href="<?php echo $client->createAuthUrl(); ?>">Login</a>*/
?>
<?php endif; ?>