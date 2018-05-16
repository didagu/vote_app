<?php 
session_start();
include "conn.php";
$user_id = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>voting system</title>
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
    <script src="js/jquery.js"></script>
</head>
<body>
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
                    <h1><span class="version status solved">Idea</span> <?php echo "$title";?></h1>
					
                    <?php
                    $_SESSION['policy'] = $id;
                    
                   	?>
                    <hr>
                </div>
                  <canvas id="myChart" width="100" height="20"></canvas>
              	  <br>
				  <p><?php echo $rows['content']; } ?></p>
				  <hr>
                  <form action="events/voteprocess.php" method="post" id="myForm"> 
					  <?php
	                  $select = "SELECT * FROM options WHERE policy_id=$id";
	                  $result = $conn->query($select);
	                    if ($result->num_rows>0){
	                            $rowu = $result->num_rows; 
			                    while($rows=$result->fetch_all()){	
			                        for ($i=0; $i < $rowu; $i++) {
			                        	$optid = $rows[$i][0];
			          ?>              	
          
        <label for="followup-check"> <?php echo $rows[$i][2]; ?> </label>
        <?php 
                $select2 = "SELECT * FROM voterecord WHERE vote='1' and option_id='$optid'";
                $result0 = $conn->query($select2);
                $count=0;
                if ($result0->num_rows>0){

                while($rows0=$result0->fetch_assoc()){
                $count = $result0->num_rows; 
                }
                echo $count;}
                 else{
                    echo "0";
                    } 
        ?>
       <input type="hidden" name="option_id" value="<?php echo $rows[$i][0];?>"/>           
       <input type="radio" name="option"  id="followup-check<?php echo $rows[$i][0]; ?>" value="" onclick="" /> 

                       
         			<input type="hidden" name="vote" id="vote" value="">
         
                    <input type="hidden" name="policy_id" id="policy_id" value="<?php echo $policy_id?>">
                    
                    <?php 

                        }
                    }


                    ?>
                      </form>
                    <script type="text/javascript">
                           var upvote = $('#followup-check')

						upvote.on('click',function(){
							 
							var result = 1;
							$("#vote").val(result);
							//alert(result);
							$("#followup-check").prop('checked',true);
							//$("#followup-check").prop('disabled', true)
							

							document.forms["myForm"].submit();
							});

						</script>

						<?php

                }
                    ?>


			</div>

		</main>


<script type="text/javascript" src=""></script>
<script src="js/charts.js"></script>
</body>
</html>