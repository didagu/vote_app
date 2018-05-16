<?php
session_start();
$name = $_SESSION['sname'];
$comment = $_POST['comment'];
$policy_id = $_POST['policy_id'];
$designate = $_POST['designate'];
$redern_link = $_SERVER['HTTP_REFERER'];
include "../conn.php";
$insert = "INSERT INTO rundb.comment(name,designation, comment, policy_id)
VALUES('$name', '$designate', '$comment', $policy_id)";
//die($insert);
$query = $conn->query($insert);
if($query){
	echo "your comment has been successfully added <br>";
	header("location:$redern_link"); //redirects to the page that directed it here ..


}
else{
	echo $conn->error;
}
