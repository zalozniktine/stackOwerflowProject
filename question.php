<?php
include 'session.php';
include 'povezava.php';

$id = $_GET['id'];
?>
<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.25.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" href="question.css">
    <link rel="stylesheet" href="responsive.css">
    <script>

    </script>


    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "StackOwerflow",
        "url": "/",
        "logo": "images/1200px-Stack_Overflow_logo.svg.png"
    }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <link rel="canonical" href="/">
</head>

<body data-home-page="https://stackowerflow.nicepage.io/Home.html?version=2d41e077-21ae-4b91-b81d-c58cb51ca37a"
    data-home-page-title="Home" class="u-body">
    <header class="resp u-align-center-xs u-border-1 u-border-grey-25 u-clearfix u-header u-header" id="sec-563b">
        <?php
?>
        <div class="padd u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xs u-sheet-1">
            <nav class="u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="padd menu-collapse">
                    <a class="u-button-style u-nav-link" href="#">
                        <svg>
                            <use xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
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
                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="profile.php">My account</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Questions</a>
                        </li>
                        <?php
                        if (!isset($_SESSION['user_id'])){
                            echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="login2.php">Login</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="register.php">Register</a>
                                </li>';
                        }
                        ?>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Home</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="profile.php">My
                                        account</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="index.php">Questions</a>
                                </li>
                                <?php
                        if (!isset($_SESSION['user_id'])){
                            echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="login2.php">Login</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="register.php">Register</a>
                                </li>';
                        }
                        ?>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
            <a href="index.php" class="u-hidden-xs u-image u-logo u-image-1" data-image-width="1200"
                data-image-height="236">
                <img src="images/1200px-Stack_Overflow_logo.svg.png" class="u-logo-image u-logo-image-1">
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
                            style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content">
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
                <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
            </form>
            <nav
                class="u-align-left u-hidden-md u-hidden-sm u-hidden-xs u-menu u-menu-dropdown u-nav-spacing-25 u-offcanvas u-menu-2">
                <div class="menu-collapse">
                    <a class="u-button-style u-nav-link" href="#" style="padding: 4px 0px; font-size: calc(1em + 8px);">
                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302"
                            style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content">
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
                        <li class="u-nav-item"><?php include 'loginD.php' ?>
                        </li>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div
                        class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-4">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        style="padding: 10px 20px;">User</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>
    <section class="u-clearfix u-section-1" id="sec-37ee">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div
                            class="hide u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-container-style u-layout-cell u-shape-rectangle u-size-13 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <h5 class="u-hidden-xs u-text u-text-1">Home</h5>
                                <p class="u-hidden-xs u-text u-text-default u-text-2">PUBLIC</p>
                                <ul
                                    class="levo u-hidden-xs u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-3">
                                    <li><a href="index.php">Questions</a></li>
                                    <li><a href="profile.php">My profile</a></li>
                                    <li><a href="activity.php">My activity</a></li>
                                </ul>
                                <img class="u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-image u-image-default u-preserve-proportions u-image-1"
                                    src="images/1200px-Stack_Overflow_logo.svg-Copy.png" alt="" data-image-width="201"
                                    data-image-height="236">
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-shape-rectangle u-size-47 u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-2">
                                <div class="width">
                                    <h3 class="width"
                                        style="margin-top:10px; border-bottom: grey 0.5px solid; padding-bottom:10px; margin-left:0px"
                                        class="u-text u-text-default u-text-4">
                                        <?php
                                        $query = "SELECT * FROM vprasanja WHERE id=?";
                                        $stmt = $pdo->prepare($query);
                                        $stmt->execute([$id]);
                                        $question = $stmt->fetch();
                                        echo $question['Naslov'];

                                    ?>
                                    </h3>
                                </div>
                                <div class="width">
                                    <p>
                                        <?php
                                        $query = "SELECT * FROM vprasanja WHERE id=?";
                                        $stmt = $pdo->prepare($query);
                                        $stmt->execute([$id]);
                                        $question = $stmt->fetch();
                                        $question_date = date("M j, g:i a", strtotime($question['datum_objave']));

                                        $stmtv = $pdo->prepare("SELECT * FROM uporabniki WHERE id=?");
                                        $stmtv->execute([$question['uporabnik_id']]);
                                        $userqe = $stmtv->fetch();
                                        $username4 = $userqe['username'];
                                        $img4 = $userqe['image'];

                                        echo $question['Opis'];
                                    ?>
                                    </p>

                                </div>


                                <table class="width">
                                    <tr>
                                        <td>
                                            <div style="position:relative; float:right">
                                                <table>
                                                    <tr>
                                                        <td colspan="2">Asked <?php echo $question_date;?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:33px">
                                                            <?php
                                                            if (empty($img4)){
                                                                echo '<img class="postmedia" src="profile_pictures/default.png">';
                                                            }else{
                                                                echo
                                                                '<img class="postmedia" src="'.$img4.'">';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td style="text-align:left">&nbsp&nbsp<?php echo $username4 ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                    $query2 = "SELECT o.datum_objave AS datum_objave, o.uporabnik_id AS uporabnik_id, o.id AS id, o.odgovor, SUM(l.Value) AS val FROM odgovori o INNER JOIN lajki l ON l.odgovor_id=o.id WHERE o.vprasanje_id = ?  GROUP BY o.odgovor ORDER BY SUM(l.Value) DESC";
                                    //$query2 = "SELECT * FROM odgovori WHERE vprasanje_id=?";
                                    $stmt2 = $pdo->prepare($query2);
                                    $stmt2->execute([$id]);
                                    $count = $stmt2->rowCount();
                                    
                                    echo 
                                        '<tr>'
                                        .'<td class="width">Answers: '.$count.'<hr  style="color:grey;background-color:gray;border-width:1;opacity:0.3"></td>'
                                        .'</tr> ';
                                    //$display = 0;
                                    while ($answer = $stmt2->fetch(PDO::FETCH_ASSOC)) {

                                        $display = 0;
                                        $query4 = "SELECT * FROM lajki WHERE odgovor_id=?";
                                        $stmt4 = $pdo->prepare($query4);
                                        $stmt4 ->execute([$answer['id']]);
                                        while ($like = $stmt4->fetch(PDO::FETCH_ASSOC)) {
                                            $display += $like['Value'];
                                            $value = $like['Value'];
                                            $likeU = $like['uporabnik_id'];
                                            $likeO = $like['odgovor_id'];

                                            
                                        }
                                        ?>

                                    <?php
                                        //echo $upvote = "upvote";
                                        $upvote = $answer['id'];
                                        $string = "upvote";
                                        $string2 = "downvote";
                                        $sam = "'";
                                        $tog1 = $sam.$string.$upvote.$sam;
                                        $dog2 = $sam.$string2.$upvote.$sam;
                                        $tog = $string.$upvote;
                                        $dog = $string2.$upvote;
                                        //echo $display;
                                        echo 
                                        '<tr>'
                                        .'<td>
                                        
                                        <div style="width:100%; padding-top:30px">
                                        <table style="float:left; padding-right:30px">
                                        ';
                                        if (!isset($value)){
                                            $value = 3;
                                        }
                                        if($value== '1' and $likeU==$user_id and $likeO==$answer['id']){
                                            echo '<tr><td style="padding-right:30px" ><a class="disabled" onclick="upvote('.$tog1.')" href="#"><div class="arrowo"></div></a></td></tr>';
                                        }else{
                                            echo '<tr><td style="padding-right:30px" ><a onclick="upvote('.$tog1.')" href="#"><div class="arrow1"></div></a></td></tr>';
                                        }
                                        echo '<tr><td style="text-align:center; padding-right:30px;">'.$display.'</td></tr>';;
                                        if($value== '-1' and $likeU==$user_id and $likeO==$answer['id']){
                                            echo '<tr><td style="padding-right:30px" ><a class="disabled" onclick="downvote('.$dog2.')" href="#"><div class="arrowdo"></div></a></td></tr>';
                                        }else{
                                            echo '<tr><td style="padding-right:30px" ><a onclick="downvote('.$dog2.')" href="#"><div class="arrow2"></div></a></td></tr>';
                                        }
                                        echo'
                                        </table>
                                        <form id="'.$tog.'" action="upvote.php" method="post"><input type="hidden" name="answer_id" value='.$answer['id'].'><input type="hidden" name="question_id" value='.$question['id'].'></form>
                                        <form id="'.$dog.'" action="downvote.php" method="post"><input type="hidden" name="answer_id" value='.$answer['id'].'><input type="hidden" name="question_id" value='.$question['id'].'></form>
                                        
                                        '.$answer['odgovor']
                                        .'</td>'
                                        .'</tr> </div>'; ?>
                                    <tr style="float:right">
                                        <td colspan="2">
                                            <div>
                                                <table>
                                                    <?php
                                                    $stmt4 = $pdo->prepare("SELECT * FROM uporabniki WHERE id=?");
                                                    $stmt4->execute([$answer['uporabnik_id']]);
                                                    $user = $stmt4->fetch();
                                                    $username = $user['username'];
                                                    $img = $user['image'];

                                                $datum = date("M j, g:i a", strtotime($answer['datum_objave']));

                                                echo 
                                                '<tr><td colspan="2" style="padding-top:20px">'
                                                .'Answered '.$datum.''
                                                .'</td></tr>'
                                                .'<tr><td style="width:33px">';
                                                if (empty($img)){
                                                    echo '<img class="postmedia" src="profile_pictures/default.png">';
                                                }else{
                                                    echo
                                                    '<img class="postmedia" src="'.$img.'">';
                                                }
                                                echo
                                                '</td>'
                                                .'<td style="text-align:left">'
                                                .'&nbsp&nbsp'.$username
                                                .'</td>'
                                                .'</tr>';
                                                
                                                ?>
                                                </table>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border-bottom:1px solid rgb(211, 211, 211);"></td>
                                    </tr>





                                    <script>
                                    function myFunction(val) {
                                        //document.getElementById("comment").submit();
                                        document.getElementById(val).style.display = "inline";
                                    }

                                    function upvote(id1) {
                                        //alert(id1);
                                        document.getElementById(id1).submit();
                                    }

                                    function downvote(id2) {
                                        //alert(id2);
                                        document.getElementById(id2).submit();
                                    }
                                    </script>
                                    <?php
                                    $query3 = "SELECT * FROM komentarji WHERE odgovor_id=?";
                                        $stmt3 = $pdo->prepare($query3);
                                        $stmt3->execute([$answer['id']]);
                                        
                                        while ($comment = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                                            $datum_comment = date("M j, g:i a", strtotime($comment['datum_objave']));
                                            $stmtc = $pdo->prepare("SELECT * FROM uporabniki WHERE id=?");
                                            $stmtc->execute([$comment['uporabnik_id']]);
                                            $upo = $stmtc->fetch();
                                            $user_comment = $upo['username'];
                                            echo
                                        //'<table style="width:90%; font-size:13px">'
                                        '<tr style="font-size:13px ">'
                                        .'<td style="border-bottom:solid 0.5px rgba(211, 211, 211, .6); padding-left:50px" class="celica">'.$comment['komentar'].
                                        '<span style="color:blue">&nbsp-&nbsp'.$user_comment.'</span>&nbsp<span style="color:#989898">'.$datum_comment.'</span>
                                        
                                        </td>'
                                        .'</tr> 
                                        ';
                                        }
                                        echo
                                        '<tr>'
                                        .'<td style="padding-bottom: 10px; border-bottom:grey solid 0.5px" ><a onclick="myFunction('.$answer['id'].')" style="font-size:14px" href="#">Add a comment</a></td>'
                                        .'</tr>'
                                        .'<td>

                                        <form id="'.$answer['id'].'" style="display:none" action="comment_insert.php" method="post">
                                        <input type="hidden" name="question_id" value="'.$id.'">
                                        <table>
                                        <tr>
                                        <td><textarea  style="font-size:12px;" name="comment" id="" cols="70" rows="2"></textarea></td>
                                        </tr>
                                        <tr>
                                        <td>
                                        <input type="hidden" name="answer_id" value='.$answer['id'].'>
                                        <input style="font-size:12px; float:right" type="submit" value="Submit">
                                        </td>
                                        </tr>
                                        </table>
                                        </form>';
                                    }
                                ?>
                                </table>


                                <h4>Your answer:</h4>
                                <form action="answer_insert.php" method="post">
                                    <textarea name="answer" id="" cols="96" rows="10"></textarea>
                                    <?php
                                    echo "<input name='question_id' type='hidden' value='$id'>";
                                    ?>
                                    <input class="u-btn-round u-button-style u-palette-1-base u-radius-6 u-btn-1"
                                        type="submit" value="Post Your Answer">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="hide u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-39db">
        <div class="u-clearfix u-sheet u-sheet-1">

        </div>
    </footer>
</body>

</html>