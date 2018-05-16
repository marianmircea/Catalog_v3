<?php
	//require_once 'D:/wamp/www/Catalog_v3/confg/path.php';
	require 'session.php';
	Session::destroy();
	header ('location: /Catalog_v3/index.php');
	exit;
?>