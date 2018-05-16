<?php
session_start();
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
            //echo $_SESSION['user'];
    		header("Location: ../index.php");
    	}
    	else {
    	echo "Incorrect Credentials, Try again...";
    	echo $conn->error;
   		}
	
#}
/*else if ($designate == 'staff') {

    $query = "SELECT id, sname, password FROM userstaff
    WHERE email='$email' and password='$password'";
    $result=$conn->query($query);

    if ($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
        $count = $result->num_rows; 
        }
        if ($count == 1){
            $_SESSION['user'] = $row['id'];
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
        if ($count == 1){
            $_SESSION['user'] = $row['id'];
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
}*/





