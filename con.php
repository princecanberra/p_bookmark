<?php
	
	// connect to database 
	
	
	$con = mysql_connect("localhost","root","n");
	if(!$con){
	
		die("Error connect to database ");
	
	}
	

	
	mysql_select_db("boxmark");

?>