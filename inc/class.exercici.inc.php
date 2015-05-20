<?php 

class Exercici {
	
	/**
	 * String, nom de l'exercici
	 */
	public $nom = "Quadrat";
	
	/**
	 * Llista de ints, fan referencia al vector de continguts tecnics
	 */
	public $contingutsTecnics;
	
	/**
	 * Llista de ints, fan referencia al vector de continguts tactics
	 */
	public $contingutsTactics;
	
	/**
	 * Llista de ints, fan referencia al vector de continguts de coordinacio
	 */
	public $contingutsCoordinacio;
	
	/**
	 * Llista de ints, fan referencia al vector de continguts de percepcio
	 */
	public $contingutsPercepcio;
	
	/**
	 * Llista de ints, fan referencia al vector de continguts fisics
	 */
	public $contingutsFisics;
	
	/**
	 * Vector de booleans, indica a quines edats esta orientat l'exercici. Posicions: [escola, prebenjami, benjami, alevi, infantil, cadet, juvenil, senior]
	 */
	public $edats;
	
	/**
	 * int, indica la durada en minuts de l'exercici
	 */
	public $durada;
	
	/**
	 * String, indica el material necessari per a realitzar l'exercici
	 */
	public $material;
	
	/**
	 * String, explicació de l'exercici
	 */
	public $explicacio;
	
	/**
	 * String, consigna de l'exercici
	 */
	public $consigna;	
}

?>