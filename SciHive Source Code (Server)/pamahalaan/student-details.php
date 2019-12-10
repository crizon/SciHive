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
  <title>EASY-Server Side Dragon</title>

<!--   <link rel="stylesheet" href="../vendor/jquery.mobile-1.4.5.min.css" /> -->
  

  <script src="../vendor/jquery-1.11.1.min.js"></script>
  
  
  <link href="../vendor/bootstrap.min.css" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="../vendor/own.css">


  <link rel="stylesheet" type="text/css" href="../vendor/sweetalert.css">

  <link rel="stylesheet" type="text/css" href="../vendor/elusive-icons.css">
  




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

<body style="background-image: url(../media/loader.gif);background-size: 20%">

<div class="se-pre-con"></div> 

 





<div style="background-color: rgba(0,0,0,.8);">
 <a href="index.php" style="color: white; font-size: 20pt; position: fixed; left: 15px; top: 15px">Cancel</a>
      <center>
      <!-- edit student ------------------------------------------------ -->
      <div class="col-md-4" style="width:100%;">
        
        <form action="process-student-update.php" method="POST" style="background-color: #ffc335;border: 5px outset orange; padding: 10px; border-radius: 25px;">

            <div class="modal-content" style="background-color: rgb(0,161,255);">


              <br>
              <center>
                <h1 style="color: white"> <i class="el el-fw">&#xf131</i> Student Information </h1>
              </center>



            <div class="modal-body" style="background-color: rgb(0,161,255);">


              <br>


            <div class="form-group">
              <input type="hidden" name="s_ID" value="<?=$id?>">
              <label for="s_ID">ID No.</label><input type="text" name="s_ID" id="s_ID" class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px" disabled="disabled" value="<?=$id?>">
            </div><br>

            <div class="form-group">
              <label for="s_fname">First Name</label><input type="text" name="s_fname" id="s_fname" class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px" value="<?=$row['s_fname'] ?>"/>
            </div><br>

            <div class="form-group">
              <label for="s_lname">Last Name</label><input type="text" name="s_lname" id="s_lname" class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px" value="<?=$row['s_lname'] ?>"/>
            </div><br>

            <div class="form-group">
              <label for="s_sname">Suffix Name</label><input type="text" name="s_sname" id="s_sname" class="form-control" style="border: 1px solid orange; border-radius: 10px" value="<?=$row['s_sname'] ?>"/>
            </div><br>

            <div class="form-group">
              <label for="s_bday">Birthday</label><input type="date" name="s_bday" id="s_bday" class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px" value="<?=$row['s_bday'] ?>"/>
            </div><br>

<!--             <div class="form-group">
              <label for="s_gender">Gender</label><input type="text" name="s_gender" id="s_gender" class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px" value="<?=$row['s_gender'] ?>"/>
            </div><br> -->

            <div class="form-group">
                  <label for="s_gender">Gender</label><select name="s_gender" id="s_gender" class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px" value="<?=$row['s_gender'] ?>">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  </select>
            </div><br>

            <div class="form-group">
              <label for="s_uname">User Name</label><input type="text" name="s_uname" id="s_uname" class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px" value="<?=$row['s_uname'] ?>"/>
            </div><br>

            <div class="form-group">
              <label for="s_password">Password</label><input type="text" name="s_password" id="s_password" class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px" value="<?=$row['s_password'] ?>"/>
            </div><br>

            <div class="form-group">
              <label for="s_section">Section</label><input type="text" name="s_section" id="s_section" class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px" value="<?=$row['s_section'] ?>"/>
            </div><br>



            <center>

              <a onclick="deleteX()" style="width: 45%; color: white; font-size: 15pt; font-weight: bold; box-shadow: 3px 3px 5px 1px rgba(10,10,10,.7);" class="btn btn-danger"> <i class="el el-fw">&#xf213;</i> Delete </a>

              <button style="background-color: rgba(0,0,0,0); border-color: rgba(0,0,0,0);" type="submit" id="submeet" name="submit" ></button>

              <a onclick="updateX()" style="width: 45%; color: white; font-size: 15pt; font-weight: bold; box-shadow: 3px 3px 5px 1px rgba(10,10,10,.7)"  class="btn btn-success"> <i class="el el-fw">&#xf1b3;</i> Save</a>

              

            </center>
       

              </div>

            </div>
          </form>

      </div>
      </center>
</div>

<a id="bubura" href="process-student-delete.php?idx=<?=$id?>" style="background-color: rgba(0,0,0,0); border-color: rgba(0,0,0,0);"></a>


<script type="text/javascript">
    function updateX(){

        swal({
          title: "Save changes?",
          type: "info",
          showCancelButton: true,
          confirmButtonColor: "#29a746",
          confirmButtonText: "Yeah!",
          closeOnConfirm: false
        },
        function(){
          swal({ title: "Saved!", showConfirmButton: false });
          var button = document.getElementById("submeet");
          button.click();
        });
          
    }
</script>


<script type="text/javascript">
    function deleteX(){

        swal({
          title: "Delete Account?",
          text: "You cannot undo this action, are you sure?",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#dc3646",
          confirmButtonText: "Yes, delete it!",
          closeOnConfirm: false
        },
        function(){
          swal({ title: "Deleted!", showConfirmButton: false });
          var delbut = document.getElementById("bubura");
          delbut.click();
        });
          
    }
</script>

















   <!--  <script src="../vendor/jquery.mobile-1.4.5.min.js"></script> -->
    <script src="../vendor/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery.min.js"></script>
    <script src="../vendor/sweetalert.min.js"></script>
    <script src="../vendor/own.js"></script>
</body>

</html>