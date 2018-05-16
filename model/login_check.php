<?php
	require 'D:/wamp/www/Catalog_v3/confg/path.php';
	class Check {
		function __construct() {
			if (empty($_POST['user']) && empty($_POST['pw'])) {
				header ('Location: ../?controller=pages&action=login&login=empty');
				exit();
				}
			if (empty($_POST['user'])) {
				header ('Location: ../?controller=pages&action=login&login=usr');
				exit();
				}
			if (empty($_POST['pw'])) {
				header ('Location: ../?controller=pages&action=login&login=pw');
				exit();
				}
			$usr = $_POST['user'];
			if (!filter_var($usr, FILTER_VALIDATE_EMAIL)) {
				header ('Location: ../?controller=pages&action=login&login=mail');
				exit();
				}
			$pwd = $_POST['pw'];
			require 'get_The_User.php';
			$useri = new Users();
			$test = $useri -> getTheUser($usr, $pwd);
			if ($test == NULL) {
				header ('Location: ../?controller=pages&action=login&login=unkn');
				exit();
				}
			if (session_status() == PHP_SESSION_NONE) {
				require URLP.'controller/session.php';
				Session::init();
				}
			$_SESSION['user_type'] = $test[0];
			$_SESSION['user_id'] = $test[1];
			require URLP.'controller/boot_user.php';
			$tt = new Bootuser;
		}
	}
	$result = new check();
	
	