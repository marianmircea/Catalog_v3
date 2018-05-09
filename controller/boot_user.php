<?php
	//Controller de afisare pe tip de utilizator ...
	
	//require '/../model/session.php';
	class Bootuser {
		function __construct () {
			echo "suntem in boot user<br>";
			$tip_user = $_GET["tip"];
			$id_user = $_GET["id"];
			require 'logged.php';
			$aff = new logged();
			switch ($tip_user) {
				case 1:
					$aff -> set_file('logged_prfs');
					break;
				case 2:
					$aff -> set_file('logged_prnt');
					break;
				case 3:
					$aff -> set_file('logged_stdn');
					break;
			}
			$aff -> index();
		}
	}
	$tt = new Bootuser;