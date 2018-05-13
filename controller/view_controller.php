<?php
	require ('D:/wamp/www/Catalog_v3/confg/view.php');
	//require ('config/view.php');
	if (session_status() == PHP_SESSION_NONE) {
		require 'session.php';
		Session::init();
		}
	class Viewcontroller {
		function __construct() {
			$this -> view = new View();
			
        }
    }