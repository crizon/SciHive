
<?php
    session_start();

    $UserName = $_SESSION["welcomename"];
    $firstName = $_SESSION["welcomename"];
    $ID_number = $_SESSION['Username'];
  ?>


<!DOCTYPE html>

<html style="background-color: black; height: 100%">
    <head>
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <title>SciHive</title>
        <style>
            html,body,button{height: 100%}
            .hyperX{height: 100%}
        </style>
        <script src="vendor/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="vendor/sweetalert2.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate.css">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="vendor/elusive-icons.css">
        <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="vendor/own.css">











        <!-- TO DISABLE SELECTING -->
            <style type="text/css">
              
            *
            {
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none; outline: none !important
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

            a{text-decoration: none !important;}

            .bgDark{background-color: #000000; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='hexagons' fill='%2329261c' fill-opacity='0.4' fill-rule='nonzero'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");}

            </style>

<script type="text/javascript">
        var student_ID = "<?php echo $ID_number ?>";
        localStorage.setItem("stud_ID", student_ID);

        var student_name = "<?php echo $firstName ?>";
        localStorage.setItem("stud_Name", student_name);
</script>


    </head>
    <body class="bgDark">




<div class="btn-warning" style="height: 55px; width: 100%;top: 0; right: 0;">
  <button style="float: left" class="btn btn-warning btn-sm" onclick="location.assign('../index.php')"> <h1> ◀ </h1> </button>
  <center><img src="quiz.png" width="50%" style="float: left"></center>
</div>

<br>
<center>
	<h6 style="color: white">Choose a category: </h6><br>

    <a href="Quiz_1/index.php">
        <div class="btn-warning" style="width: 90%; padding: 20px">
            <h2><i class="fas fa-fw fa-play-circle"> </i>Science</h2>
            <center>
                <img src="quiz_logo.png" width="25%">
            </center>
        </div>
    </a>
    <br>

    <a href="Quiz_2/index.php">
        <div class="btn-warning" style="width: 90%; padding: 20px">
            <h2><i class="fas fa-fw fa-play-circle"> </i>Matter</h2>
            <center>
                <img src="quiz_logo.png" width="25%">
            </center>
        </div>
    </a>
    <br>

    <a href="Quiz_3/index.php">
        <div class="btn-warning" style="width: 90%; padding: 20px">
            <h2><i class="fas fa-fw fa-play-circle"> </i>Living Things</h2>
            <center>
                <img src="quiz_logo.png" width="25%">
            </center>
        </div>
    </a>
    <br>

    <a href="Quiz_4/index.php">
        <div class="btn-warning" style="width: 90%; padding: 20px">
            <h3><i class="fas fa-fw fa-play-circle"> </i>Force Motion Energy</h3>
            <center>
                <img src="quiz_logo.png" width="25%">
            </center>
        </div>
    </a>
    <br>

    <a href="Quiz_5/index.php">
        <div class="btn-warning" style="width: 90%; padding: 20px">
            <h2><i class="fas fa-fw fa-play-circle"> </i>Earth and Space</h2>
            <center>
                <img src="quiz_logo.png" width="25%">
            </center>
        </div>
    </a>
    <br>



</center>







































        <script crossorigin type="text/javascript" src="vendor/sweetalert2.js"></script>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
