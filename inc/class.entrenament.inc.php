<?php 

include_once "class.exercici.inc.php";

class Entrenament {
	
	/**
	 * String, equip on es fara l'entrenament
	 */
	public $equip;
	
	/**
	 * int, categoria on es fara l'entrenament
	 */
	public $categoria;
	
	/**
	 * String, temporada en la que es fara l'entrenament
	 */
	public $temporada;
	
	/**
	 * String, data en la que es fara l'entrenament
	 */
	public $data;
	
	/**
	 * String, macrocicle dins del qual es fara l'entrenament
	 */
	public $macrocicle;
	
	/**
	 * String, mesocicle dins del qual es fara l'entrenament
	 */
	public $mesocicle;
	
	/**
	 * String, microcicle dins del qual es fara l'entrenament
	 */
	public $microcicle;
	
	/**
	 * String, objectius de l'entrenament
	 */
	public $objectius;
	
	/**
	 * String, material que es necessitara per l'entrenament
	 */
	public $material;
	
	/**
	 * Llista ordenada d'exercicis que es realitzaran a la primera part de l'entrenament
	 */
	public $exercicis1;
	
	/**
	 * Llista ordenada d'exercicis que es realitzaran a la segona part de l'entrenament
	 */
	public $exercicis2;
}

?>