<?php
	require_once 'D:/wamp/www/Catalog_v3/confg/path.php';
	if (session_status() == PHP_SESSION_NONE) {
		require URLP.'controller/session.php';
		Session::init();
		}
	require URLP.'view/header.php';
	require URLP.'controller/boot_user.php';
	$tt = new Bootuser;
	if (isset($_GET['ok'])) {
		if ($_GET['ok'] == 1) {
			echo "suntem ok";
			require URLP.'view/logged_stdn/viz_abss.php';
		}
	}
	require URLP.'view/footer.php';
	echo session_status();
	