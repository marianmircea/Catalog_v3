<?php
	require_once 'D:/wamp/www/Catalog_v3/confg/path.php';
	require URLP.'model/select_user.php';
	$adu = new Select_Users;
	//$adu = new Select_Users('elevi', $_GET['id']);
	$table = 'elevi';
?>
<section>
	<ul id="two_buttons">
		<li><a href="Vizz_elev_note.php" target="_self">Viz. Note</a></li>
		<li><a href="Elev_viz_abs.php" target="_self">Viz. Abs.</a></li>
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
	//echo $_GET['id'];
	//print_r($adu -> select($table, $_GET['id']));
	echo $adu -> select($table, $_GET['id'])['nume'];
?>
					</td>
					<td>
<?php
	//echo $_GET['id'];
	echo $adu -> select($table, $_GET['id'])['prenume'];
?>
					</td>
					<td>
<?php
	//echo $_GET['id'];
	echo $adu -> select($table, $_GET['id'])['email'];
?>
					</td>
					<td>
<?php
	//echo $_GET['id'];
	//echo $adu -> select($table, $_GET['id'])['nr_matricol'];
?>					
					</td>
				  </tr>
				</table>

			</section>