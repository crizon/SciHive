
<?php
require_once('connector.php');

$usernameX = $_GET['uname'];
$passwordX = $_GET['uPassword'];


$sql=$db->prepare("SELECT * FROM sci_students WHERE s_uname=:uname AND s_password=:upass");
$sql->bindParam(':uname',$usernameX);
$sql->bindParam(':upass',$passwordX);
$sql->execute();

$wee=$sql->fetch(PDO::FETCH_ASSOC);

$starring = $wee['s_fname'];
$section = $wee['s_section'];

$X_ID = $wee['s_ID'];



if($row=$sql->rowCount()<>0){

	session_start();

	$_SESSION['account']=true;

	$_SESSION['welcomename'] = $starring;	// FIRST NAME
	$_SESSION['section'] = $section;		// SECTION
	$_SESSION['Username'] = $X_ID;		// ID NUMBER




//PANG UPDATE KO NG LAST LOGIN -----------------------------------------------------------------------------------------
	$nowDate = date('Y-m-d H:i:s');
	$lastLogin = $db->prepare("UPDATE sci_students SET s_lastlogin = :sNOW WHERE s_ID=:sID");
			$lastLogin->bindParam(':sNOW',$nowDate);
			$lastLogin->bindParam(':sID',$X_ID);
			$lastLogin->execute();



	header('location:index.php');
}

else{
			header('location:errorlogin.php');
	}



?>

 