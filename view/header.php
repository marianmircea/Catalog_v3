<?php
	require_once ('D:/wamp/www/Catalog_v3/confg/path.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>CN Ion Creanga Bistrita</title>
		<link rel="stylesheet" href="<?php echo URLH; ?>css/main_file.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body id = "content">
		<header id = "header">
			<ul id = "header_links">
				<li><a href = '/Catalog_v3'>Home</a></li>
				<li><a href = '<?php echo URLH; ?>?controller=post&action=index'>Posts</a></li>
				<li><a href = '?controller=pages&action=login'>Login</a></li>
				<li><a href = '<?php echo URLH; ?>?controller=pages&action=under_con'>Sign up</a></li>
				<li><a href = '<?php echo URLH; ?>?controller=pages&action=about_us'>About us</a></>
			</ul>
		</header>