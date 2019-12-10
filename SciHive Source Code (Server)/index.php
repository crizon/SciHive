<?php 

include_once('connector.php');
session_start();
if(isset($_SESSION['account'])){
?>

<?php
    $UserName = $_SESSION["welcomename"];
    $firstName = $_SESSION["welcomename"];
    $ID_number = $_SESSION['Username'];
  ?>



<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.11.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/beebot-122x122.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link href="assets/fonts/style.css" rel="stylesheet">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  <style type="text/css">
  	.bgDark{background-color: #000000; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='hexagons' fill='%2329261c' fill-opacity='0.4' fill-rule='nonzero'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");}
    .icons{border-radius: 5px!important}
  </style>

<script type="text/javascript">
        var student_ID = "<?php echo $ID_number ?>";
        localStorage.setItem("stud_ID", student_ID);

        var student_name = "<?php echo $firstName ?>";
        localStorage.setItem("stud_Name", student_name);
</script>




</head>





<body class="bgDark">

<br>


<!--   <section class="menu cid-rF1Sxo7O9m" once="menu" id="menu1-1">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
       <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="#">
                         <img src="assets/images/beebot-122x122.png" alt="SciHive" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-5" href="#">
                        SciHive Online</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">



            	<li class="nav-item">
                    <a class="nav-link link text-white display-4" href="#">
                        <span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>
                        Logout
                    </a>
                </li>

            	<li class="nav-item">
                    <a class="nav-link link text-white display-4" href="#">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="#">
                        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        About Us
                    </a>
                </li>

            </ul>
            
        </div>
    </nav>
</section> -->




	<div class="container">

		<div class="row" style="margin: 0 !important; padding: 0 !important">

			<div class="col icons" style="margin: 5px; background-color: orange;">
				<a href="_chat/index.php">
                    <img src="img/ico1.png" width="100%">
                    <pre style="margin: 0!important;padding: 0!important; background-color: orange !important"><center>Chat</center></pre>
                </a>
			</div>

			<div class="col icons" style="margin: 5px; background-color: orange;">
				<a href="_ranks/index.php">
                    <img src="img/ico2.png" width="100%">
                    <pre style="margin: 0!important;padding: 0!important; background-color: orange !important"><center>Scores</center></pre>
                </a>
			</div>

			<div class="col icons" style="margin: 5px; background-color: orange;">
				<a href="_quiz/index.php">
                    <img src="img/ico3.png" width="100%">
                    <pre style="margin: 0!important;padding: 0!important; background-color: orange !important"><center>Quiz</center></pre>
                </a>
			</div>

		</div><br>

		<div class="row" style="margin: 0 !important; padding: 0 !important">

			<div class="col icons" style="margin: 5px; background-color: orange;">
				<a href="_beebot/index.php">
                    <img src="img/ico4.png" width="100%">
                    <pre style="margin: 0!important;padding: 0!important; background-color: orange !important"><center>Chat Bot</center></pre>
                </a>
			</div>

			<div class="col icons" style="margin: 5px; background-color: orange;">
				<a href="_videos/index.php">
                    <img src="img/ico5.png" width="100%">
                    <pre style="margin: 0!important;padding: 0!important; background-color: orange !important"><center>Videos</center></pre>
                </a>
			</div>

			<div class="col icons" style="margin: 5px; background-color: orange;">
				<img src="img/ico6.png" width="100%">
                <pre style="margin: 0!important;padding: 0!important; background-color: orange !important"><center>Web</center></pre>
			</div>

		</div>

	</div>
<br>





<section class="engine"></section><section class="mbr-gallery gallery5 cid-rF1UNSstr8" id="gallery5-x">

    <div class="container">
        <h3 class="mbr-section-title align-center mbr-fonts-style display-2">
            Hello <?php  echo $UserName; ?>
        </h3>
        <h4 class="mbr-section-subtitle align-center pb-4 mbr-fonts-style display-5">
            Many Fun Activities with SciHive.
        </h4>
        

            <a href="https://animalinyou.com/#test" target="_blank" style="color: black">
                <img class="w-100" src="assets/images/background1.jpg">
                The Animal in You
            </a><br><br>
            
            <a href="https://play.howstuffworks.com/quiz/which-element-are-you" target="_blank" style="color: black">
                <img class="w-100" src="assets/images/background2.jpg">
                Which Element are you?
            </a><br><br>

            <a href="https://youtu.be/xctlaTmJ_zQ" target="_blank" style="color: black">    
                <img class="w-100" src="assets/images/background3.jpg">
                Science Experiments You Haven't Seen
            </a><br><br>

            <a href="https://science.sciencemag.org/" target="_blank" style="color: black">    
                <img class="w-100" src="assets/images/background4.jpg">
                Science Magazines
            </a><br><br>
    </div>
</section>

<!-- FACEBOOK PAGE NAME -->

<?php 
    $fb_page = "https://www.facebook.com/SciHive-1682859158525543"
?>


<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=309155756670591&autoLogAppEvents=1"></script>

<div style="width: 100%; background-color: #eeeff1">
    <center>
        <div class="fb-page" data-href="<?php echo $fb_page ?>" data-tabs="timeline" data-width="" data-height="736" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="<?php echo $fb_page ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $fb_page ?>">SciHive</a></blockquote></div>
    </center>
</div>























<section class="clients cid-rF1V27i0Sw" data-interval="false" id="clients-13" style="background-color: red !important">
      

    
        <div class="container mb-5">
            <div class="media-container-row">
                <div class="col-12 align-center">
                    <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2">
                        Special thanks to these
                    </h2>
                    <h3 class="mbr-section-subtitle mbr-light mbr-fonts-style display-5">
                        Awesome Companies
                    </h3>
                </div>
            </div>
        </div>

    <div class="container">
        <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner" data-visible="5">
                
                
                
                
                
            <div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/1.png" class="img-responsive clients-img">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/2.png" class="img-responsive clients-img">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/3.png" class="img-responsive clients-img">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/4.png" class="img-responsive clients-img">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/5.png" class="img-responsive clients-img">
                            </div>
                        </div>
                    </div>
                </div></div>
            <div class="carousel-controls">
                <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev">
                    <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next">
                    <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="social-buttons2-12" >


    <div class="container" style="background-color: orange !important">
        <div class="media-container-row">
            <div class="col-md-8 align-center">
                <h4 class="pb-3 mbr-fonts-style display-2">
                    FOLLOW US!
                </h4>
                <div class="social-list pl-0 mb-0">
                    <a href="" target="_blank" style="color: black">
                        <span class="px-2 socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                    </a>
                    <a href="https://www.facebook.com/SciHive-1682859158525543" target="_blank" style="color: black">
                        <span class="px-2 socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                    </a>
                    <a href="" target="_blank" style="color: black">
                        <span class="px-2 socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                    </a>
                    <a href="" target="_blank" style="color: black">
                        <span class="px-2 socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                    </a>
                    <a href="" target="_blank" style="color: black">
                        <span class="px-2 socicon-github socicon mbr-iconfont mbr-iconfont-social"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/mbr-clients-slider/mbr-clients-slider.js"></script>
  <script src="assets/sociallikes/social-likes.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>

<?php
}else{
  header('location:errorlogin.php');
}
?>   

