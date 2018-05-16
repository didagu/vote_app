<!doctype html>
<html lang="">
<head>

    <title>Vote Collection System</title>
    <!--========================================
    Meta
    ===========================================-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Web Application Manifest -->

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="xDocs">
    <link rel="icon" sizes="192x192" href="assets/img/basic/chrome-touch-icon-192x192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
    <link rel="apple-touch-icon" href="assets/img/basic/apple-touch-icon.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="assets/img/basic/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#55acee">
    <!-- Color the status bar on mobile devices -->
    <meta name="theme-color" content="#55acee">

    <!--========================================
    CSS
    ===========================================-->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <!--put your custom css on the file below-->
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css">


</head>
<body class="quickSectionActive">
<?php session_start();?>

    <div class="bodyWrap">
        <header class="doc-header">
            <div class="logoWrap">
                <a href="index.html"><img src="assets/img/basic/logo.png" alt="/" width="109" height="43"></a>
            </div>
            <a href="#" class="nav-trigger"><i class="fa fa-navicon"></i></a>
             <ul class="main-nav">
                <li class="active"><a href="index.php">Home</a></li>
				<!--This is where the blog will reside and will be viewable but no commenting-->
                <li><a href="content.php">Latest Petitions</a></li>
				<!--Recent -->
				<!--Admin User -->
                <li><a href="create.php">Create Petition</a></li>
                <!--<li><a href="message.php">Message</a></li>-->
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <ul class="socialLinks">
                <li><a href="#" ><i class="fa fa-globe"></i>3</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i>5</a></li>
            </ul>
            <span class="copyRights">&copy; Sharon, All rights reserved</span>
        </header>
        
        <main class="contentArea">
		<div class="contentAreaInner clearfix">
                    
        Welcome,
        <?php
        if (isset($_SESSION['user'])){
            $username = $_SESSION['userName'];
            echo " $username";
        }
        else{
            echo "Guest:";
        }

        ?>
            <!--contenAreaInner-->
				
				<!--main content goes here-->
			<div class="row">
                    <div class="col-xs-12 col-md-4">
                        <div class="accordion">
                    
                    <div class="accordion-content" style="display: block;">
                     
                        <img src="image/img-01.png" alt="dummy">

                    </div>
                </div>
                    </div>
                
                    <!--<div class="col-xs-12 col-md-4">
                        <div class="accordion">
                    <header>
                        <a href="#">
                            <i class="fa fa-folder-open"></i>
                            Closed Petitions
                        </a>
                    </header>
                    <div class="accordion-content" style="display: block;">
                        <ul>
                            <li><a href="#"><i class="fa fa-file-o"></i> WEROCK MUSIC & EVENTS </a></li>
                            <li><a href="#"><i class="fa fa-file-o"></i> VOLTOV BLOG MAGZINE </a></li>
                            <li><a href="#"><i class="fa fa-file-o"></i> CLINIX LAYERS MEDICAL </a></li>
                            <li><a href="#"><i class="fa fa-file-o"></i> 21 MULTIPURPOSE </a></li>
                            <li><a href="#"><i class="fa fa-file-o"></i> GFASHION WOOCOMMERCE </a></li>
                            <li><a href="#"><i class="fa fa-file-o"></i> PLANET GENERAL STORE </a></li>
                            <li><a href="#" style="text-align:center">See All</a></li>-->
					                        </ul>
                    </div>
                </div>
                    </div>-->
               
                   <!-- <div class="col-xs-12 col-md-4">
                        <div class="accordion">
                    <header>
                        <a href="#">
                            <i class="fa fa-folder-open"></i>
                            Accepted Petitions
                        </a>
                    </header>
                    <!--<div class="accordion-content" style="display: block;">
                        <ul>
                            <li><a href="#"><i class="fa fa-file-o"></i> INCREAMENT IN CAUTION FEE </a></li>
                            <li><a href="#"><i class="fa fa-file-o"></i> PAYMENT OF N19,500 FOR TAB MAINTANANCE</a></li>
                            <li><a href="#"><i class="fa fa-file-o"></i> CHANGE OF STUDENT ASSOC. LEADERSHIP </a></li>
                            <li><a href="#"><i class="fa fa-file-o"></i> PAYMENT OF UNIVERSITY ID CARD </a></li>
                           <!-- <li><a href="#"><i class="fa fa-file-o"></i> </a></li>
                            <li><a href="#"><i class="fa fa-file-o"></i> </a></li>-->
							<!--<li><a href="#" style="text-align:center">See All</a></li>
                        </ul>
                    </div>-->
                </div>
                    </div>
                

        </main>

    </div>

    <!--========================================
    Javascript
    ===========================================-->

    <script src="assets/lib/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/app.js"></script>

</body>
</html>
