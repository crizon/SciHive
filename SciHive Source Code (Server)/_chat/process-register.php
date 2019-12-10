
 <?php  
require_once('../connector.php');


$sentMessage = $_POST['xSentMessage'];
$sender = $_POST['xSender'];
	


	/*header('location:index.php');*/


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
        $teachering=$db->prepare("INSERT INTO sci_convo(convo_user,convo_content,convo_date_time) VALUES(:Zsender,:ZsentMessage,now())");
			
			$teachering->bindparam(':Zsender',$sender);
			$teachering->bindparam(':ZsentMessage',$sentMessage);
			$teachering->execute();

		header('location:index.php');
    }
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        /*echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";*/


        $uploaded_file = "uploads/" . basename($_FILES["fileToUpload"]["name"]);

        $teachering=$db->prepare("INSERT INTO sci_convo(convo_user,convo_content,convo_date_time,convo_loc) VALUES(:Zsender,:ZsentMessage,now(),:ZuploadedFile)");
			
			$teachering->bindparam(':Zsender',$sender);
			$teachering->bindparam(':ZsentMessage',$sentMessage);
			$teachering->bindparam(':ZuploadedFile',$uploaded_file);
			$teachering->execute();

		header('location:index.php');

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>