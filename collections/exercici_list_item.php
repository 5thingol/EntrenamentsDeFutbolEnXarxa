	<tr>
		<td><?php echo $ex -> durada; ?></td>
		<td><?php echo $ex -> nom; ?></td>
		<td>
			<?php
			$continguts = array($ex -> contingutsTecnics, $ex -> contingutsTactics, $ex -> contingutsCoordinacio, $ex -> contingutsPercepcio, $ex -> contingutsFisics);
			foreach ($continguts as $value) {
				if ($value != NULL)
					echo $value;
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
