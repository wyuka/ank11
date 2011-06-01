<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link rel="stylesheet" type="text/css" href="res/style.css" />
        <link rel="stylesheet" type="text/css" href="res/dock/style.css" />
        <link rel="stylesheet" type="text/css" href="res/login.css" />


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
                               <!--<div class="cufon5" style="font-size: 80px; position: relative; left: 100px;">Ank 2011</div>-->
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
                <td align="center" >
                    <div class="dock" id="dock">
                        <div class="dock-container">
                            <a class="dock-item" href="index.php?p=home"><img src="images/dock/home1.png" alt="Home" /><span class="cufon1" style="font-size: 20px;">Home</span></a> 
                            <a class="dock-item" href="index.php?p=about"><img src="images/dock/calculator.png" alt="About" /><span class="cufon1" style="font-size: 20px;">About</span></a> 
                            <a class="dock-item" href="index.php?p=events"><img src="images/dock/calendar1.png" alt="Events" /><span class="cufon1" style="font-size: 20px;">Events</span></a> 
                            <a class="dock-item" href="index.php?p=sponsors"><img src="images/dock/card.png" alt="Sponsors" /><span class="cufon1" style="font-size: 20px;">Sponsors</span></a> 
                            <a class="dock-item" href="index.php?p=workshops"><img src="images/dock/blackboard1.png" alt="Workshops" /><span class="cufon1" style="font-size: 20px;">Workshops</span></a> 
                            <a class="dock-item" href="index.php?p=gallery"><img src="images/dock/gallery2.png" alt="Gallery" /><span class="cufon1" style="font-size: 20px;">Gallery</span></a> 
                            <a class="dock-item" href="index.php?p=hospitality"><img src="images/dock/bus.png" alt="Hospitality" /><span class="cufon1" style="font-size: 20px;">Hospitality</span></a> 
                            <a class="dock-item" href="index.php?p=contact"><img src="images/dock/phone2.png" alt="Contact" /><span class="cufon1" style="font-size: 20px;">Contact</span></a> 
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td valign="top" align="center" >
                    <table class="main" border="0" cellspacing="0" cellpadding="0" width="100%">
                        <tr>
                            <td valign="top" align="center"  class="leftpane" width="80px">
                                <table border="0" cellspacing="0" cellpadding="0" width="100%"><tr><td valign="top" align="center" >
                                    <div><iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fank11.mathsntech.in%2F1.0%2F&amp;layout=box_count&amp;show_faces=false&amp;width=80&amp;action=like&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:55px; height:70px; padding-top: 50px;" allowTransparency="true"></iframe></div>
                                    <div class="followicon"><a target="_blank" href="#"><img src="images/facebook.png" width="32" height="32" alt="facebook" /></a></div>
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
                                            if ($_GET['p'] == "register")
                                            {
                                                include "register.php";
                                            }
                                            elseif ($_GET['p'] == "hospitality")
                                            {
                                                include "hospitality.php";
                                            }
                                            elseif ($_GET['p'] == "contact")
                                            {
                                                include "contact.php";
                                            }
                                            elseif ($_GET['p'] == "404")
                                            {
                                                include "404.php";
                                            }
                                            else
                                            {
                                                include "home.php";
                                            }
                                        ?></td>
                                    </tr>
                                </table>
                            </td>
                            <td width="9px" class="rightshadow" />
                            <td valign="top" align="center"  class="rightpane" width="300px">
                                <table border="0" cellspacing="0" cellpadding="0" width="100%" height="1000px">
                                    <tr>
                                        <td valign="top" align="center" >
                                            <div id="wpcumuluswidgetcontent" class="tagcloud">
                                                <p style="display:none;">Requires Adobe Flash Player 9 or better.</p>
                                            </div>
                                            <script type="text/javascript" src="res/tagcloud/swfobject.js"></script>
                                            <script type="text/javascript">
                                                var rnumber = Math.floor(Math.random()*9999999);
                                                var widget_so = new SWFObject("res/tagcloud/tagcloud.swf?r="+rnumber, "tagcloudflash", "240", "240", "9", "#ffffff");
                                                widget_so.addParam("wmode", "transparent");
                                                widget_so.addParam("allowScriptAccess", "always");
                                                widget_so.addVariable("tcolor", "0x000000");
                                                widget_so.addVariable("tcolor2", "0x000000");
                                                widget_so.addVariable("hicolor", "0x555555");
                                                widget_so.addVariable("tspeed", "250");
                                                widget_so.addVariable("distr", "true");
                                                widget_so.addVariable("mode", "tags");
                                                widget_so.addVariable("tagcloud", "<tags>%0A<a href='index.php?p=mmm' style='font-size: 12pt;'>Maths Maze 'N' Masti</a>%0A<a href='index.php?p=quiztune' style='font-size: 7pt;'>Quiz Tune</a>%0A<a href='index.php?p=kryptic' style='font-size: 9pt;'>Kryptic</a>%0A<a href='index.php?p=ethical' style='font-size: 7pt;'>Ethical Hacking</a>%0A<a href='index.php?p=pshopwshop' style='font-size: 7pt;'>Photoshop Workshop</a>%0A<a href='index.php?p=picturesque' style='font-size: 8pt;'>Picturesque</a>%0A<a href='index.php?p=inw' style='font-size: 7pt;'>Images and Words</a>%0A<a href='index.php?p=tt' style='font-size: 11pt;'>Terrorist Takedown</a>%0A<a href='index.php?p=simplex' style='font-size: 11pt;'>Simplex</a>%0A<a href='index.php?p=constructo' style='font-size: 11pt;'>Constructo</a>%0A<a href='index.php?p=whosnext' style='font-size: 10pt;'>Who's Next</a>%0A<a href='index.php?p=clash' style='font-size: 7pt;'>Clash of the Titans</a>%0A</tags>");
                                                widget_so.write("wpcumuluswidgetcontent");
                                            </script>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr height="200px"><td>
                <table class="footer cufon1" cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
                    <tr valign="top"><td>
                        <table cellpadding="20" border="0" cellspacing="0" width="100%">
                            <tr valign="top">
                                <td width="63px">
                                    <img src="images/logo.png" width="63" height="53" />
                                </td>
                                <td width="150">
                                    <div>
                                        Brought to you by<br /><br />
                                            <div class="footertext">
                                                Maths 'N' Tech Club<br /><br />
                                                <a href="http://www.mathsntech.in" style="color: #DDDDDD">www.mathsntech.in</a><br /><br />
                                                <a href="mailto:mathsntech.nitdgp@gmail.com" style="color: #DDDDDD">mathsntech.nitdgp@gmail.com</a><br /><br />
                                                NIT Durgapur<br /><br />
                                            </div>
                                    </div>
                                </td>
                                <td width="150">
                                    <div>
                                        Special thanks to<br /><br />
                                            <div class="footertext">
                                                Students' Gymkhana<br /><br />
                                                <a href="http://www.nitdgp.ac.in" style="color: #DDDDDD">www.nitdgp.ac.in</a><br /><br />
                                                NIT Durgapur<br /><br />
                                                Durgapur<br /><br />
                                                PIN - 713209<br /><br />
                                       </div>
                                   </div>
                                </td>
                                <td>
                                    &nbsp;
                                </td>
                                <td width="245" align="right">
                                    <div>
                                        Website developed and maintained by<br /><br />
                                        <div class="footertext">
                                            Tirtha Chatterjee<br /><br />
                                            <a href="mailto:tirtha.p.chatterjee@gmail.com" style="color: #DDDDDD">tirtha.p.chatterjee@gmail.com</a><br /><br />
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td></tr>
                </table>
            </td></tr>
        </tbody></table>
        <div class="topshadow"/>
        <script type="text/javascript" src="res/dock/jquery.js"></script>
        <script type="text/javascript" src="res/dock/interface.js"></script>
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
        <script type="text/javascript">
            $(document).ready(function(){
                $('#dock').Fisheye({
                    maxWidth: 50,
                    items: 'a',
                    itemsText: 'span',
                    container: '.dock-container',
                    itemWidth: 40,
                    proximity: 90,
                    halign : 'center'
                })
            });

        </script>
        <script src="res/cufon/cufon-yui.js" type="text/javascript"></script>
        <script src="res/cufon/segoeui.font.js" type="text/javascript"></script>

        <script type="text/javascript">
            Cufon.replace('.cufon1', { fontFamily: 'segoeui' });
        </script>
    </body>
</html>
