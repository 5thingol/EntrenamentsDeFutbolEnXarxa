<table>
	<?php
	include_once "inc/class.exercici.inc.php";
	include_once "db/CtrlDB.php";

	$ctrlDB = new CtrlDB;
	$exercicis = $ctrlDB -> getExercicis();
	foreach ($exercicis as $ex) {
		include "collections/exercici_list_item.php";
	}
?>
</table>