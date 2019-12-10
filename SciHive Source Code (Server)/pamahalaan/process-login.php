<?php

	require_once('../connector.php');

	$Tusername = $_POST['txtTemail'];
	$Tpassword = $_POST['txtTpassword'];


	$sql=$db->prepare("SELECT * FROM sci_teachers WHERE t_uname=:txtTemail AND t_password=:txtTpassword");
	$sql->bindParam(':txtTemail',$Tusername);
	$sql->bindParam(':txtTpassword',$Tpassword);
	$sql->execute();


	$wee=$sql->fetch(PDO::FETCH_ASSOC); /*ibabato ko kasi sa xteacher session yung teacher ID*/



	if($row=$sql->rowCount()<>0){
		session_start();
		$_SESSION['teacher_account']=true;

		$_SESSION['xteacherID']= $wee['t_ID']; /*galing sa table yung teacher ID*/


		//PANG UPDATE KO NG LAST LOGIN -----------------------------------------------------------------------------------------
	$tID = $wee['t_ID'];
	$nowDate = date('Y-m-d H:i:s');
	$lastLogin = $db->prepare("UPDATE sci_teachers SET t_lastlogin = :sNOW WHERE t_ID=:tID");
			$lastLogin->bindParam(':sNOW',$nowDate);
			$lastLogin->bindParam(':tID',$tID);
			$lastLogin->execute();


		header('location:teacherHUB.php');
	}else{
		header('location:login-BAD.php');
	}



?>

