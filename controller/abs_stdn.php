<?php
	require 'D:/wamp/www/Catalog_v3/confg/path.php';
	echo session_status();
	echo "pagina goala.<br>";
	//echo session_status();
	//$_SESSION['user_type'] = $_GET['id'];
	echo $_SESSION['user_type'];
	require URLP.'controller/logged.php';
	$aff = new logged();
	$aff -> set_file('logged_stdn/abs');
	$aff -> index();
	