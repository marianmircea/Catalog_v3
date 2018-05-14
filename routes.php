<?php
	function call($controller, $action) {
		require_once('controller/'.$controller.'.php');
		switch ($controller) {
			case 'pages':
				$controller = new PagesController();
			break;
			case 'post':
				require_once ('model/post.php');
				$controller = new PostController();
			break;
			case 'about_us':
				$controller = new PagesController();
			break;
			case 'login':
				$controller = new PagesController();
			break;
			case 'under_con':
				$controller = new PagesController();
			break;
		}
		$controller -> { $action } ();
	}
	$controllers = array('pages' => ['home', 'error', 'about_us', 'login', 'under_con'], 'post' => ['index', 'show']);
	if (array_key_exists($controller, $controllers)) {
		if (in_array($action, $controllers[$controller])) {
			call($controller, $action);
		} else {
			call('pages', 'error');
			}
		} else {
			call('pages', 'error');
			}
