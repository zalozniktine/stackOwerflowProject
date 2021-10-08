<script>
window.fbAsyncInit = function() {
    FB.init({
        appId: '400121251829649',
        cookie: true,
        xfbml: true,
        version: 'v12.0'
    });

    FB.AppEvents.logPageView();

};

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement(s);
    js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<?php 
echo '<script>FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});</script>';
?>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0&appId=400121251829649&autoLogAppEvents=1"
    nonce="VcZVwBtQ"></script>

<!--<div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default"
    data-auto-logout-link="false" data-use-continue-as="false"></div>-->



<script>
function checkLoginState() {
    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });
}
</script>

<?php 




?>