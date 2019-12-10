<?php 
include_once('../connector.php');
session_start();
if(isset($_SESSION['teacher_account'])){
  header('location:teacherHUB.php');}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CCKLH TEACHER</title>

<!--   <link rel="stylesheet" href="../vendor/jquery.mobile-1.4.5.min.css" /> -->
  <script src="../vendor/jquery-1.11.1.min.js"></script>
<!--   <script src="../vendor/jquery.mobile-1.4.5.min.js"></script> -->

  
  <link href="../vendor/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="../vendor/own.css">
  
  <script src="../vendor/own.js"></script>
  <link rel="stylesheet" type="text/css" href="../vendor/sweetalert.css">
  <script src="../vendor/sweetalert.min.js"></script>
  

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



            <script>
                function validate(){

                    var a = document.getElementById("t_password").value;
                    var b = document.getElementById("t_confirm").value;
                    if (a!=b) {
                       alert("Passwords do no match");
                       return false;
                    }
                }
             </script>


</head>

<body style="background-image: linear-gradient(to top, rgb(0, 161, 255) 0%, beige 100%)">

    <!-- Header -->
    <header style="z-index: 5;padding: 1px;width: 100%;top: 0;position: fixed;background-color: rgb(255,195,53);">
      <img src="BEEBOT.png" width="25px">
    </header>



<br>

            <div class="container-fluid" style="background-image: linear-gradient(to top, rgb(0, 161, 255) 0%, beige 100%)">
              <div class="row">

                <div class="col-md-7">
                  <br><br>
                  <img class="bootboot" src="SciHive.png" width="100%">
                  <br><br>
                  <center>
                    <h1 style="color: white" class="bootboot">TEACHERS PORTAL</h1>
                  </center>
                </div>

                
                  <div class="col-md-4" style="background-color: rgb(0,161,255);margin: 25px;border: 5px outset orange; padding: 25px; border-radius: 25px; box-shadow: 10px 10px 15px 2px rgba(0,0,0,.9);">

                    <form action="process-login.php" method="POST">
                          
            		        <div class="form-group">
                          <center>
                            <img style="border: 5px outset orange" src="../media/admin.png" class="jellyrice rounded-circle img-thumbnail" width="200" alt="Teacher Photo" />
                            <br><br>
                            <h3 style="color: white">Teacher Account</h3>
                            
                          </center>
                        </div>
                    


                          <center>
                          <div class="form-group">
                           <input style="border: 1px solid orange; width: 90%; border-radius: 10px" type="text" class="form-control input-md" placeholder="Email" name="txtTemail">
                          </div>

                          <div class="form-group">
                            <input style="border: 1px solid orange; width: 90%; border-radius: 10px" type="password" class="form-control input-md" placeholder="Password" name="txtTpassword">
                          </div>

                        <br>
                          
                          <button style="width: 45%; color: white; font-size: 15pt; font-weight: bold; box-shadow: 3px 3px 5px 1px rgba(10,10,10,.7);" type="submit" class="btn btn-warning btn-md btn">Sign In</button>

                          <a style="width: 45%; color: white; font-size: 15pt; font-weight: bold; box-shadow: 3px 3px 5px 1px rgba(10,10,10,.7);"  class="btn btn-success btn-md btn" data-toggle="modal" data-target="#signupmodal">Sign Up</a>
 
                          </center>

                    </form>
                  </div>
              </div>
              <br><br><br><br><br><br><br>
            </div>
         





















<!-- sign-up modal ------------------------------------------------ -->
  <div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" arialabelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">

      <form action="process-register.php" method="POST" style="background-color: #ffc335;border: 5px outset orange; padding: 10px; border-radius: 25px;">

      <div class="modal-content" style="background-color: rgb(0,161,255);">


        <br>
        <center>
          <h1 style="color: white"> Sign Up </h1>
        </center>



      <div class="modal-body" style="background-color: rgb(0,161,255);">


        <br>

<div class="form-group">
  <label for="t_ID">ID No.</label><input type="text" name="t_ID" id="t_ID" class="form-control" required="required"  style="border: 1px solid orange; border-radius: 10px"/>
</div>

<div class="form-group">
  <label for="t_fname">First Name</label><input type="text" name="t_fname" id="t_fname" class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px"/>
</div>

<div class="form-group">
  <label for="t_lname">Last Name</label><input type="text" name="t_lname" id="t_lname" class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px"/>
</div>

<div class="form-group">
  <label for="t_sname">Suffix Name</label><input type="text" name="t_sname" id="t_sname" class="form-control" style="border: 1px solid orange; border-radius: 10px"/>
</div>

<div class="form-group">
<label for="t_gender">Gender</label><select name="t_gender" id="t_gender" class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px">
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>

<div class="form-group">
  <label for="t_uname">User Name</label><input type="text" name="t_uname" id="t_uname" class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px"/>
</div>

<div class="form-group">
  <label for="t_password">Password</label><input type="password" name="t_password" id="t_password" class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px"/>
</div>

<div class="form-group">
  <label for="t_confirm">Confirm Password</label><input type="password" name="t_confirm" id="t_confirm" class="form-control" required="required" style="border: 1px solid orange; border-radius: 10px"/>
</div>




         <center>

        <button style="width: 45%; color: white; font-size: 15pt; font-weight: bold; box-shadow: 3px 3px 5px 1px rgba(10,10,10,.7);" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

        <button style="width: 45%; color: white; font-size: 15pt; font-weight: bold; box-shadow: 3px 3px 5px 1px rgba(10,10,10,.7);" type="submit" name="submit" class="btn btn-success"  onclick="return validate();">Register</button>

      </center>
 

      </div>







      </div>
      </form>
    </div>
  </div>












<div style="background-color: black">


<center><br><br><br><br>

                    <h1 style="color: white">Register now! And have your students enjoy the awesome quizzes!</h1>

<br><br><br>

<div class="hoho" style="width: 350px; background-image: url(bulbol.png); background-repeat: no-repeat; background-size: 100%"> 
      <br>
      <div class='eye' style="margin-top: 25px"></div>
      <div class='eye2' style="margin-top: 25px; margin-right: -15px"></div>
      <br><br>
      <div class='mouth' style="margin-left: 5px"></div>
      <br><br><br><br><br>
</div>

</center><br><br><br><br>






<script src="x.js"></script>
<script  src="index.js"></script>
<link rel="stylesheet" href="style.css">
</div>




















    <!-- Footer -->
    <footer style="padding: 5px;width: 100%;bottom: 0;background-color: rgb(255,195,53);">

      <center>
      <a href="https://facebook.com"><img src="../media/fb.png" class="icon" style="width: 35px;margin-bottom: 5px"></a>
      <a href="https://facebook.com"><img src="../media/sc.png" class="icon" style="width: 35px;margin-bottom: 5px"></a>
      <a href="https://facebook.com"><img src="../media/yt.png" class="icon" style="width: 35px;margin-bottom: 5px"></a>
      <a href="https://facebook.com"><img src="../media/t.png" class="icon" style="width: 35px;margin-bottom: 5px"></a>
      <a href="https://facebook.com"><img src="../media/g+.png" class="icon" style="width: 35px;margin-bottom: 5px"></a>
      <a href="https://facebook.com"><img src="../media/i.png" class="icon" style="width: 35px;margin-bottom: 5px"></a>
      </center>

      <p class="m-0 text-center text-white small"> &copy; crzn.io | All Rights Reserved 2019</p>

    </footer>


<style>
  .icon:hover{opacity:.5;box-shadow: 0px 1px 5px 5px orange;border-radius: 100%;}
</style>






    <script src="../vendor/bootstrap.bundle.min.js"></script>

</body>
</html>





