<?php
	if (session_status() == PHP_SESSION_NONE) {
		require 'session.php';
		Session::init();
		}
	require 'view_controller.php';
	class Logged extends Viewcontroller {
		function __construct () {
			parent::__construct();
		}
		public function set_file ($name) {
			$this -> file = $name;
		}
		public function index() {
			if (session_status() == PHP_SESSION_NONE) {
			require 'session.php';
			Session::init();
			}
			$this -> view -> render($this -> file);
		}
		
	}