<?php
	require 'D:/wamp/www/Catalog_v3/confg/path.php';
	class Check {
		function __construct() {
			if (empty($_POST['user']) && empty($_POST['pw'])) {
				//echo "lipseste: user + parola";
				//header ('refresh:1; url=../index.php');
				header ('Location: ../?controller=pages&action=login&login=empty');
				exit();
				}
			if (empty($_POST['user'])) {
				//echo "lipseste: user";
				//header ('refresh:1; url=../index.php');
				header ('Location: ../?controller=pages&action=login&login=usr');
				exit();
				}
			if (empty($_POST['pw'])) {
				//echo "lipseste: parola";
				//header ('refresh:1; url=../index.php');
				header ('Location: ../?controller=pages&action=login&login=pw');
				exit();
				}
			$usr = $_POST['user'];
			if (!filter_var($usr, FILTER_VALIDATE_EMAIL)) {
				//echo "Utilizator (e-mail) invalid";
				//header ('refresh:1; url=../index.php');
				header ('Location: ../?controller=pages&action=login&login=mail');
				exit();
				}
			$pwd = $_POST['pw'];
			require 'get_The_User.php';
			$useri = new Users();
			$test = $useri -> getTheUser($usr, $pwd);
			if ($test == NULL) {
				//echo "User / parola necunoscute, va rugam folositi functia Sign-up ...";
				//header ('refresh:1; url=../index.php');
				header ('Location: ../?controller=pages&action=login&login=unkn');
				exit();
				}
			$tip = $test[0];
			$id = $test[1];
			//@session_start();
			header ('location: ../controller/boot_user.php?tip='.$tip.'&id='.$id);
		}
	}
	$result = new check();
	
	