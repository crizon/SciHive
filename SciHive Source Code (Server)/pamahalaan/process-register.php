
<?php  
require_once('../connector.php');



$t_ID = $_POST['t_ID'];  
$t_fname = $_POST['t_fname'];  
$t_lname = $_POST['t_lname'];  
$t_sname = $_POST['t_sname'];  
$t_gender = $_POST['t_gender'];  
$t_uname = $_POST['t_uname'];  
$t_password = $_POST['t_password'];  


if(isset($_POST['submit'])){
	$teachering=$db->prepare("INSERT INTO sci_teachers ( t_ID, t_fname, t_lname, t_sname, t_gender, t_uname, t_password )  VALUES ( '$t_ID', '$t_fname', '$t_lname', '$t_sname', '$t_gender', '$t_uname', '$t_password' )");
			$teachering->execute();



	//$xwxwxw = $db->prepare("UPDATE dashboardesu SET TotalTeachers = TotalTeachers + 1");
	//$xwxwxw->execute();

	header('location:registration-GOOD.php');
}else{
	header('location:registration-BAD.php');
}

?>