<?php

class Exercici {
	public static $TECNICS = array("Conducció", "Protecció", "Entrada", "Regat", "Control_orientat", "Passada", "Xut", "Centrada", "Remat_de_cap", "Rebuig");

	public static $TACTICS = array("Recolzament", "Marcatge", "Cobertura", "Desmarcada", "Ubicació_en_la_zona", "Amplitud", "Profunditat", "Crear_espais", "Ocupar_espais", "Pressing_individual", "Desdoblament_defensiu");

	public static $FISICS = array("Velocitat", "Resistència", "Força", "Flexibilitat");

	public static $EDATS = array("Escola", "Prebenjamí", "Benjamí", "Aleví", "Intantil", "Cadet", "Juvenil", "Senior");

	/**
	 * int, id unic de l'exercici
	 */
	public $ID;

	/**
	 * String, nom de l'exercici
	 */
	public $nom;

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

	public function __construct() {

		$this -> ID = NULL;
		$this -> nom = "";
		$this -> contingutsTecnics = array();
		$this -> contingutsTactics = array();
		$this -> contingutsFisics = array();
		$this -> edats = array();
		$this -> durada = 0;
		$this -> material = "";
		$this -> explicacio = "";
		$this -> consigna = "";
	}

	public function constructFromArray($array) {
		if (isset($array['IDex']))
			$this -> ID = $array['IDex'];
		else
			$this -> ID = NULL;
		$this -> nom = htmlspecialchars($array['nom']);
		foreach (self::$TECNICS as $value) {
			$this -> contingutsTecnics[$value] = isset($array[$value]);
		}
		foreach (self::$TACTICS as $value) {
			$this -> contingutsTactics[$value] = isset($array[$value]);
		}
		foreach (self::$FISICS as $value) {
			$this -> contingutsFisics[$value] = isset($array[$value]);
		}
		foreach (self::$EDATS as $value) {
			$this -> edats[$value] = isset($array[$value]);
		}
		$this -> durada = $array['durada'];
		if (isset($array['material']))
			$this -> material = $array['material'];
		$this -> explicacio = $array['explicacio'];
		if (isset($array['consigna']))
			$this -> consigna = $array['consigna'];
	}

	public function arrayToString($array) {
		$aux = array();
		foreach ($array as $key => $value) {
			if ($value)
				$aux[$key] = 1;
			else
				$aux[$key] = 0;
		}
		return implode(",", $aux);
	}

	public function exerciciToString() {
		$values = "\"" . $this -> nom . "\"";
		$values .= "," . $this -> arrayToString($this -> contingutsTecnics);
		$values .= "," . $this -> arrayToString($this -> contingutsTactics);
		$values .= "," . $this -> arrayToString($this -> contingutsFisics);
		$values .= "," . $this -> arrayToString($this -> edats);
		$values .= ',' . $this -> durada;
		$values .= ",\"" . $this -> material . "\"";
		$values .= ",\"" . $this -> explicacio . "\"";
		$values .= ",\"" . $this -> consigna . "\"";
		var_dump($values);
		return $values;
	}

	/**
	 * Selects for each value in $keys the value of $array and converts it from tynint to boolean
	 */
	public function stringToBoolArray($array, $keys) {
		$aux = array();
		foreach ($keys as $value) {
			$aux[$value] = $array[$value] == 1;
		}
		/*
		 $aux = explode(',', $string);
		 for ($i = 0; $i < count($keys); $i++) {
		 $array[$keys[$i]] = $aux[$i];
		 }*/
		return $aux;
	}

	public function rowToExercici($row) {
		$this -> ID = (int)$row['IDEx'];
		$this -> nom = $row['Nom'];
		$this -> contingutsTecnics = $this -> stringToBoolArray($row, self::$TECNICS);
		$this -> contingutsTactics = $this -> stringToBoolArray($row, self::$TACTICS);
		$this -> contingutsFisics = $this -> stringToBoolArray($row, self::$FISICS);
		$this -> edats = $this -> stringToBoolArray($row, self::$EDATS);
		$this -> durada = (int)$row['Durada'];
		$this -> material = $row['Material'];
		$this -> explicacio = $row['Explicacio'];
		$this -> explicacio = $row['Consigna'];

	}

}
?>