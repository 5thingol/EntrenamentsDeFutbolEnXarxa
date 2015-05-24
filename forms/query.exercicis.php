<?php
include_once "../common/header.php";
include_once "../common/session.start.php";
?>
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
		include_once "../db/CtrlDB.php";

		$ctrlDB = new CtrlDB;
		$exercicis = $ctrlDB -> getExercicis();
		foreach ($exercicis as $ex) {
			$selectable = True;
			include "../collections/exercici_list_item.php";
		}		?>
	</table>
</div>
<?php include_once "../common/footer.php" ?>
