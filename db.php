<?php
	
	$host="localhost";
	$user="root";
	$pass="";
	$db_name="chat";
	
	$conn = new mysqli($host,$user,$pass,$db_name);

	//4 column id,name,message,date has been created in table name chat inside db chat
	
	function formatDate($date){
		return date ('g:i a ', strtotime($date));
	}
?>