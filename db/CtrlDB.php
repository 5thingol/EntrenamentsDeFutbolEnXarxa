<?php

include_once "class.exercici.inc.php";

function getExercicis() {
	$ex1 = new Exercici();
	$ex2 = new Exercici();
	$exercicis = array($ex1, $ex2);
	return $exercicis;
}
?>