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
//echo $user_id;
//echo "dcbcds";
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
					
				<!--Admin User -->
                <li><a href="logout2.php">Logout</a></li>
            </ul>
            
            <span class="copyRights">&copy; Sharon, All rights reserved</span>
        </header>
        

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
					
                    <?php
                    $_SESSION['policy'] = $id;
                    
                   ?>
                    <hr>
					<br>
                    <br>
                       
                  </div>
                  <canvas id="myChart" width="100" height="20"></canvas>
                 

                        <br>
						  <p><?php echo $rows['content']; } ?></p>

						 <hr>
				<!------------------------------------------------------------------------------>
				 <?php

                       /* $query = "SELECT choice FROM policy
                        WHERE policy_id = $id";


                        $result=$conn->query($query);

                        $row = $result->fetch_assoc();
                        $choice = $row['choice'];

                        for ($x = 1; $x <= $choice; $x++) {*/
                 ?>

                <?php
                  $select = "SELECT * FROM options WHERE policy_id=$id";
                    //die($select);

                    $result = $conn->query($select);
                    if ($result -> num_rows>0){
                        //while($rows=$result->fetch_assoc()){
                           //$optid = $rows['id'];
                        //}
                            $rowu = $result->num_rows; 
                            ?>
                            <input type="hidden" name="" id="count" value="<?php echo $rowu;?>">
                            <?php
                            //$rows=$result->fetch_assoc();
                         //  $rows=$result->fetch_all();
                        
                            
                       // $rows = array();
                      //  for ($i=0; $i <$rows; $i++) { 
                        while($rows=$result->fetch_all()){
                       // foreach ($rows as $rowu){
                        # code...
                        //$rows=$result->fetch_assoc();
                      // $rowu = mysqli_fetch_row($result);
                           // print_r($rows) ;
                            //$valuess = array_column($rows, [1]);
//print_r($valuess) ;   
                        $arr =array();
                        for ($i=0; $i <$rowu; $i++) {
                        $optid = $rows[$i][0];
                            
                        //echo $optid;
                        //echo "c fvgbbv";
                
                         
                            
                            
                        
    // should contain the comma separated values
    // in array form
    // then loop again
                        ?>
        <form action="events/voteprocess.php" method="post" id="myForm">   
        <label for="followup-check"> <?php echo $rows[$i][2]; ?> </label>
        <?php 
                $select2 = "SELECT * FROM voterecord WHERE vote='1' and option_id='$optid'";
                $result0 = $conn->query($select2);
                $count=0;
                if ($result0->num_rows>0){

                while($rows0=$result0->fetch_assoc()){
                $count = $result0->num_rows; 
                }

                 $arr[] = $count;

                 
                echo $count;}
                 else{
                    echo "0";
                    } 

                    print_r($arr);

        ?>
        <input type="hidden" id="uv" value="<?php echo $count; ?>">

       <input type="hidden" name="option_id" value="<?php echo $rows[$i][0];?>"/>           
       <input type="checkbox" name=""  id="followup-check" value=""
        <?php 



        //echo $user_id;
        //echo $optid;
                            
                            #include "conn.php";
                            $request = "SELECT * from voterecord WHERE option_id='$optid' and user_id = $user_id and policy_id = $id";
                            //die($request);
                        
                            $result2=$conn->query($request);
                            //$rows=$result->fetch_assoc();
                            $rows2=$result2->fetch_assoc();
                            $value=$rows2['vote'];
                            $uid = $rows2['user_id'];
                            //echo "dbvvhjvhb";
                            //$user = 
                            
                            if ($result2->num_rows==1  ){
                                   echo "disabled checked";
                                }
                                 elseif ($result2->num_rows == 0 && $uid==$user_id ){
                                echo "  disabled";
                                
                                }

                                else{
                                   echo "";
                                }
                            
                            
                       ?> /> 
                       <input type="hidden" name="vote" id="vote" value="">
         
                    <input type="hidden" name="policy_id" value="<?php echo $policy_id?>">
                    
                    </form>

                    <!-- section for visualization graph..............-->
                    <?php

                  /*  $fetch = "SELECT vote FROM rundb.voterecord WHERE policy_id = $id and option_id = $id";
                    $answer=$conn->query($fetch);
                            
                            $rowzz=$answer->fetch_all();

                            //print_r($rowzz);
                            $rowss = $answer->num_rows;
                            echo $rowss;
                            $data = array();
                            //foreach ($rowss as $value1) {
                                $data[]=$rowss;
                                //print_r($data);
                            //}
                            */

                    ?>
                    <!--visualization part ends...............................-->

                       <?php 
                        }

                       ?>


        <!--<label for="followup-check<?php //echo $rows['id'];?>">
                            <span></span>
                            
         </label>-->
         

                     <?php
                            }
                         }
                     
                 
                     ?>
         
                        
				<div class="row">

				<div class="col-md-6">
				<!-- <label><i class="fa fa-thumbs-up"></i> Upvotes: <span class="badge badge-primary">
                        
                    </span>
                 </label>-->
                 <input type="hidden" id="uv" value="<?php //echo $count; ?>">
					<br>
						

                        
						<div class="custom-checkbox">

                        
                      <!--  <div class="col-md-6">
						<label><i class="fa fa-thumbs-down"></i> Downvotes: <span class="badge badge-primary"></span></label>
                        <input type="hidden" id="dv" value="<?php //echo $count; ?>">
						<h5>If you do not agree with this petition,downvote here</h5>
						<div class="custom-checkbox">
                        <input type="checkbox" id="followup-check2" onclick="" class="label label	-danger">
                        <label for="followup-check2">
                            <span></span>
                            Downvote
                        </label>
                        
                    </div>

						<hr>

					</div>-->
                    
                

			</div>
            <?php
            
            ?>
				<br><hr>
				<h3>Comments</h3>
				<div class="discussion-area">
                    <div class="topic-comments">
                                                
                    <?php
                    $id = $_GET['policy_id'];
                    $select = "SELECT * FROM rundb.comment WHERE policy_id=$id";
                    //die($select);
                    $result = $conn->query($select);

                    while($rows=$result->fetch_assoc()){
                        
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
                    
                    $result = $conn->query($select);

                    while($rows=$result->fetch_assoc()){
                        
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

                               
                            
                                <span > <?php echo $designate;?><br><br> </span>
                            </cite>
                        </div><br>
                         <?php } ?>
                     </div>
                        
                    </div>
                    <hr>
                    <h4>Enter Comments Below</h4>
                    
                    <form method="post" action="events/commentprocess.php">
                        <div class="comment-content">
                         <br> 
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