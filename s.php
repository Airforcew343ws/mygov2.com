<?php

header('Content-Type: application/json');


if (isset($_GET['get_all'])) {
	$respond=array();



	foreach(glob('components/{*,*/*}/domains.txt',GLOB_BRACE) as $domains_file){


		

		$folder= basename(dirname($domains_file));
		$domains=file($domains_file,FILE_IGNORE_NEW_LINES);		
		$obj=new stdClass();
		$obj->name=$folder;
		$obj->domains=$domains;	
		$obj->link= str_replace('domains.txt','',$domains_file);	
		$respond[]=$obj;
	}



	echo json_encode($respond);

}



