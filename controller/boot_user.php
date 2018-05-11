<?php
	//Controller de afisare pe tip de utilizator ...
	require_once 'D:/wamp/www/Catalog_v3/confg/path.php';
	require URLP.'controller/session.php';
	if (session_status() == PHP_SESSION_NONE) {
		Session::init();
		}
	echo $_SESSION['user_type'];
	//$tip_user = $_SESSION['user_type'];
	//$id_user = $_SESSION['user_id'];
	class Bootuser {
		function __construct () {
			echo session_status();
			$tip_user = $_SESSION['user_type'];
			$id_user = $_SESSION['user_id'];
			require URLP.'controller/logged.php';
			$aff = new logged();
			/*switch ($tip_user) {
				case 1:
					$aff -> set_file('logged_prfs');
					break;
				case 2:
					$aff -> set_file('logged_prnt');
					break;
				case 3:
					$aff -> set_file('logged_stdn');
					break;
			}*/
			if ($tip_user == 1) {
				$aff -> set_file('logged_prfs');
			}
			if ($tip_user == 2) {
				$aff -> set_file('logged_prnt');
			}
			if ($tip_user == 3) {
				$aff -> set_file('logged_stdn');
			}
			echo $_SESSION['user_type'];
			$aff -> index();
			echo $_SESSION['user_type'];
		}
	}
	$tt = new Bootuser;
	echo $_SESSION['user_type'];