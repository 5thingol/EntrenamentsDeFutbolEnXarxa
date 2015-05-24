<?php
include_once "../common/header.php";
?>

<form name="editexercici" action="../post/submit.exercici.php" method="POST">
	Nom de l'exercici
	<input type="text" name="nom">
	<br>
	<br>
	Continguts
	<?php
	include_once "../inc/class.exercici.inc.php";
	$checkbox = "
	<input type=\"checkbox\" name=\"";
	echo "<br>Tecnics";
	foreach (Exercici::$TECNICS as $value) {
		$input = $checkbox . $value . "\" value=\"" . $value . "\">" . $value;
		echo $input;
	}
	echo "<br>Tactics";
	foreach (Exercici::$TACTICS as $value) {
		$input = $checkbox . $value . "\" value=\"" . $value . "\">" . $value;
		echo $input;
	}
	echo "<br>Fisics";
	foreach (Exercici::$FISICS as $value) {
		$input = $checkbox . $value . "\" value=\"" . $value . "\">" . $value;
		echo $input;
	}
	echo "<br><br>Edats";
	foreach (Exercici::$EDATS as $value) {
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

<?php
include_once "../common/footer.php";
?>
