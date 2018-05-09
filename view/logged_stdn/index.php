<?php
	require_once 'D:/wamp/www/Catalog_v3/confg/path.php';
	require URLP.'model/select_user.php';
	
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
	echo $_GET['id'];
?>
					</td>
					<td>
<?php
	echo $_GET['id'];
?>
					</td>
					<td>
<?php
	echo $_GET['id'];
?>
					</td>
					<td>
<?php
	echo $_GET['id'];
?>					
					</td>
				  </tr>
				</table>

			</section>