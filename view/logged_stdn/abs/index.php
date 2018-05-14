<?php
	//echo $_SESSION['user_type'];
	echo session_status();
?>
<div class = "form_boxes">
	<!--<form action="php\vizz_abs.php" method="post">-->
	<form method="get">
		<p>Clasa   <select name="clasa">
			<option value="0">...</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select></p>
		<p>Semestrul   <select name="semestrul">
			<option value="0">...</option>
			<option value="1">1</option>
			<option value="2">2</option>
		</select></p>
		<p><input type="submit" value="Arata"/></p>
	</form>
</div>