<?php
	class PagesController {
		public function home () {
			$prenume = 'Jon';
			$email = 'Jon.Snow@yahoo.com';
			require_once ('view/pages/home.php');
		}
		public function about_us () {
			require_once ('view/pages/about_us.php');
		}
		public function login () {
			require_once ('view/pages/login.php');
		}
		public function under_con () {
			require_once ('view/pages/under_con.php');
		}
		public function error () {
			require_once ('view/pages/error.php');
		}
	}
