                    
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


</head>
<body class="quickSectionActive">

    <div class="bodyWrap">
        <header class="doc-header">
            <div class="logoWrap">
                <a href="index.html"><img src="assets/img/basic/logo.png" alt="/" width="109" height="43"></a>
            </div>
            <a href="#" class="nav-trigger"><i class="fa fa-navicon"></i></a>
             <ul class="main-nav">
                <li class=""><a href="index.php">Home</a></li>
				<!--This is where the blog will reside and will be viewable but no commenting-->
                <li><a href="content.php">Latest Suggestions/ideas</a></li>
				<!--Recent -->
				<!--Admin User -->
                <li class="active"><a href="create.php">Create Idea</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            
            <span class="copyRights">&copy; 2016, All rights reserved</span>
        </header>
        
        
        <main class="contentArea">
            <div class="contentAreaInner small-canvas clearfix">
                <header class="page-header user-widget-wrap">
                    <h1>Create New Idea</h1>
                    <div class="user-widget top-right">
                        
                    </div>
                </header>

                <form id="" class="" method="post" action="events/comprocess.php">
                    <!--div class="custom-select">
                        <span>Select</span>
                        <select>
                            <option selected>Select a theme</option>
                            <option>Suono HTML</option>
                            <option>Gfashion WP</option>
                            <option>And Lorem Ipsum</option>
                        </select>
                    </div-->
                    <input class="input-block" type="number" name="comparison" placeholder="Number of comparisons" value = "">


                    <button class="btn btn-lg"><i class="fa fa-hashtag"></i>Enter </button>
                    </form>

                   
