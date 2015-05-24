<?php

// Include site constants
include_once "utilities/constants.inc.php";

include_once "common/header.php";
include_once "common/titlebar.php";
include_once "common/menubar.php";

include_once "db/CtrlDB.php";

include_once "common/session.start.php";

$ctrlDB = new CtrlDB;
$ctrlDB -> createDatabase();
$ctrlDB -> createTables();

// Mostrar tab adequada
if (isset($_GET['t']) && $_GET['t'] == "elsmeusentrenaments") {
	$_SESSION['tab'] = 2;
	include_once "tabs/tab.my.entrenaments.php";
} else if(isset($_GET['t']) && $_GET['t'] == "elsmeusexercicis"){
	$_SESSION['tab'] = 1;
	include_once "tabs/tab.my.exercicis.php";
} else if (isset($_GET['t']) && $_GET['t'] == "totselsexercicis"){
	$_SESSION['tab'] = 0; 
	include_once "tabs/tab.all.exercicis.php";
} else if (isset($_SESSION['tab']) && $_SESSION['tab'] == 2) {
	include_once "tabs/tab.my.entrenaments.php";
} else if (isset($_SESSION['tab']) && $_SESSION['tab'] == 1) {
	include_once "tabs/tab.my.exercicis.php";
} else if (isset($_SESSION['tab']) && $_SESSION['tab'] == 0) {
	include_once "tabs/tab.all.exercicis.php";
}
include_once "common/footer.php" ?>
