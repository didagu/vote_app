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
                <li><a href="index.html">Home</a></li>
				<!--This is where the blog will reside and will be viewable but no commenting-->
                <li><a href="content.html">Latest Petitions</a></li>
				<!--Recent -->
                <li><a href="profile.html">Profile </a></li>
				<!--Admin User -->
                <li><a href="create.html">Create Petition</a></li>
                <li class="active"><a href="message.html">Message</a></li>
                <li><a href="login.html">Sign in / Sign up</a></li>
                <li><a href="index.html">Logout</a></li>
            </ul>
            <ul class="socialLinks">
                <li><a href="#" ><i class="fa fa-globe"></i>3</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i>5</a></li>
            </ul>
            <span class="copyRights">&copy; 2016, All rights reserved</span>
        </header>
        <button class="toggleOptionPanel"><i class="fa fa-align-right"></i></button>
        
        <a href="#" class="next-wt"><i class="fa fa-arrow-right"></i></a>
        <div class="optionsPanel">
            <button class="toggleOptionPanel"><i class="fa fa-align-right"></i></button>
            <div class="inner">
                <div class="search-widget">
                    <form>
                        <div class="input-block">
                            <label for="searchDocs">SEARCH ANYTHING</label>
                            <input id="searchDocs" type="text">
                        </div>
                        <button type="submit"><i class="fa fa-search"></i> </button>
                    </form>
                </div>
				<div class="text-widget">
                   <h4>Who can see this?</h4>
                  <ul class="icon-list">
                        <li><i class="fa fa-hand-o-right"></i> It will be only visible to you and admin.</li>
                        <li><i class="fa fa-hand-o-right"></i> It will effect the site upgrade positively</li>
                    </ul>
               </div>

            </div>
        </div>

        <main class="contentArea">
            <div class="contentAreaInner  clearfix">
			<h3>Admin Messages</h3>
                <div class="discussion-area">
                    <div class="topic-comments">
                        <div class="comment user-comment">
                            <div class="comment-content">
                                <p>
                                    Hi,<br>
                                    I have gone to great lengths to get your theme to load quickly. We have tried changing hosting companies to improve latency, optimising all images and served pages to ensure the smallest possible download is made,
                                </p>
                            </div>
                            <cite class="commentator">
                                <span class="auth-dp"><img src="assets/img/author.jpg" alt="asd"></span>
                                Sara Doe
								<br>
                                <span>Me</span>
                            </cite>
                        </div>
                        <div class="comment staff-comment">
                            <div class="comment-content">
                                <p>
                                    Hello,<br>
                                   You have to follow my lead and your all pain would be gone just like you have used dummy explanation I am gonna return the favour and would be saying very vague words, tit for tat :p,
                                </p>
                                <code>
                                    foreach(hello in world)<br> console.log("hello stranger :D");
                                </code>
                            </div>
                            <cite class="commentator">
                                <span>Admin</span>
                            </cite>
                        </div>
                        <div class="comment user-comment">
                            <div class="comment-content">
                                <p>
                                    Many thanks, you agent of unknown world, don't know how but your comment worked and now all is good
                                    <br>
                                    Thanks :)
                                </p>
                            </div>
                            <cite class="commentator">
                                <span class="auth-dp"><img src="assets/img/author.jpg" alt="asd"></span>
                                Sara Doe
								<br>
                                <span>Me</span>
                            </cite>
                        </div>
                    </div>
                    <hr>
                    <h4>Enter Message Below</h4>
                    <form>
                        <div class="input-block">
                            <label for="writeDetails">Write Here</label>
                            <textarea class="text-area-sm" id="writeDetails"></textarea>
                        </div>

                        <button class="btn"><i class="fa fa-hashtag"></i>Post Comment</button>

                    </form>
                </div>
            </div><!--contenAreaInner-->
        </main>
    </div>

    <!--========================================
    Javascript
    ===========================================-->

    <script src="assets/lib/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/app.js"></script>

</body>
</html>
