<?php
session_start();
$idd = $_SESSION['policy'];
#$username = $_SESSION['user'];
#$sname = $_SESSION['sname'];
if (isset($_SESSION['user'])!=""){
header("Location: home.php");
} 
include "../conn.php";

$email = $_POST['email'];
$password = md5($_POST['password']);
$designate = $_POST['designate'];

#if ($designate == 'parent') {

	$query = "SELECT id, sname, password FROM rundb.users
	WHERE email='$email' and password='$password'";
    //die($query);
	$result=$conn->query($query);
    $rows=$result->fetch_assoc();
    $count = $result->num_rows;
    	if ($count == 1){
    		$_SESSION['user'] = $rows['id'];
    		$_SESSION['sname'] = $rows['sname'];


            
                    header("location:../blog.php?policy_id=$idd");
                    //echo "<a href='blog2.php?policy_id=$id'>$title<br><br></a>";
                        
            }
            else{
                echo $conn->error;
            }
    	 
    	
