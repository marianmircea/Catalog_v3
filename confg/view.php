<?php
	require_once 'D:/wamp/www/Catalog_v3/confg/path.php';
	class View {
		function __construct() {
		}
		public function render ($fill) {
			require URLP.'view/header.php';
			require URLP.'view/'.$fill.'/index.php';
			require URLP.'view/footer.php';
			
		}
	}