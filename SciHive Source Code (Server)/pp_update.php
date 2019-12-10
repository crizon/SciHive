<?php

require_once('connector.php');

$userID = $_GET['uID'];
$userPP = $_GET['uPP'];

	$waw = $db->prepare("UPDATE sci_students SET s_GP=:moneyX WHERE s_ID =:uID ");
	$waw->bindParam(':uID',$userID);
	$waw->bindParam(':moneyX',$userPP);
	$waw->execute();

?>
