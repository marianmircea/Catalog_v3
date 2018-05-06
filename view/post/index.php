<p>Here is a list of all lines from DB ...</p>
<?php
	foreach ($post as $pst) { ?>
		<p>
		<?php
			echo $pst -> prenume; ?>
			<a href = '?controller=post&action=show&id=<?php echo $pst->id; ?>'>Check</a>
		</p>
	<?php } ?>
	