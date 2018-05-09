<?php
	require_once 'D:/wamp/www/Catalog_v3/confg/path.php';
	require URLP.'model/select_user.php';
	$adu = new Select_Users;
	//$adu = new Select_Users('elevi', $_GET['id']);
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
			<th>Nr. matricol</th>
			<th>Utilizator</th>
		</tr>
		<tr>
			<td>
<?php
	//echo $_GET['id'];
	//print_r($adu -> select('elevi', $_GET['id']));
	echo $adu -> select('elevi', $_GET['id'])['nume'];
?>
					</td>
					<td>
<?php
	//echo $_GET['id'];
	echo $adu -> select('elevi', $_GET['id'])['prenume'];
?>
					</td>
					<td>
<?php
	//echo $_GET['id'];
	echo $adu -> select('elevi', $_GET['id'])['nr_matricol'];
?>
					</td>
					<td>
<?php
	//echo $_GET['id'];
	echo $adu -> select('elevi', $_GET['id'])['email'];
?>					
					</td>
				  </tr>
				</table>

			</section>