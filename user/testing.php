else if ($designate == 'staff') {

	$query = "SELECT id, sname, password FROM userstaff
	WHERE email='$email' and password='$password'";
	$result=$conn->query($query);

	if ($result->num_rows>0){
		while($rows=$result->fetch_assoc()){
    	$count = $result->num_rows; 
    	}
    	if ($count == 1 && $rows['password'] == $password){
    		$_SESSION['userstaff'] = $row['id'];
    		$_SESSION['sname'] = $row['sname'];
    		header("Location: ../index.php");
    	}
    	else {
    	echo "Incorrect Credentials, Try again...";
    	echo $conn->error;
   		}
	}
}
else if ($designate == 'student') {

	$query = "SELECT id, sname, password FROM userstudent
	WHERE email='$email' and password='$password'";
	$result=$conn->query($query);

	if ($result->num_rows>0){
		while($rows=$result->fetch_assoc()){
    	$count = $result->num_rows; 
    	}
    	if ($count == 1 && $rows['password'] == $password){
    		$_SESSION['userstudent'] = $row['id'];
    		$_SESSION['sname'] = $row['sname'];
    		header("Location: ../index.php");
    	}
    	else {
    	echo "Incorrect Credentials, Try again...";
    	echo $conn->error;
   		}
	}
}
else{
	return false;
}
<?php session_start();
// $sname = $_SESSION['sname'];
 include 'conn.php';
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
                <a href="index.html"><img src="assets/img/basic/logo.png" alt="/" width="109" height="43"></a>
            </div>
            <a href="#" class="nav-trigger"><i class="fa fa-navicon"></i></a>
             <ul class="main-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <!--This is where the blog will reside and will be viewable but no commenting-->
                <li><a href="content.php">Latest Petitions</a></li>
                <!--Recent -->
                <!--Admin User 
                <li><a href="message.php">Message</a></li>-->
                <li><a href="login.php">Sign in / Sign up</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <!--<ul class="socialLinks">
                <li><a href="#" ><i class="fa fa-globe"></i>3</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i>5</a></li>
            </ul>-->
            <span class="copyRights">&copy; 2018, All rights reserved</span>
        </header>
        <!--<button class="toggleOptionPanel"><i class="fa fa-align-right"></i></button>-->
        
        <main class="contentArea">
        <div class="contentAreaInner clearfix">
        Welcome,
        <?php
        if (isset($_SESSION['user'])){
            $sname = $_SESSION['sname'];
           echo  "$sname";
        }
        else{
            echo $conn->error;
        } 

        ?>