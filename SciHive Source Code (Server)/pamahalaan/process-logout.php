
<?php
require_once('../connector.php');

session_start();
session_destroy();

//	$stmt = $db->prepare("UPDATE stats SET loggedin = loggedin - 1");
//	$stmt->execute();

header('location:index.php');

?>

