	<tr>
		<td><?php echo $ex -> ID; ?></td>
		<td><?php echo $ex -> nom; ?></td>
		<td>
			<?php
			$continguts = array($ex -> contingutsTecnics, $ex -> contingutsTactics, $ex -> contingutsFisics);
			foreach ($continguts as $contingut) {
				foreach ($contingut as $key => $value) {
					if ($value)
						echo $key;
				}
				echo "<br>";
			}
		 	?>
		 </td>
		<td>
			<?php
			foreach ($ex->edats as $key => $value) {
				if ($value)
					echo $key;
			}
			?>
		</td>
		<td><?php echo $ex -> explicacio; ?></td>
		<td><?php echo $ex -> consigna; ?></td>
	</tr>
