<?php
    if($_GET['p'])
    {
        $p = $_GET['p'];
    }
    else
    {
        $p = "home";
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link rel="stylesheet" type="text/css" href="res/style.css" />
        <link rel="stylesheet" type="text/css" href="res/dock/style.css" />
        <link rel="stylesheet" type="text/css" href="res/login.css" />

        <script type="text/javascript" src="res/jquery.js"></script>
        <script type="text/javascript" src="res/dock/interface.js"></script>
        <script type="text/javascript" src="res/carousel/jquery.jcarousel.min.js"></script>
        <script type="text/javascript" src="res/pikachoose/jquery.pikachoose.js"></script>

        <title>Ank 11 -- Experience Exhileration</title>
    </head>
    <body>
        <table border="0" cellspacing="0" cellpadding="0" width="100%"><tbody>
            <tr>
                <td id="headertop" align="right" height="34">
                    <div id="topnav" class="topnav">
                        <a href="index.php?p=register" class="register cufon1"><span>Register</span></a>
                        <a href="login" class="login cufon1"><span>Login</span></a>
                    </div>
                    <fieldset id="login_menu"><form method="post" id="login" action="login.php">
                        <label for="username">Username</label>
                        <input id="username" name="username" value="" title="username" tabindex="4" type="text" />
                        <p>
                            <label for="password">Password</label>
                            <input id="password" name="password" value="" title="password" tabindex="5" type="password">
                        </p>
                        <p class="remember">
                            <input id="login_submit" value="Login" tabindex="6" type="submit">
                            <input id="remember" name="remember_me" value="1" tabindex="7" type="checkbox">
                            <label for="remember">Remember me</label>
                        </p>
                        <p class="forgot">
                            <a href="#" id="resend_password_link">Forgot your password?</a>
                        </p>
                    </form></fieldset>
                </td>
            </tr>
            <tr>
                <td>
                    <table id="header"  width="100%" height="150">
                       <tr>
                           <td>
                               <img src="images/header.png"  width="371" height="54" id="headerimage" alt="Ank '2011" />
                           </td>
                           <td width="377">
                               <img src="images/header_date.png"  width="377" height="60" alt="2nd to 4th September -- Knowledge fest of NIT Durgapur" />
                           </td>
                       </tr>
                    </table>
                </td>
            </tr>
            <tr id="headerbottom" height="82px">
                <td align="center">
                    <?php include "dock.php" ?>
                </td>
            </tr>
            <tr>
                <td valign="top" align="center" >
                    <table class="main" border="0" cellspacing="0" cellpadding="0" width="100%">
                        <tr>
                            <td valign="top" align="center"  class="leftpane" width="80px">
                                <table border="0" cellspacing="0" cellpadding="0" width="100%"><tr><td valign="top" align="center" >
                                    <div><iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fank11.mathsntech.in%2F1.0%2F&amp;layout=box_count&amp;show_faces=false&amp;width=80&amp;action=like&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:55px; height:70px; padding-top: 50px;" allowTransparency="true"></iframe></div>
                                    <div class="followicon"><a target="_blank" href="http://www.facebook.com/pages/Ank-11/227799350578918"><img src="images/facebook.png" width="32" height="32" alt="facebook" /></a></div>
                                    <div class="followicon"><a target="_blank" href="http://www.twitter.com/ank2011/"><img src="images/twitter.png" width="32" height="32" alt="twitter" /></a></div>
                                    <div class="followicon"><a target="_blank" href="#"><img src="images/orkut.png" width="32" height="32" alt="orkut" /></a></div>
                                    <div class="followicon"><a target="_blank" href="#"><img src="images/rss.png" width="32" height="32" alt="rss" /></a></div>
                                 </td></tr></table>
                            </td>
                            <td width="9px" class="leftshadow" />
                            <td valign="top" align="center" class="midpane">
                                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                    <tr valign="top">
                                        <td><?php
                                            if ($p == "register")
                                            {
                                                include "register.php";
                                            }
                                            elseif ($p == "about")
                                            {
                                                include "about.php";
                                            }
                                            elseif ($p == "events")
                                            {
                                                include "events.php";
                                            }
                                            elseif ($p == "workshops")
                                            {
                                                include "workshops.php";
                                            }
                                            elseif ($p == "sponsors")
                                            {
                                                include "sponsors.php";
                                            }
                                            elseif ($p == "gallery")
                                            {
                                                include "gallery.php";
                                            }
                                            elseif ($p == "hospitality")
                                            {
                                                include "hospitality.php";
                                            }
                                            elseif ($p == "contact")
                                            {
                                                include "contact.php";
                                            }
                                            elseif ($p == "home")
                                            {
                                                include "home.php";
                                            }
                                            else
                                            {
                                                include "404.php";
                                            }
                                        ?></td>
                                    </tr>
                                </table>
                            </td>
                            <td width="9px" class="rightshadow" />
                            <td valign="top" align="center"  class="rightpane" width="300px">
                                <table border="0" cellspacing="0" cellpadding="0" width="100%" height="1000px">
                                    <tr>
                                        <td valign="top" align="center">
                                            <div>
                                                <?php include "updatescarousel.php" ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top" align="center" >
                                            <?php include "tagcloud.php" ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top" align="center">
                                            <div>
                                                <?php include "sponsorcarousel.php" ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr height="100%"><td></td></tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr height="200px"><td>
                <?php include "footer.php" ?>
            </td></tr>
        </tbody></table>
        <div class="topshadow"/>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".login").click(function(e){
                    e.preventDefault();
                    $("fieldset#login_menu").toggle();
                    $(".login").toggleClass("menu-open");
                 });
                $("fieldset#login_menu").mouseup(function(){
                    return false
                });
                $(document).mouseup(function(e){
                    if($(e.target).parent("a.login").length==0)
                    {
                        $(".login").removeClass("menu-open");
                        $("fieldset#login_menu").hide();
                    }
                });
            });
        </script>
        <script src="res/cufon/cufon-yui.js" type="text/javascript"></script>
        <script src="res/cufon/segoeui.font.js" type="text/javascript"></script>

        <script type="text/javascript">
            Cufon.replace('.cufon1', { fontFamily: 'segoeui' });
        </script>
    </body>
</html>
