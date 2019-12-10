<?php 
include_once('../connector.php');
session_start();
if(isset($_SESSION['teacher_account'])){
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

              .hoverer:hover {cursor: pointer;}

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

 

<?php

    $ohyeah = $_SESSION['xteacherID']; //gagamiting variable from session name ('WHERE' clause). . .
  
    $gumanakaha=$db->prepare("SELECT * FROM sci_teachers WHERE t_ID=:xteacherID");  //the query
    $gumanakaha->bindParam(':xteacherID',$ohyeah);  //importateng ibind muna yung variables para magamit sa querying
    $gumanakaha->execute(); //the go signal

    $waw=$gumanakaha->fetch(PDO::FETCH_ASSOC);  //importante to para ma output na yung laman ng database na tinawag sa query

   ?>









<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #ffc335; width: 100%; position: fixed; top: 0; left: 0">

  <h3 class="navbar-brand" style="font-weight: bold"> <img src="beebot.png" width="25px"> SciHive Teachers Portal</h3>

  <a class="hoverer" onclick="lalabas()" style="position: fixed;top: 15px; right: 10px; color: white; font-weight: bold;">  Logout <span style="transform: rotate(270deg);" class="el el-fw">&#xf145</span></a>                  

</nav>


 


<br><br><br><br>

     

<div style="background-color: rgb(0,161,255); padding: 20px; border: 5px outset orange; border-radius: 25px; margin: 10px" >

  <div class="row">


      <div class="col-md-3"> 
        <table>

            <tr>
              <td> <h6>Teacher: </h6> </td>
              <td> <h5 style="color: rgba(0,0,0,0);">lol</h5> </td>
              <td> <h5><?php echo $waw['t_fname'] . " " .  $waw['t_lname'] . " " . $waw['t_sname'] ?> </h5> </td>
            </tr>

            <tr>
              <td> <h6>ID number: </h6> </td>
              <td> <h5 style="color: rgba(0,0,0,0);">lol</h5> </td>
              <td> <h5><?php echo $waw['t_ID']?> </h5> </td>
            </tr>

            <!-- <tr>
              <td> <h6>Class Name: </h6> </td>
              <td> <h5 style="color: rgba(0,0,0,0);">lol</h5> </td>
              <td> <h5><?php echo  $waw['NameOfClass']  ?> </h5> </td>
            </tr> -->
        </table>
      </div>


<!-- 
      <a class="col-md-2 btn skwa"  style="color: white; margin: 5px; background-color: orangered; border-radius: 25px; border: 5px ridge orangered">
          <h1><?php echo  $waw['Tnumofstud']  ?></h1>

          <div style="bottom: 0; border-top: 1px solid white">
            <h4><i class="el el-fw jellyrice" >&#xf17c;</i> Students </h4>
          </div>
      </a>



      <a class="col-md-2 btn skwa"  style="color: white; margin: 5px; background-color: turquoise; border-radius: 25px; border: 5px ridge turquoise">
          <h1><?php echo  $waw['Tnumofonline']  ?></h1>

          <div style="bottom: 0; border-top: 1px solid white">
            <h4><i class="el el-fw jellyrice" >&#xf18c;</i> Logins </h4>
          </div>
      </a>


      <a class="col-md-2 btn skwa"  style="color: white; margin: 5px; background-color: orange; border-radius: 25px; border: 5px ridge orange">
          <h1><?php echo  "0"  ?></h1>

          <div style="bottom: 0; border-top: 1px solid white">
            <h4><i class="el el-fw jellyrice" >&#xf14b;</i> Messages </h4>
          </div>
      </a>



      <a class="col-md-2 btn skwa"  style="color: white; margin: 5px; background-color: violet; border-radius: 25px; border: 5px ridge violet">
          <h1><?php echo   "0" ?></h1>

          <div style="bottom: 0; border-top: 1px solid white">
            <h4><i class="el el-fw jellyrice" >&#xf20d;</i> Likes </h4>
          </div>
      </a> -->

  </div>

</div>



  <br>
<div style="background-color: rgb(0,161,255); padding: 10px; border: 5px outset orange; border-radius: 25px; margin: 10px" >



  <h3 style="width: 100%">
      <i class="el el-fw">&#xf17c;</i> My Students <small>(By Section)</small>
    <small>
       <a href="#" id="yay" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="el el-fw" style="color: white;font-size: 15pt">&#xf1d0;</a>
        <div class="dropdown-menu" aria-labelledby="yay" style="padding: 5px; width: 30%">

          <a class="btn btn-sm btn-success"><i class="el el-fw" style="color: white">&#xf1ca;</i></a> <?php echo "  = "  ?> Add New Student
          <br><br>
          <a class="btn btn-sm btn-warning"> <i class="el el-fw" style="color: white"> &#xf1fe; </i>  </a> <?php echo "  = "  ?> Show Student's Scores
          <br><br>
          <a class="btn btn-sm btn-info"> <i class="el el-fw" style="color: white"> &#xf19b; </i>  </a> <?php echo "  = "  ?> Show Student's Information
          <br><br>
          <a class="btn btn-sm btn-secondary"> <i class="el el-fw" style="color: white"> &#xf1da; </i>  </a> <?php echo "  = "  ?> Refresh Window
          <br><br>

          <div class="row" style="margin: 0 !important; padding: 0 !important">
            <div class="col">
              <b>Progress Points </b> - how much progress does the student has done in the game, talking to people, visiting places and doing activities etc. In game they can use it as money etc.
            </div>

            <div class="col">
              <img src="money.png" width="100%">
            </div>
          </div>

        </div>
    </small>

      <button class="btn btn-success btn-sm" style="float: right;margin-bottom: 10px" data-toggle="modal" data-target="#signupmodal"><i class="el el-fw">&#xf1ca;</i></button>

      <button onclick="location.reload()" class="btn btn-secondary btn-sm" style="float: right;margin-bottom: 10px; margin-right: 5px"><i class="el el-fw">&#xf1da;</i></button>

  </h3>





  <table class="table table-sm table-hover" style="background-color: white">

        <tr style="background-color: lightyellow">
            <th>Student ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Section</th>
            <th>Progress Points</th>
            <th>Action</th>
        </tr>





  



          <?php

              require_once('../connector.php');
              $stmt = $db->prepare("SELECT * FROM sci_students WHERE s_teacher=:xteacherID ORDER BY s_section ASC");
              $stmt->bindParam(':xteacherID',$ohyeah); //ginamit ko parin yung sa session para mafilter students
              $stmt->execute();

              foreach($stmt as $studidents) { 
          ?>

          <tr>

              <td><?=$studidents['s_ID']?></td>

              <td><?=$studidents['s_fname'] . " "  . $studidents['s_lname'] . " " . $studidents['s_sname'] ?> </td>

              <td> <?=$studidents['s_gender']?> </td>

              <td> <?=$studidents['s_section']?> </td>

              <td> <?=$studidents['s_GP']?> </td>

              <td>
                <a href="score_charts.php?id=<?=$studidents['s_ID']?>" class="btn btn-sm btn-warning" style="color: white"><i class="el el-fw"> &#xf1fe; </i>  </a>
                <a href="student-details.php?id=<?=$studidents['s_ID']?>" class="btn btn-sm btn-info"><i class="el el-fw"> &#xf19b; </i>  </a>
              </td>

          </tr>

        <?php } ?>

  </table>

</div>






































<!-- student register modal ------------------------------------------------ -->
  <div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" arialabelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">

      <form action="process-student-register.php" method="POST" style="background-color: #ffc335;border: 5px outset orange; padding: 10px; border-radius: 25px;">

      <div class="modal-content" style="background-color: rgb(0,161,255);">


        <br>
        <center>
          <h1 style="color: white; margin-top: 10px"> <i class="el el-fw">&#xf131</i> Student Registration </h1>
        </center>



      <div class="modal-body" style="background-color: rgb(0,161,255);">

 
        <br>

<div class="form-group">
      <label for="s_ID">ID No.</label><input type="text" name="s_ID" id="s_ID"  class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px"/>
</div>

<div class="form-group">
      <label for="s_fname">First Name</label><input type="text" name="s_fname" id="s_fname"  class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px"/>
</div>

<div class="form-group">
      <label for="s_lname">Last Name</label><input type="text" name="s_lname" id="s_lname"  class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px"/>
</div>

<div class="form-group">
      <label for="s_sname">Suffix Name</label><input type="text" name="s_sname" id="s_sname"  class="form-control" style="border: 1px solid orange; border-radius: 10px"/>
</div>

<div class="form-group">
      <label for="s_bday">Birthday</label><input type="date" name="s_bday" id="s_bday"  class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px"/>
</div>

<div class="form-group">
      <label for="s_gender">Gender</label><select name="s_gender" id="s_gender" class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      </select>
</div>

<div class="form-group">
      <label for="s_uname">User Name</label><input type="text" name="s_uname" id="s_uname"  class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px"/>
</div>

<div class="form-group">
      <label for="s_password">Password</label><input type="password" name="s_password" id="s_password"  class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px"/>
</div>

<div class="form-group">
      <label for="s_section">Section</label><input type="text" name="s_section" id="s_section"  class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px"/>
</div><br>

<div class="form-group" hidden="hidden">
      <label for="s_teacher">Section</label><input type="text" name="s_teacher" id="s_teacher"  class="form-control" required="required" value="<?php echo $ohyeah ?>" />
</div><br>

      <center><div class="form-group">
        <input type="checkbox" required="required" style="border: 2px solid orange;"> I agree to the <a href="" style="color: white"> <u> Terms and Data Use Policy </u> </a>.
      </div></center>



         <center>

        <button style="width: 45%; color: white; font-size: 15pt; font-weight: bold; box-shadow: 3px 3px 5px 1px rgba(10,10,10,.7);" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

        <button style="width: 45%; color: white; font-size: 15pt; font-weight: bold; box-shadow: 3px 3px 5px 1px rgba(10,10,10,.7);" type="submit" name="submit" class="btn btn-success"  onclick="return validate();">Register</button>

      </center>
  

        </div>

      </div>
    </form>
  </div>
</div>














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