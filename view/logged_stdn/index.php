<?php
	require_once 'D:/wamp/www/Catalog_v3/confg/path.php';
	if (session_status() == PHP_SESSION_NONE) {
		require URLP.'controller/session.php';
		Session::init();
		}
	if (!isset($_SESSION['user_id'])) {
		header ('location: '.URLP.'index.php');
		}
	require URLP.'model/select_user.php';
	$adu = new Select_Users;
	$table = 'elevi';
	//$id = $_SESSION['user_id'];
?>
<section>
	<ul id = "two_buttons">
		<!--<li><a href="Vizz_elev_note.php" target="_self">Note</a></li>-->
		<li><a href="<?php echo URLH; ?>view/under_con/">Note</a></li>
		<!--<li><a href="<?php echo URLH; ?>controller/abs_stdn.php">Absente</a></li>-->
		<li><a href="<?php echo URLH; ?>view/logged/?ok=1">Absente</a></li>
	</ul>
	<div class = "clear"></div>
	<h3>Datele D-voastra de identificare sunt urmatoarele:</h3>
	<table id="date_identificare">
		<tr>
			<th>Nume</th>
			<th>Prenume</th> 
			<th>Utilizator</th>
			<th>Nr. matricol</th>
		</tr>
		<tr>
			<td>
<?php
	echo $adu -> select($table, $_SESSION['user_id'])['nume'];
?>
					</td>
					<td>
<?php
	echo $adu -> select($table, $_SESSION['user_id'])['prenume'];
?>
					</td>
					<td>
<?php
	echo $adu -> select($table, $_SESSION['user_id'])['email'];
?>
					</td>
					<td>
<?php
	echo $adu -> select($table, $_SESSION['user_id'])['nr_matricol'];
?>					
					</td>
				  </tr>
				</table>
			</section>