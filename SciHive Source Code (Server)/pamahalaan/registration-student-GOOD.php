
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EASY-Server Side Dragon</title>

  <link rel="stylesheet" href="../vendor/jquery.mobile-1.4.5.min.css" />
  

  <script src="../vendor/jquery-1.11.1.min.js"></script>
  
  
  <link href="../vendor/bootstrap.min.css" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="../vendor/own.css">


  <link rel="stylesheet" type="text/css" href="../vendor/sweetalert.css">
  




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
    function goodreg(){
    swal({
            title: "Congratulations!",
            text: "You just created an account for a student.\n\n\nRedirecting . . .",
            imageUrl: "right.png",
            showConfirmButton: false,
        })


    setTimeout(function(){
      window.location = "teacherHUB.php";
    },5000);
  }
</script>



</head>




<body onload="goodreg()">




















    <script src="../vendor/jquery.mobile-1.4.5.min.js"></script>
    <script src="../vendor/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery.min.js"></script>
    <script src="../vendor/sweetalert.min.js"></script>
</body>

</html>