<p>pagina pentru profesor</p><br>
<?php
	require_once 'D:/wamp/www/Catalog_v3/confg/path.php';
	require URLP.'controller/logged.php';
	$aff = new logged();
	$aff -> index();
