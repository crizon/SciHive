<?php 

include_once('../connector.php');
session_start();
if(isset($_SESSION['account'])){
?>

<?php
    $UserName = $_SESSION["welcomename"];
  ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>The Way</title>

<!--   <link rel="stylesheet" href=" vendor/jquery.mobile-1.4.5.min.css" /> -->
  <script src=" vendor/jquery-1.11.1.min.js"></script>
<!--   <script src=" vendor/jquery.mobile-1.4.5.min.js"></script> -->

  
  <link href=" vendor/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href=" vendor/own.css">
  
  <script src=" vendor/own.js"></script>
  <link rel="stylesheet" type="text/css" href=" vendor/sweetalert.css">
  <script src=" vendor/sweetalert.min.js"></script>
  <script src="vendor/bootstrap-filestyle.min.js"></script>

            <!-- TO DISABLE SELECTING -->
            <style type="text/css">
              
            *
            {
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            }

            input
            {
            -webkit-user-select: auto !important;
            -khtml-user-select: auto !important;
            -moz-user-select: auto !important;
            -ms-user-select: auto !important;
            user-select: auto !important;
            }

            img { border: none; }

            button:focus {
              border: none;
              outline: none;
                }

              input:focus {
              border: none;
              outline: none;
                }

            </style>


</head>

<body style="background-color: beige">



         
<div class="btn-warning" style="height: 55px; width: 100%;top: 0; right: 0;">
  <button style="float: left" class="btn btn-warning btn-sm" onclick="location.assign('../index.php')"> <h1> ◀ </h1></button>
  <center><h3>Group Chat</h3></center>
</div>

<form action="process-register.php" method="post" enctype="multipart/form-data" style="background-color: #ffc335;border: 5px outset orange; padding: 10px;border-bottom-right-radius: 25px;border-bottom-left-radius: 25px;">

	<table style="width: 100%; background-color: white; border: 1px solid orange">
          <?php

              require_once('../connector.php');
              $stmt = $db->prepare("SELECT * FROM ( SELECT * FROM sci_convo ORDER BY convo_ID DESC LIMIT 20) sub ORDER BY convo_date_time ASC;");
              $stmt->execute();

              foreach($stmt as $studidents) { 
          ?>

          <tr>
              <td>

              	<span style="background-color: black; color: white; margin-right: 5px; border-radius: 10px; padding: 1px"><?=$studidents['convo_user']?>: </span>

              	<?=$studidents['convo_content']?>
              	<img src="<?=$studidents['convo_loc']?>" width="100%">

              </td>
          </tr>

        <?php } ?>

  </table><br>

    <center>

      <div class="form-group">
        <input type="text" name="xSentMessage" class="form-control" placeholder="Enter message here . . ." required="required" style="border: 1px solid orange; border-radius: 10px;height: 50px;" autocomplete="off" autofocus="autofocus">


        <!-- <input type="file" name="fileToUpload" id="fileToUpload" class="filestyle" style="width: 100%;"> -->



        <input type="text" name="xSender" class="form-control" required="required" hidden="hidden" value="<?php echo $UserName ?>">
      </div>


      <button style="width: 45%; color: white; font-size: 15pt; font-weight: bold; box-shadow: 3px 3px 5px 1px rgba(10,10,10,.7);" type="submit" name="submit" class="btn btn-success">➤</button>

    </center>
 
</form>

 



































    <script src=" vendor/bootstrap.bundle.min.js"></script>

</body>
</html>



<?php
}else{
  header('location:errorlogin.php');
}
?>   

