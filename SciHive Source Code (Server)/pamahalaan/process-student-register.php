<?php  
require_once('../connector.php');

 

$s_ID = $_POST['s_ID'];  
$s_fname = $_POST['s_fname'];  
$s_lname = $_POST['s_lname'];  
$s_sname = $_POST['s_sname'];  
$s_bday = $_POST['s_bday'];  
$s_gender = $_POST['s_gender'];  
$s_uname = $_POST['s_uname'];  
$s_password = $_POST['s_password'];  
$s_section = $_POST['s_section'];
$s_teacher = $_POST['s_teacher'];


if(isset($_POST['submit'])){
	$studenting=$db->prepare("INSERT INTO sci_students ( s_ID, s_fname, s_lname, s_sname, s_bday, s_gender, s_uname, s_password, s_section, s_teacher )  VALUES ( '$s_ID', '$s_fname', '$s_lname', '$s_sname', '$s_bday', '$s_gender', '$s_uname', '$s_password', '$s_section', '$s_teacher')");

			$studenting->execute();



/*	$xwxwxw = $db->prepare("UPDATE teachers SET Tnumofstud = Tnumofstud + 1");
	$xwxwxw->execute();*/

	header('location:registration-student-GOOD.php');
}else{
	header('location:registration-BAD.php');
}
 ?>

<!-- may error tayo sa registration pag doble primary key, kailangan ierror handling exception ek ek -->