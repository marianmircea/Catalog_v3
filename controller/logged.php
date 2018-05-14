<?php
	require 'view_controller.php';
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