<?php if(isset($_SESSION['user_id'])){ echo'    
                        <a href="profile.php"
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                style="padding-left: 15%;">
                                    '.$_SESSION['user_name']; if (!isset($_SESSION['image'])){
                                        echo '<img style="margin-left:10px; width:25px; height:25px; border:1px solid black" src="profile_pictures/default.png">';
                                    }else{
                                        echo
                                        '<img style="margin-left:10px; width:25px; height:25px; border:1px solid black" class="postmedia" src="'.$_SESSION['image'].'">';
                                    }'
                               
                            </a>';}else echo '<div style="position:relative; left:50px"><button style="color:white" type="button" class="btn btn-primary"><a style="color:white" href="login2.php">Login</a></button>
                            <button onclick="register.php" style="color:white" type="button" class="btn btn-secondary"><a style="color:white" href="register.php">Sign up</a></button></div>
                            '
                            ; ?>