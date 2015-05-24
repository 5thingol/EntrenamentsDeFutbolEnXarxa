<?php
include_once "../common/header.php";
?>

<form name="editexercici" action="../submit.exercici.php" method="POST">
	Nom de l'exercici
	<input type="text" name="nom">
	<br>
	<br>
	Continguts
	<?php
	include_once "../inc/class.exercici.inc.php";
	$ex = new Exercici;
	$checkbox = "
	<input type=\"checkbox\" name=\"";
	echo "<br>Tecnics";
	foreach ($ex->TECNICS as $value) {
		$input = $checkbox . $value . "\" value=\"" . $value . "\">" . $value;
		echo $input;
	}
	echo "<br>Tactics";
	foreach ($ex->TACTICS as $value) {
		$input = $checkbox . $value . "\" value=\"" . $value . "\">" . $value;
		echo $input;
	}
	echo "<br>Fisics";
	foreach ($ex->FISICS as $value) {
		$input = $checkbox . $value . "\" value=\"" . $value . "\">" . $value;
		echo $input;
	}
	echo "<br><br>Edats";
	foreach ($ex->EDATS as $value) {
		$input = $checkbox . $value . "\" value=\"" . $value . "\">" . $value;
		echo $input;
	}
	?>
	<br>
	Durada
	<input type="text" name="durada">
	minuts
	<br>
	Material
	<input type="text" name="material">
	<br>
	Explicació
	<br>
	<textarea name="explicacio" cols="60" rows="5"></textarea>
	<br>
	Consigna
	<br>
	<textarea name="consigna" cols="60" rows="5"></textarea>
	<br>
	<input type="submit" value="Guardar">
</form>
