<?php

class User {

	/**
	 * Contains the database object
	 */
	private $_db;

	public function __create($db = NULL) {
		if (is_object($db)) {
			$this -> _db = $db;
		} else {
			$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
			$this -> _db = new PDO($dsn, DB_USER, DB_PASS);
		}
	}

}
?>