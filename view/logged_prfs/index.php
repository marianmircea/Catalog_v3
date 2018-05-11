<?php
	require_once 'D:/wamp/www/Catalog_v3/confg/path.php';
	require_once URLP.'controller/session.php';
	if (session_status() == PHP_SESSION_NONE) {
		Session::init();
		//session_start();
		}
	require URLP.'model/select_user.php';
	//require URLP.'controller/session.php';
	//Session::init();
	$adu = new Select_Users;
	$table = 'profesori';
?>
<section>
	<ul id="two_buttons">
		<li><a href="Vizz_elev_note.php" target="_self">Viz. Note</a></li>
		<li><a href="Elev_viz_abs.php" target="_self">Viz. Abs.</a></li>
	</ul>
	<div class="clear"></div>
	<h3>Datele D-voastra de identificare sunt urmatoarele:</h3>
	<table id="date_identificare">
		<tr>
			<th>Nume</th>
			<th>Prenume</th> 
			<th>Utilizator</th>
			<th>Materia predata</th>
		</tr>
		<tr>
			<td>
<?php
	echo $adu -> select($table, $_SESSION['user_id'])['nume'];
?>
			</td>
			<td>
<?php
	//echo $_GET['id'];
	echo $adu -> select($table, $_SESSION['user_id'])['prenume'];
?>
			</td>
			<td>
<?php
	//echo $_GET['id'];
	echo $adu -> select($table, $_SESSION['user_id'])['email'];
?>
			</td>
			<td>
<?php
	//echo $_GET['id'];
	echo $adu -> select($table, $_SESSION['user_id'])['materie'];
?>					
			</td>
			</tr>
	</table>
</section>