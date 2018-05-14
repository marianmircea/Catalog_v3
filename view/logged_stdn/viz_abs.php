<h3>Situatia absentelor:</h3>
				<table id = "afisare_note">
					<tr>
						<th>Clasa</th>
						<th>Semestrul</th> 
						<th>Data absentei</th>
						<th>Materia</th>
					</tr>
					<tr>
<?php
	for ($i = 1; $i <= $num_randuri; $i++) {
		$rand = mysqli_fetch_assoc($info);
?>
						<td>
<?php
		echo $rand["clasa"];
?>
						</td>
						<td>
<?php
		echo $rand["semestru"];
?>
						</td>
						<td>
<?php
		$data = date_create($rand["data_obtinere"]);
		echo date_format($data, 'd m Y');
?>
						</td>
						<td>
<?php
		$id_materie = $rand["id_materie"];
		$out = 0;
		$cerinta_materii = "SELECT * FROM materii";
		$materiile = mysqli_query($conn, $cerinta_materii);
		while ($out == 0 && $linie_materii = mysqli_fetch_assoc($materiile)) {
			if ($linie_materii["id_materie"] === $id_materie) {
				$out = 1;
				$materia_notei = $linie_materii["nume_materie"];
				echo $materia_notei;
				}
			}
?>
						</td>
					</tr>
<?php
		}
?>
				</table>