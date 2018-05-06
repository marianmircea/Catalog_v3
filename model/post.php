<?php
	class Post {
		public $id;
		public $prenume;
		public $email;
		public function __construct ($id, $prenume, $email) {
			$this -> id = $id;
			$this -> prenume = $prenume;
			$this -> email = $email;
		}
		public static function all () {
			$list = [];
			$conn = Db::getInstance();
			$req = $conn -> query('SELECT * FROM users');
			foreach ($req -> fetchAll() as $post) {
				$list[] = new Post ($post['id'], $post['prenume'], $post['email']);
			}
			return $list;
		}
		public static function find ($id) {
			$conn = Db::getInstance();
			$id = intval($id);
			$req = $conn -> prepare('SELECT * FROM users WHERE id = ?');
			//$req -> execute(array('?' => $id));
			$req -> execute([$id]);
			$post = $req -> fetch();
			return new Post($post['id'], $post['prenume'], $post['email']);
		}
	}