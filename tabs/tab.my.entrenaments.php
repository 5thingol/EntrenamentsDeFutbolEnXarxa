<div id="actions">
	<form action="forms/editentrenament.php" method="post">
		<input type="submit" value="Crear entrenament" />
	</form>
</div>
</div>
<div id="content">
<table>
	<tr>
		<td>Durada</td>
		<td>Nom</td>
		<td>Continguts</td>
		<td>Categories</td>
		<td>Explicació</td>
		<td>Consigna</td>
	</tr>
	<?php
	include_once "db/CtrlDB.php";

	$ctrlDB = new CtrlDB;
	$exercicis = $ctrlDB -> getExercicis();
	foreach ($exercicis as $ex) {
	//	include "collections/exercici_list_item.php";
	}
?>
</table>
</div>