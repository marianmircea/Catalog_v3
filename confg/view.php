<?php
	require_once 'D:/wamp/www/Catalog_v3/confg/path.php';
	if (session_status() == PHP_SESSION_NONE) {
		require URLP.'controller/session.php';
		Session::init();
		}
	class View {
		function __construct() {
		}
		public function render ($fill) {
			require URLP.'view/header.php';
			require URLP.'view/'.$fill.'/index.php';
			require URLP.'view/footer.php';
			
		}
	}