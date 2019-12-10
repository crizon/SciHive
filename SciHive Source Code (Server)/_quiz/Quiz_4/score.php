<?php
require_once('../../connector.php');



if(!empty($_GET)){

	$game_name = "quiz_4";
	$score = $_GET["score"];
	$nameX = $_GET["name"];
	$IDX = $_GET["ID"];
	$dateX = date('Y-m-d H:i:s');

		$sql=$db->prepare("INSERT INTO sci_scores(score_game,score_actual,score_student_Name,score_student_ID,score_date_time)
			VALUES('$game_name', '$score', '$nameX', '$IDX', '$dateX')");
		$sql->execute();	
}
	header("location:../index.php");
?>