<?php 
include_once('../connector.php');
session_start();
if(isset($_SESSION['teacher_account'])){
?>


<?php 

  require('../connector.php');

  $id=$_GET['id'];

  $sql=$db->prepare("SELECT * FROM sci_students WHERE s_ID=:XXID");
  $sql->bindParam(':XXID',$id);
  $sql->execute();
   
  $row=$sql->fetch(PDO::FETCH_ASSOC)

 ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Teachers Portal</title>


<!--   <link rel="stylesheet" href="../vendor/jquery.mobile-1.4.5.min.css" /> -->
  

  <script src="../vendor/jquery-1.11.1.min.js"></script>
  
  
  <link href="../vendor/bootstrap.min.css" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="../vendor/own.css">


  <link rel="stylesheet" type="text/css" href="../vendor/sweetalert.css">

  <link rel="stylesheet" type="text/css" href="../vendor/elusive-icons.css">
  




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

              html {height: 100%};
              body {height: 100%};

              .skwa:hover {border: 5px solid pink}

            </style>

<style>
/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url(../media/loader.gif) center no-repeat #fff;
}
</style>


<script type="text/javascript">
  //paste this code under the head tag or in a separate js file.
  // Wait for window load
  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
  
</script>


<script type="text/javascript">
  function lalabas() {
swal({
  title: "Logout ?",
  text: "Are you sure you want to exit?",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#ffc335",
  confirmButtonText: "Yeah!!",
  closeOnConfirm: false
},
function(){
  window.location = "process-logout.php";
});

  }
</script>





</head>

<body style="background-color: skyblue">

<div class="se-pre-con"></div> 







 <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #ffc335;">

  <a href="index.php" class="el el-fw" style="color: white; font-size: 20pt">&#xf188;</a>


              <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">  


                </ul>


              </div>
    </nav>


 




     

<div style="background-color: rgb(0,161,255); padding: 20px; border: 5px outset orange; border-radius: 25px; margin: 10px" >

  <div class="row">


      <div class="col"> 
          <h6>Student Name: </h6>
          <h3><?php echo $row['s_fname'] . " " .  $row['s_lname'] . " " . $row['s_sname'] ?> </h3>
      </div>


<!--       <div class="col"> 
          <h6>Stars Collected: </h6>
          <h3><i id="s3" class="el el-fw jellyrice" style="color: orange">&#xf1fe;</i><?php echo $row['starpoints'] ?> </h3>
      </div>

      <div class="col"> 
          <h6>Total Points: </h6>
          <h3><img src="../media/right.png" width="30px"> <?php echo $row['totalpoints'] ?> </h3>
      </div> -->


  </div>

</div>



<br>
<h2>Quiz Scores</h2>













<div style="background-color: #8277CE; padding: 25px; border: 5px outset orange; border-radius: 25px; margin: 10px">

  <h4>General Science</h4>

    <table class="table table-sm table-hover" style="background-color: white">

            <tr style="background-color: lightyellow">
                <th>Score</th>
                <th>Date</th>
            </tr>

            <?php

              $s_science=$db->prepare("SELECT * FROM sci_scores WHERE score_student_ID='$id' AND score_game = 'quiz_1'");
              $s_science->execute();
              foreach ($s_science as $s_scores) { ?>

            <tr>
              <td><?=$s_scores['score_actual']?></td>
              <td><?=$s_scores['score_date_time']?></td>
            </tr>

            <?php } ?>

    </table>
</div><br><br>













<div style="background-color:#00B355; padding: 25px; border: 5px outset orange; border-radius: 25px; margin: 10px">

  <h4>Matter</h4>

    <table class="table table-sm table-hover" style="background-color: white">

            <tr style="background-color: lightyellow">
                <th>Score</th>
                <th>Date</th>
            </tr>

            <?php

              $s_mat=$db->prepare("SELECT * FROM sci_scores WHERE score_student_ID='$id' AND score_game = 'quiz_2'");
              $s_mat->execute();
              foreach ($s_mat as $m_scores) { ?>

            <tr>
              <td><?=$m_scores['score_actual']?></td>
              <td><?=$m_scores['score_date_time']?></td>
            </tr>

            <?php } ?>

    </table>
</div><br><br>













<div style="background-color: #FF6161; padding: 25px; border: 5px outset orange; border-radius: 25px; margin: 10px">

  <h4>Living Things</h4>

    <table class="table table-sm table-hover" style="background-color: white">

            <tr style="background-color: lightyellow">
                <th>Score</th>
                <th>Date</th>
            </tr>

            <?php

              $s_LT=$db->prepare("SELECT * FROM sci_scores WHERE score_student_ID='$id' AND score_game = 'quiz_3'");
              $s_LT->execute();
              foreach ($s_LT as $LT_scores) { ?>

            <tr>
              <td><?=$LT_scores['score_actual']?></td>
              <td><?=$LT_scores['score_date_time']?></td>
            </tr>

            <?php } ?>

    </table>
</div><br><br>
















<div style="background-color: #00D8E7; padding: 25px; border: 5px outset orange; border-radius: 25px; margin: 10px">

  <h4>Force | Motion | Energy</h4>

    <table class="table table-sm table-hover" style="background-color: white">

            <tr style="background-color: lightyellow">
                <th>Score</th>
                <th>Date</th>
            </tr>

            <?php

              $s_FME=$db->prepare("SELECT * FROM sci_scores WHERE score_student_ID='$id' AND score_game = 'quiz_4'");
              $s_FME->execute();
              foreach ($s_FME as $FME_scores) { ?>

            <tr>
              <td><?=$FME_scores['score_actual']?></td>
              <td><?=$FME_scores['score_date_time']?></td>
            </tr>

            <?php } ?>

    </table>
</div><br><br>




















<div style="background-color: #F9F871; padding: 25px; border: 5px outset orange; border-radius: 25px; margin: 10px">

  <h4>Earth and Space</h4>

    <table class="table table-sm table-hover" style="background-color: white">

            <tr style="background-color: lightyellow">
                <th>Score</th>
                <th>Date</th>
            </tr>

            <?php

              $s_ES=$db->prepare("SELECT * FROM sci_scores WHERE score_student_ID='$id' AND score_game = 'quiz_5'");
              $s_ES->execute();
              foreach ($s_ES as $ES_scores) { ?>

            <tr>
              <td><?=$ES_scores['score_actual']?></td>
              <td><?=$ES_scores['score_date_time']?></td>
            </tr>

            <?php } ?>

    </table>
</div><br><br>

















   <!--  <script src="../vendor/jquery.mobile-1.4.5.min.js"></script> -->
    <script src="../vendor/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery.min.js"></script>
    <script src="../vendor/sweetalert.min.js"></script>
    <script src="../vendor/own.js"></script>
</body>

</html>


<?php
}else{
  header('location:index.php');
}
?> 