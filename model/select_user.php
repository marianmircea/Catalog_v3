<?php
	require_once 'D:/wamp/www/Catalog_v3/confg/path.php';
	require URLP.'model/connect_db.php';
	class Select_Users extends Dbh {
		function select ($user, $id) {
			$stm = $this->connection()->prepare('SELECT * FROM '.$user.' WHERE id=?');
			$stm -> execute([$id]);
			$info = array ('nume', 'prenume', 'email');
			while ($row = $stm->fetch()) {
				foreach ($info as $item) {
					$test[$item] = $row[$item];
				}
			}
			return $test;
		}
		
	}
