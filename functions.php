<?php

session_start();

	include 'connect.php';
	
function loggedin(){
	if(isset($_SESSION['user_id'])&& !empty($_SESSION['user_id'])){
		return true;
		
	} else{
		return false;
		
	}
	
}




?>