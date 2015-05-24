<?php
// Start a PHP session
session_start();

include_once "common/header.php";
include_once "common/titlebar.php";
include_once "common/menubar.php";

include_once "db/CtrlDB.php";

$ctrlDB = new CtrlDB;
$ctrlDB -> createDatabase();
$ctrlDB -> createTables();

// Mostrar tab adequada
if(isset($_GET['t']) && $_GET['t'] == "elsmeusentrenaments") 
	include_once "tabs/tab.my.entrenaments.php";
else if(isset($_GET['t']) && $_GET['t'] == "elsmeusexercicis")
	include_once "tabs/tab.my.exercicis.php";
else 
	include_once "tabs/tab.all.exercicis.php";

include_once "common/footer.php" ?>
