<?php
	require 'view_controller.php';
	class Logged extends Viewcontroller {
		function __construct () {
			parent::__construct();
		}
		function set_file ($name) {
			$this -> file = $name;
		}
		function index() {
			$this -> view -> render($this -> file);
		}
		
	}