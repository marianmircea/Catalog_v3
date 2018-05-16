<?php
	//Controller de afisare pe tip de utilizator ...
	require_once 'D:/wamp/www/Catalog_v3/confg/path.php';
	if (session_status() == PHP_SESSION_NONE) {
		require URLP.'controller/session.php';
		Session::init();
		}
	class Bootuser {
		function __construct () {
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
			$aff -> index();
		}
	}
