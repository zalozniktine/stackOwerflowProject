<?php if(isset($_SESSION['user_id'])){ echo'    
                        <a href="profile.php"
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                style="padding: 10px 20px;">
                                    '.$_SESSION['user_name'].'
                               
                            </a>';}else echo '<div style="position:relative; left:50px"><button style="color:white" type="button" class="btn btn-primary"><a style="color:white" href="login2.php">Login</a></button>
                            <button onclick="register.php" style="color:white" type="button" class="btn btn-secondary"><a style="color:white" href="register.php">Sign up</a></button></div>
                            '
                            ; ?>