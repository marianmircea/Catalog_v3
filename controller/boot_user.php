<?php
	//Controller de afisare pe tip de utilizator ...
	require_once 'D:/wamp/www/Catalog_v3/confg/path.php';
	//require URLP.'controller/session.php';
	if (session_status() == PHP_SESSION_NONE) {
		require URLP.'controller/session.php';
		Session::init();
		}
	//echo $_SESSION['user_type'];
	//$tip_user = $_SESSION['user_type'];
	//$id_user = $_SESSION['user_id'];
	class Bootuser {
		function __construct () {
			//echo session_status();
			//echo $_SESSION['user_id'];
			$tip_user = $_SESSION['user_type'];
			$id_user = $_SESSION['user_id'];
			require URLP.'controller/logged.php';
			$aff = new logged();
			if ($tip_user == 1) {
				$aff -> set_file('logged_prfs');
			}
			if ($tip_user == 2) {
				$aff -> set_file('logged_prnt');
			}
			if ($tip_user == 3) {
				$aff -> set_file('logged_stdn');
			}
			echo "linia 40 ...".$_SESSION['user_id'];
			$aff -> index();
			echo "linia 42 ...";
			echo $_SESSION['user_id'];
		}
	}
	//$tt = new Bootuser;
	//echo session_status();
	