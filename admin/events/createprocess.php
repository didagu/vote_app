<?php
include "../conn.php";
$title = $_GET['title'];
$body = $_GET['details'];
$insert = "INSERT INTO policy(title,content)VALUES('$title','$body')";
$result = $conn->query($insert);

     if ($result){
     	//echo "success";
     	header("location:../content.php");
     }
     else{
     	echo "Please try again" .$conn->error;
     }
   



