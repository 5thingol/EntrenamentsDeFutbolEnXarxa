<?php
include_once "../common/session.start.php";
if (isset($_POST['afegir'])) {
	// Afegir exercici
	$_SESSION["POST"] = $_POST;
	header("location: ../forms/query.exercicis.php");
} else {
	// Entrenament submitted
	header("location: ../index.php");
}
exit ;
?>