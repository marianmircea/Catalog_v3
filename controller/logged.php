<?php
	require_once 'D:/wamp/www/Catalog_v3/confg/path.php';
	require_once URLP.'controller/view_controller.php';
	class Logged extends Viewcontroller {
		function __construct () {
			parent::__construct();
		}
		public function set_file ($name) {
			$this -> file = $name;
		}
		public function index() {
			$this -> view -> render($this -> file);
		}
		
	}