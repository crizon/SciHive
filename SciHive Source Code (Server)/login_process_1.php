
<?php
require_once('connector.php');

$username = $_GET['uname'];


$sql=$db->prepare("SELECT * FROM sci_students WHERE s_ID=:uname");
$sql->bindParam(':uname',$username);
$sql->execute();

$wee=$sql->fetch(PDO::FETCH_ASSOC);

$starring = $wee['s_fname'];

$section = $wee['s_section'];





if($row=$sql->rowCount()<>0){

	session_start();

	$_SESSION['account']=true;

	$_SESSION['welcomename'] = $starring;	// FIRST NAME
	$_SESSION['section'] = $section;		// SECTION
	$_SESSION['Username'] = $username;		// ID NUMBER




//PANG UPDATE KO NG LAST LOGIN -----------------------------------------------------------------------------------------
	$nowDate = date('Y-m-d H:i:s');
	$lastLogin = $db->prepare("UPDATE sci_students SET s_lastlogin = :sNOW WHERE s_ID=:sID");
			$lastLogin->bindParam(':sNOW',$nowDate);
			$lastLogin->bindParam(':sID',$username);
			$lastLogin->execute();





	header('location:index.php');
}

else{
			header('location:errorlogin.php');
	}



//                   localhost/sciserver/login_process_1.php?uname=16330006
?>
