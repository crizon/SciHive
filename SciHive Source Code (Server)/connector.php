<?php

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "scihive";

try{
	$db = new PDO ("mysql:host={$host};dbname={$db_name}",$user,$pass);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
?> 











<!-- 
<?php

$host = "sql108.epizy.com";
$user = "epiz_24676459";
$pass = "3ru3m9BPMW";
$db_name = "epiz_24676459_scihive";

try{
	$db = new PDO ("mysql:host={$host};dbname={$db_name}",$user,$pass);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
?>  -->