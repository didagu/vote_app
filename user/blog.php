<?php 
session_start();
include "conn.php";
$user_id = $_SESSION['user'];
//echo $id;
?>
<!doctype html>
<html lang="">
<head>

    <title>Voting System</title>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>


</head>
<body class="quickSectionActive">

<?php

?>

    <div class="bodyWrap">
        <header class="doc-header">
            <div class="logoWrap">
                <a href="index.html"><img src="assets/img/basic/logo.png" alt="/" width="109" height="43"></a>
            </div>
            <a href="#" class="nav-trigger"><i class="fa fa-navicon"></i></a>
              <ul class="main-nav">
                <li ><a href="index.php">Home</a></li>
				<!--This is where the blog will reside and will be viewable but no commenting-->
                <li class="active"><a href="content.php">Suggestion/Idea</a></li>
					<!--<li class="active"><p><i class="fa fa-hand-o-right"></i> Petition to allow students to use two straws freely</p></li>-->
					
				<!--Recent -->
                <!--<li><a href="profile.html">Profile </a></li>-->
				<!--Admin User -->
                <li><a href="logout2.php">Logout</a></li>
            </ul>
            <!--<ul class="socialLinks">
                <li><a href="notification.html" ><i class="fa fa-globe"></i>3</a></li>
                <li><a href="message.html"><i class="fa fa-envelope"></i>5</a></li>
            </ul>-->
            <span class="copyRights">&copy; Sharon, All rights reserved</span>
        </header>
        <!--<button class="toggleOptionPanel"><i class="fa fa-align-right"></i></button>
        
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
				
                <div class="commentator" align="center">
					<span class="auth-dp"><img src="assets/img/author.jpg" width="50%" alt="asd"></span>
					<br>
					Mrs Sara Doe
					<br>
					<span>Parent</span><br>
					<a href="#">Logout</a>
				</div>
                
                

            </div>
        </div>-->

        <main class="contentArea">
            <div class="contentAreaInner  clearfix">
                        <?php
                        $id = $_GET['policy_id'];
                        $select = "SELECT  * FROM rundb.policy WHERE policy_id=$id";


                        $result = $conn->query($select);

                        while($rows=$result->fetch_assoc()){
                            $title = $rows['title'];
                            $policy_id = $rows['policy_id'];
                            ?>
                           
                           
                <div class="heading">
				<!--if pettition has been adopted in law...voting also stops-->
                    <h1><span class="version status solved">Idea</span> <?php echo "$title";?></h1>
					<!--petition still up for voting-->
                    <!--h1><span class="version status">Open</span> Petition to allow students to use two straws freely</h1>
					<!--if petition has more downnvotes...voting also ends here-->
                    <!--h1><span class="version status unsolved">Closed</span> Petition to allow students to use two straws freely</h1-->
                    <!--i class="fa fa-calendar"></i> <time class="label label-primary">22nd April, 2018</time-->
                    <?php
                    $_SESSION['policy'] = $id;
                    //echo $_SESSION['policy'];
                   ?>
                    <hr>
					                        <br>
                        <br>
                       <!-- <img src="assets/img/Untitled-6.png" alt="dummy">-->
                  </div>
                  <canvas id="myChart" width="100" height="20"></canvas>
                  <?php





                  ?>

                        <br>
						  <p><?php echo $rows['content']; } ?></p>
                      <p></p>
						 <hr>
				
				 
				 <?php
                 $select = "SELECT * FROM voterecord WHERE vote='1' and policy_id='$policy_id'";
                $result = $conn->query($select);
                $count=0;
                if ($result->num_rows>0){
                while($rows=$result->fetch_assoc()){
                $count = $result->num_rows; 
                }

                 ?>
				<div class="row">
				<div class="col-md-6">
				 <label><i class="fa fa-thumbs-up"></i> Idea A: <span class="badge badge-primary"><?php echo $count;}
                 else{
                    echo "0";
                    } ?></span></label>
                 <input type="hidden" id="uv" value="<?php echo $count; ?>">
					<br>
						<h5>If you agree with this idea, vote here <?php //echo $user_id;?></h5>
						<div class="custom-checkbox">
                <form action="events/voteprocess.php" method="post" id="myForm">
                        <input type="checkbox" id="followup-check" <?php 
                            
                            #include "conn.php";
                            $request = "SELECT * FROM rundb.voterecord
                            WHERE user_id='$user_id' and policy_id='$policy_id'";

                            $result=$conn->query($request);
                            $rows=$result->fetch_assoc();
                            $value=$rows['vote'];
                            //if ($result->num_rows>0){
                              //  echo "disabled";
                                
                            //}
                             //else 
                                if ($result->num_rows>0 && $value==1){
                                   echo "disabled checked";
                                }
                                if ($result->num_rows>0){
                                echo "  disabled";
                                
                                }

                                else{
                                   echo "";
                                }
                            

                        ?> onclick="" value="" >

                        <?php //die($request);?>
                        <label for="followup-check">
                            <span></span>
                            Idea A
                        </label>
                        <input type="hidden" name="vote" id="vote" value="">
                        <input type="hidden" name="policy_id" value="<?php echo $policy_id?>">
						</div>
						<br>
						<hr>
						</div>
                        <?php
                    $select = "SELECT * FROM voterecord WHERE vote='0' and policy_id='$policy_id'";
                    $result = $conn->query($select);
                    if ($result->num_rows>0){
                    while($rows=$result->fetch_assoc()){
                    $count = $result->num_rows; 
                    }

                 ?>
						<div class="col-md-6">
						<label><i class="fa fa-thumbs-down"></i>Idea B: <span class="badge badge-primary"><?php echo $count;}
                        else{
                            echo "0";
                            } ?></span></label>
                        <input type="hidden" id="dv" value="<?php echo $count; ?>">
						<h5>If you do not agree with this idea vote here</h5>
						<div class="custom-checkbox">
                        <input type="checkbox" <?php 
                            
                            #include "conn.php";
                            $request = "SELECT * FROM rundb.voterecord
                            WHERE user_id='$user_id' and policy_id='$policy_id'";
                            $result=$conn->query($request);
                            $rows=$result->fetch_assoc();
                            $value=$rows['vote'];
                            //if ($result->num_rows>0){
                              //  echo "disabled";
                            //}
                            //else 
                            if ($result->num_rows>0 && $value==0){
                                   echo "disabled checked";
                                }
                                if ($result->num_rows>0){
                                 echo "  disabled";
                                }
                                else{
                                    echo "";
                                }
                            

                        ?> id="followup-check2" onclick="" class="label label	-danger">
                        <label for="followup-check2">
                            <span></span>
                            Idea B
                        </label>
                        
                    </div>
						<hr>
					</div>
                </form>
				</div>
				<br><hr>
				<h3>Comments</h3>
				<div class="discussion-area">
                    <div class="topic-comments">
                                                <?php //include "events/view_comment.php";?>
                    <?php
                    $id = $_GET['policy_id'];
                    $select = "SELECT * FROM rundb.comment WHERE policy_id=$id";
                    //die($select);
                    $result = $conn->query($select);

                    while($rows=$result->fetch_assoc()){
                        //$comment_id=$rows['comment_id'];
                        $name = $rows['name'];
                        $designate = $rows['designation'];
                    
                    ?>
                    
                        <div class="comment user-comment">
                        
                            <div class="comment-content">

                                <p>
                                    <?php echo $rows['comment'];?><br>
                                </p>
                            </div>
                            <cite class="commentator">

                                <span class="auth-dp"><img src="image/face-0.jpg" alt="asd"></span>

                                <?php  echo  $name ;?>
								<br>
                               <span > <?php echo $designate;?><br><br> </span>
                            </cite>
                        </div>
                        <br>
                        <?php } ?>


                         <?php
                    $id = $_GET['policy_id'];
                    $select = "SELECT * FROM rundb.admincomment WHERE policy_id=$id";
                    //die($select);
                    $result = $conn->query($select);

                    while($rows=$result->fetch_assoc()){
                        //$comment_id=$rows['comment_id'];
                        //$name = $_SESSION['userName'];
                        $designate = "Admin";
                    ?>
                       

                        <div class="comment staff-comment">
                            <div class="comment-content">
                                <p>
                                   <?php echo $rows['comment'];?><br>
                                </p>
                            </div>
                           <cite class="commentator">
                                <span class="auth-dp"><img src="image/face-0.jpg" alt="asd"></span>

                                <?php // echo  $name ;?>
                            
                                <span > <?php echo $designate;?><br><br> </span>
                            </cite>
                        </div><br>
                         <?php } ?>
                     </div>
                        <!--<div class="comment user-comment">
                            <div class="comment-content">
                                <p>
                                    Many thanks, you agent of unknown world, don't know how but your comment worked and now all is good
                                    <br>
                                    Thanks :)
                                </p>
                            </div>-->
                            <!--<cite class="commentator">
                                <span class="auth-dp"><img src="assets/img/author.jpg" alt="asd"></span>
                                Sara Doe
								<br>
                                <span>Me</span>
                            </cite>
                        </div>-->
                    </div>
                    <hr>
                    <h4>Enter Comments Below</h4>
                    
                    <form method="post" action="events/commentprocess.php">
                        <div class="comment-content">
                          <!-- <input type="text" name="name" placeholder="Enter your name">--><br> 
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
                        </div><br>

                        <div class="input-block">
                            <label for="writeDetails">Write Here</label>
                            <textarea class="text-area-sm" id="writeDetails" name="comment"></textarea>
                        </div>

                        <button class="btn"><i class="fa fa-hashtag"></i>Post Comment</button>
                        <input type="hidden" name="policy_id" value="<?php echo $policy_id?>">

                    </form>
                </div>
				 
				<!--this is for moving to the next article/petition-->
            </div><!--contenAreaInner-->
        </main>
    </div>

    <!--========================================
    Javascript
    ===========================================-->

    <script src="assets/lib/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script type="text/javascript" src="js/vote.js"></script>

    <script src='js/charts.js'></script>
</body>
</html>