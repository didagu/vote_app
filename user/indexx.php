<?php //session_start();
// $sname = $_SESSION['sname'];
 //include 'conn.php';
?>
<!doctype html>
<html lang="">
<head>

    <title>XDocs - A Knowledge base and documentation theme</title>
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
     <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="css/main.css" rel="stylesheet">


</head>
<body class="quickSectionActive">

    <div class="bodyWrap">
        <header class="doc-header">
            <div class="logoWrap">
                <a href="indexx.php"><img src="assets/img/basic/logo.png" alt="/" width="109" height="43"></a>
            </div>
            <a href="#" class="nav-trigger"><i class="fa fa-navicon"></i></a>
             <ul class="main-nav">
                <li class="active"><a href="index.html">Home</a></li>
                
                <li><a href="login.php">Sign in / Sign up</a></li>
                <li><a href="content2.php">latest ideas/suggestion</a></li>
                
            </ul>
            
            <span class="copyRights">&copy; Sharon, All rights reserved</span>
        </header>
        <button class="toggleOptionPanel"><i class="fa fa-align-right"></i></button>
        
        <main class="contentArea">
            <div class="contentAreaInner clearfix no-pad-left no-pad-right">
            <p>Welcome Guest</p>
                <section id="slider" class="slider">
        <div id="wrapper" class="slides-wrapper">
            <div id="slide" class="slide" data-slide-id="0">
                <img class="slide__img" src="image/iddd.png" alt="slider-0">
                <div class="slide__caption">
                    <span class="slide__caption--title">Our Idea</span>
                    <span class="slide__caption--text">It is not the strongest species that survive, nor the most intelligent, but the most responsive to change.</span>
                </div>
            </div>
            <div id="slide" class="slide" data-slide-id="1">
                <img class="slide__img" src="image/think.jpg" alt="slider-1">
                <div class="slide__caption">
                    <span class="slide__caption--title">What do you think?</span>
                    <span class="slide__caption--text">Discourse and critical thinking are essential tools when it comes to securing progress in a democratic society, instituition or organization. But in the end, unity and engaged participation are what make it happen.</span>
                </div>
            </div>
            <div id="slide" class="slide" data-slide-id="2">
                <img class="slide__img" src="image/vott.png" alt="slider-2">
                <div class="slide__caption">
                    <span class="slide__caption--title">Make it happen by voting</span>
                    <span class="slide__caption--text">Discourse and critical thinking are essential tools when it comes to securing progress in a democratic society, instituition or organization. But in the end, unity and engaged participation are what make it happen.</span>
                </div>
            </div>
            <div id="slide" class="slide" data-slide-id="3">
                <img class="slide__img" src="image/win.png" alt="slider-3">
                <div class="slide__caption">
                    <span class="slide__caption--title">The most accepted idea is established</span>
                    <span class="slide__caption--text">Crowdsourcing is a great way to approach creation because in any given point there's always somebody on the Internet who knows something better than you do.</span>
                </div>
            </div>
        </div>

        <a href="javascript:void(0)" class="slider__btn slider__btn--prev" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </a>
        <a href="javascript:void(0)" class="slider__btn slider__btn--next" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </a>

        <div class="indicators">
            <ul class="indicators__list">
                <li class="indicators__item active" data-slide-to="0"></li>
                <li class="indicators__item" data-slide-to="1"></li>
                <li class="indicators__item" data-slide-to="2"></li>
                <li class="indicators__item" data-slide-to="3"></li>
            </ul>
        </div>
    </section>

            </div><!--contenAreaInner-->
        </main>

    </div>

    <!--========================================
    Javascript
    ===========================================-->

    <script src="assets/lib/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="js/script-compiled.js"></script>


</body>
</html>
