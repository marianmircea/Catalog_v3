<?php
	require 'D:/wamp/www/Catalog_v3/confg/path.php';
	if (session_status() == PHP_SESSION_NONE) {
		require URLP.'controller/session.php';
		Session::init();
		}
	echo isset($_SESSION['user_id']);
	require URLP.'controller/logged.php';
	$aff = new logged();
	$aff -> set_file('logged_stdn/abs');
	$aff -> index();
	