<?php
	class PostController {
		public function index() {
			$post = Post::all();
			require_once ('view/post/index.php');
		}
		public function show() {
			if (!isset($_GET['id'])) {
				return call('pages', 'error');
			}
			$post = Post::find($_GET['id']);
			require_once('view/post/show.php');
		}
	}