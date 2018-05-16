!doctype html>
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
<!--options panel/ panel in the middle , wont collapse on this page automatically-->
<body class="quickSectionActive skipAutoCollapse">

    <div class="bodyWrap">
        <header class="doc-header">
            <div class="logoWrap">
                <a href="index.php"><img src="assets/img/basic/logo.png" alt="/" width="109" height="43"></a>
            </div>
            <a href="#" class="nav-trigger"><i class="fa fa-navicon"></i></a>
             <ul class="main-nav">
                <li><a href="index.php">Home</a></li>
				<!--This is where the blog will reside and will be viewable but no commenting-->
            </ul>

            <span class="copyRights">&copy; 2018, All rights reserved</span>
        </header>
        <button class="toggleOptionPanel"><i class="fa fa-align-right"></i></button>
        <div class="optionsPanel">
            <button class="toggleOptionPanel"><i class="fa fa-align-right"></i></button>
            <div class="inner">
                <form id="loginForm" class="swap-able active" method="post" action="events/loginprocess.php">
                    <h4>Signed Up?<br>Login to your account</h4>

                    <div class="input-block fancy-block">
                        <span class="fa fa-user"></span>
                        <label for="usr_username">Email</label>
                        <input id="usr_username" type="text" name="email">
                    </div>
                    <div class="input-block fancy-block">
                        <span class="fa fa-lock"></span>
                        <label for="usr_pswrd">Password</label>
                        <input id="usr_pswrd" type="password" name="password">
                    </div>
                    <div class="fancy-block">
                        <div class="custom-select">
                        <span>Designation</span>
                        <select name="designate">
                            <option selected disabled>Select</option>
                            <option value="parent">Parent/Guardian</option>
                            <option value="staff">Teacher/Staff</option>
                            <option value="student">Student</option>
                        </select>
                    </div>
                    </div>
                    <button type="submit" class="btn-block btn">Login</button><br>
                    <a href="change.php">forgot password?</a><br>
                    <a class="triggerSwap" href="#signupForm">Don't have account? sign up!</a>
                </form>
                 </div>

            </div><!--contenAreaInner-->

    </div>

    <!--========================================
    Javascript
    ===========================================-->

    <script src="assets/lib/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script type="text/javascript" src=""></script>
</body>
</html>

