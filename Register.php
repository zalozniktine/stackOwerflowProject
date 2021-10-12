<?php
include 'session.php';
if(isset($user_id)){
    header("location:index.php");
    exit;
}

?>
<?php include "google_login/login.php" ; ?>

<!DOCTYPE html>
<html style="font-size: 16px">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="page_type" content="np-template-header-footer-from-plugin" />
    <title>Register</title>
    <link rel="stylesheet" href="nicepage.css" media="screen" />
    <link rel="stylesheet" href="Register.css" media="screen" />
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.25.1, nicepage.com" />
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" />

    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "StackOwerflow",
        "logo": "images/1200px-Stack_Overflow_logo.svg.png"
    }
    </script>
    <meta name="theme-color" content="#478ac9" />
    <meta property="og:title" content="Register" />
    <meta property="og:type" content="website" />
</head>

<body class="u-body">
    <header class="
        u-align-center-xs
        u-border-1
        u-border-grey-25
        u-clearfix
        u-header
        u-header
      " id="sec-563b">
        <div class="
          u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xs u-sheet-1
        ">
            <nav class="
            u-hidden-lg
            u-hidden-md
            u-hidden-sm
            u-hidden-xl
            u-menu
            u-menu-dropdown
            u-offcanvas
            u-menu-1
          ">
                <div class="menu-collapse">
                    <a class="u-button-style u-nav-link" href="#">
                        <svg>
                            <use xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px">
                                    <rect y="1" width="16" height="2"></rect>
                                    <rect y="7" width="16" height="2"></rect>
                                    <rect y="13" width="16" height="2"></rect>
                                </symbol>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-unstyled">
                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Home</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Questions</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="login2.php">Login</a>
                        </li>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="
                u-black
                u-container-style
                u-inner-container-layout
                u-opacity
                u-opacity-95
                u-sidenav
              ">
                        <div class="u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="
                    u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2
                  ">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Home</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="index.php">Questions</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="login2.php">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
            <a href="index.php" class="u-hidden-xs u-image u-logo u-image-1" data-image-width="1200"
                data-image-height="236">
                <img src="images/1200px-Stack_Overflow_logo.svg.png" class="u-logo-image u-logo-image-1" />
            </a>
            <form action="#" method="get" class="u-border-1 u-border-grey-15 u-search u-search-right u-search-1">
                <button class="u-search-button" type="submit">
                    <span class="u-search-icon u-spacing-10 u-text-grey-40">
                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"
                            style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b04b"></use>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            id="svg-b04b" x="0px" y="0px" viewBox="0 0 56.966 56.966"
                            style="enable-background: new 0 0 56.966 56.966" xml:space="preserve" class="u-svg-content">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                            </path>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                        </svg>
                    </span>
                </button>
                <input class="u-search-input" type="search" name="search" value="" placeholder="Search" />
            </form>
            <nav class="
            u-align-left
            u-hidden-md
            u-hidden-sm
            u-hidden-xs
            u-menu
            u-menu-dropdown
            u-nav-spacing-25
            u-offcanvas
            u-menu-2
          ">
                <div class="menu-collapse">
                    <a class="u-button-style u-nav-link" href="#" style="padding: 4px 0px; font-size: calc(1em + 8px)">
                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302"
                            style="enable-background: new 0 0 302 302" xml:space="preserve" class="u-svg-content">
                            <g>
                                <rect y="36" width="302" height="30"></rect>
                                <rect y="236" width="302" height="30"></rect>
                                <rect y="136" width="302" height="30"></rect>
                            </g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                        </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-unstyled u-nav-3">
                        <li class="u-nav-item">
                            <?php include 'loginD.php' ?>
                        </li>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="
                u-align-center
                u-black
                u-container-style
                u-inner-container-layout
                u-opacity
                u-opacity-95
                u-sidenav
              ">
                        <div class="u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="
                    u-align-center u-nav u-popupmenu-items u-unstyled u-nav-4
                  ">
                                <li class="u-nav-item">
                                    <a class="u-button-style u-nav-link" style="padding: 10px 20px">Userr</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>
    <section class="u-clearfix u-section-1" id="sec-b4ac">
        <div class="u-clearfix u-sheet u-sheet-1">
            <img class="u-image u-image-default u-preserve-proportions u-image-1"
                src="images/1200px-Stack_Overflow_logo.svg-Copy.png" alt="" data-image-width="201"
                data-image-height="236" />
            <a href="<?php echo $client->createAuthUrl(); ?>" class="
                        login-btn
                        u-active-palette-5-light-1
                        u-border-1
u-border-grey-90
u-btn
u-btn-round
u-button-style
u-grey-5
u-hover-palette-5-light-2
u-radius-6
u-btn-1
"><span class="u-icon u-icon-1"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px"
                        style="width: 1em; height: 1em">
                        <path style="fill: #fbbb00"
                            d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256  c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456  C103.821,274.792,107.225,292.797,113.47,309.408z">
                        </path>
                        <path style="fill: #518ef8"
                            d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451  c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535  c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z">
                        </path>
                        <path style="fill: #28b446"
                            d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512  c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771  c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z">
                        </path>
                        <path style="fill: #f14336"
                            d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012  c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0  C318.115,0,375.068,22.126,419.404,58.936z">
                        </path>
                    </svg><img /></span>&nbsp;Continue with with Google
            </a>

            <div><a style="border: 1px solid black; padding:7px 61px 7px 61px; border-radius:4px; margin-top:10px; margin-bottom:10px; font-family:Open Sans, sans-serif;
            font-size:15px; color:white; font-weight:700; background-color:#4267B2" class=" center"
                    href="facebook_login.php">
                    <img src="assets/icons/facebook-icon.png" alt="">
                    <span>Continue with Facebook</span>
                </a></div>
                
            <div class="center">
                <table class="formRegister">
                    <form action="user_insert.php" method="post">
                        <tr>
                            <td><label>Username</label></td>
                        </tr>
                        <tr>
                            <td><input name='username' type="text" /></td>
                        </tr>
                        <tr>
                            <td><label>Email</label></td>
                        </tr>
                        <tr>
                            <td><input name="email" type="email" /></td>
                        </tr>
                        <tr>
                            <td><label>Password</label></td>
                        </tr>
                        <tr>
                            <td><input name="password" type="password" /></td>
                        </tr>
                        <tr>
                            <td><label>Repeat password</label></td>
                        </tr>
                        <tr>
                            <td><input name="password2" type="password" /></td>
                        </tr>
                        <tr>
                            <td>
                                <input value="Sign up" type="submit">
                            </td>
                        </tr>
                    </form>
                </table>
            </div>

        </div>
    </section>
</body>

</html>