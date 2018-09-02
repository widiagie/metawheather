<?php
	session_start(); 

	date_default_timezone_set('Asia/Jakarta');

	require_once "application/config/database.php";
	require_once "application/config/func.php";
	require_once "application/config/routes.php";

		include('application/views/header.php'); 

	if (isset($_REQUEST['show'])){
			$module = $_REQUEST['show'];
			switch ($module) {   
				case 'home' : 
					 include('application/controllers/home.php'); 
				break;
				case 'list' : 
					 include('application/controllers/list.php'); 
				break;
			}
	
	}else{ 
		
		include('application/controllers/home.php'); 
	  	
	}

		include('application/views/footer.php'); 

  ?>