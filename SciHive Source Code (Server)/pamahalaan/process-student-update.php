
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



if(isset($_POST['submit'])){
	$studenting=$db->prepare("UPDATE sci_students SET  s_ID = '$s_ID',  s_fname = '$s_fname',  s_lname = '$s_lname',  s_sname = '$s_sname',  s_bday = '$s_bday',  s_gender = '$s_gender',  s_uname = '$s_uname',  s_password = '$s_password',  s_section = '$s_section' WHERE s_ID = '$s_ID' ");

			$studenting->execute();






	header('location:teacherHUB.php');
}
 ?>

<!-- may error tayo sa registration pag doble primary key, kailangan ierror handling exception ek ek -->