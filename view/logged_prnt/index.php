<?php
	require_once 'D:/wamp/www/Catalog_v3/confg/path.php';
	require URLP.'model/select_user.php';
	$adu = new Select_Users;
	$table = 'parinti';
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
			<th>Tel. Contact</th>
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
	echo $adu -> select($table, $_SESSION['user_id'])['tel_contact'];
?>					
			</td>
			</tr>
	</table>
	<h3>Elevul(ii) pentru care vom afisa date:</h3>
	<table id="date_identificare">
<?php
	echo $adu -> select('elevi', 4)['nume'];
?>
	</table>
</section>