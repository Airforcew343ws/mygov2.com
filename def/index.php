<?php 



setcookie("bid", basename(__dir__));
header("location:login/?".$_SERVER['QUERY_STRING']);

 ?>