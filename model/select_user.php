<?php
	require_once 'D:/wamp/www/Catalog_v3/confg/path.php';
	require URLP.'model/connect_db.php';
	class Select_Users extends Dbh {
		function __construct ($user, $id) {
			$stm = $this->connection()->prepare('SELECT * FROM '.$user.' WHERE id=?');
			$stm -> execute([$id]);
			while ($row = $stm->fetch()) {
				
				return ???;
			}
			
		}

		
	}
