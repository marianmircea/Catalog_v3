<?php
	require_once 'D:/wamp/www/Catalog_v3/confg/path.php';
	class View {
		function __construct() {
		}
		public function render ($file) {
			//require ('file:///D:/wamp/www/Catalog_v2/view/header.php');
			//require ('file:///D:/wamp/www/Catalog_v2/view/'.$file.'/index.php');
			//require ('file:///D:/wamp/www/Catalog_v2/view/footer.php');
			require URLP.'view/header.php';
			require URLP.'view/'.$file.'/index.php';
			require URLP.'view/footer.php';
			
		}
	}