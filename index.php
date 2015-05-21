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
include_once "postfunctions.php";
?>

<div id="content">
	<?php
	include_once "collections/exercicis_list.php";
?>
</div>

<?php include_once "common/footer.php" ?>
