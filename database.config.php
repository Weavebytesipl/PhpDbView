<?php

	define('HOST','localhost');
	define('USER','root');
	define('PASSWORD', '123');
	define('DBNAME','some-db');

	//conencting to database
	$con=mysql_connect(HOST, USER, PASSWORD);
	if(!$con){
		echo"connection not created";
	}
	
	//selecting database
	$db=mysql_select_db(DBNAME);
		
	if(!$db){
		die("<b>ERROR: Failed to connect to database. <br>Can't continure further...</b>");
	}
?>
