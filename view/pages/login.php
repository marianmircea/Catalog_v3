<?php
	require_once ('D:/wamp/www/Catalog_v3/confg/path.php');
?>
<h2>Login</h2>
<div id="login_box">
	<form action = "<?php echo URLH; ?>model/login_check.php" method = "post">
		<p><input type = "text" name = "user" placeholder = "Username (e-mail)"/><label> User (email)</label></p>
		<p><input type = "password" name = "pw" placeholder = "password"/><label> Parola</label></p>
		<p><input type = "submit" value = "Acces"/>
			<input type="reset"></p>
	</form>
<?php
	if (!isset($_GET['login'])) {
		return;
		//exit();
	}  else {
			switch ($_GET['login']) {
				case 'empty': 
					echo "Lipseste user + parola ....";
				break;
				case 'usr':
					echo "Lipseste user ...";
				break;
				case 'pw':
					echo "Lipseste parola ...";
				break;
				case 'mail':
					echo "Invalid email ...";
				break;
				case 'unkn':
					echo "User / parola necunoscute, va rugam folositi functia Sign-up ...";
				break;
			}
	}
?>
</div>