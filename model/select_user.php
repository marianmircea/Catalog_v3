<?php
	require_once 'D:/wamp/www/Catalog_v3/confg/path.php';
	require_once URLP.'model/connect_db.php';
	class Select_Users extends Dbh {
		function select ($user, $id) {
			$stm = $this->connection()->prepare('SELECT * FROM '.$user.' WHERE id=?');
			$stm -> execute([$id]);
			switch ($user) {
				case 'elevi':
					$field = 'nr_matricol';
					break;
				case 'parinti':
					$field = 'tel_contact';
					break;
				case 'profesori':
					$field = 'materie';
					break;
			}
			$info = array ('nume', 'prenume', 'email', $field);
			while ($row = $stm->fetch()) {
				foreach ($info as $item) {
					$test[$item] = $row[$item];
				}
			}
			return $test;
		}	
	}
