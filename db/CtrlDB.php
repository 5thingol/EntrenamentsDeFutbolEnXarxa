<?php

//$root = $_SERVER['DOCUMENT_ROOT'];
$root = "/home/guillem/Dropbox/FIB/Quadri6/SLDS/EntrenamentsDeFutbolEnXarxa";
include_once $root . "/inc/class.exercici.inc.php";
include_once $root . "/inc/class.entrenament.inc.php";

include_once $root . "/utilities/constants.inc.php";

class CtrlDB {

	private $db;

	function __construct() {

		// Create a database object
		try {
			$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8";
			$this -> db = new PDO($dsn, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
			# We can now log any exceptions on Fatal error.
			$this -> db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			# Disable emulation of prepared statements, use REAL prepared statements instead.
			$this -> db -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		} catch (PDOException $e) {
			echo 'Connection failed: ' . $e -> getMessage();
			exit ;
		}

	}

	function getExercicis() {
		$stm = $this -> db -> prepare("SELECT * FROM " . TABLE_EXERCICIS);
		//$stm -> bindParam(':table', TABLE_EXERCICIS);
		//$stm -> bindParam(':ex', $ex -> ID);
		$stm -> execute();

		$exercicis = array();
		while ($row = $stm -> fetch(PDO::FETCH_ASSOC)) {
			$ex = new Exercici;
			$ex -> rowToExercici($row);
			$exercicis[] = $ex;
		}
		return $exercicis;
	}

	function getExercici($ID) {
		$stm = $this -> db -> prepare("SELECT * FROM " . TABLE_EXERCICIS . " WHERE IDex=" . $ID . ";");
		//$stm -> bindParam(':table', TABLE_EXERCICIS);
		//$stm -> bindParam(':ex', $ex -> ID);
		$stm -> execute();

		$row = $stm -> fetch(PDO::FETCH_ASSOC);
		$ex = new Exercici;
		$ex -> rowToExercici($row);
		return $ex;
	}

	function createDatabase() {
		try {
			$sql = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;
			// use exec() because no results are returned
			$this -> db -> exec($sql);
		} catch(PDOException $e) {
			echo $sql . "<br>" . $e -> getMessage();
		}
	}

	function createTables() {
		try {
			$tecnics = "";
			foreach (Exercici::$TECNICS as $value) {
				$tecnics .= $value . " boolean, ";
			}
			$tactics = "";
			foreach (Exercici::$TACTICS as $value) {
				$tactics .= $value . " boolean, ";
			}
			$fisics = "";
			foreach (Exercici::$FISICS as $value) {
				$fisics .= $value . " boolean, ";
			}
			$edats = "";
			foreach (Exercici::$EDATS as $value) {
				$edats .= $value . " boolean, ";
			}
			/*					Tecnics varchar(255),
			 Tactics varchar(255),
			 Fisics varchar(255),
			 Edats varchar(255),
			 */
			$sql = "CREATE TABLE IF NOT EXISTS " . TABLE_EXERCICIS . "(IDEx int NOT NULL AUTO_INCREMENT PRIMARY KEY,
					Nom varchar(255) NOT NULL," . $tecnics . $tactics . $fisics . $edats . "
					Durada int NOT NULL,
					Material varchar(255),
					Explicacio varchar(255),
					Consigna varchar(255)
					)";
			// use exec() because no results are returned
			$this -> db -> exec($sql);

			//$sql = "CREATE TABLE IF NOT EXISTS " . TABLE_ENTRENAMENTS;
			//$this -> db -> exec($sql);
		} catch(PDOException $e) {
			echo $sql . "<br>" . $e -> getMessage();
		}
	}

	function exerciciExists($ex) {
		if (!isset($ex -> ID))
			return False;
		$stm = $this -> db -> prepare("SELECT * FROM " . TABLE_EXERCICIS . " WHERE IDex=" . $ex -> ID . ';');
		//$stm -> bindParam(':table', TABLE_EXERCICIS, PDO::PARAM_STR, 12);
		//$stm -> bindParam(':ex', $ex -> ID, PDO::PARAM_INT);
		$stm -> execute();
		return count($stm -> fetchAll()) != 0;
	}

	function addOrUpdateExercici($ex) {
		if ($this -> exerciciExists($ex)) {
			// UPDATE
			echo "update";
		} else {
			// INSERT
			$sql = "INSERT INTO " . TABLE_EXERCICIS . " VALUES (NULL," . $ex -> exerciciToString() . ");";
		}
		try {
			// use exec() because no results are returned
			$this -> db -> exec($sql);
		} catch(PDOException $e) {
			echo $sql . "<br>" . $e -> getMessage();
		}
	}

}
?>