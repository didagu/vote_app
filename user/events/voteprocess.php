<?php
session_start();
$user_id = $_SESSION['user'];
$id = $_POST['policy_id'];
$option = $_POST['option_id'];
$vote = $_POST['vote'];
$redern_link = $_SERVER['HTTP_REFERER'];

include "../conn.php";

$insert = "INSERT INTO rundb.voterecord (user_id, policy_id, option_id, vote)VALUES('$user_id', '$id', '$option', '$vote')";

//die($insert);
$query = $conn->query($insert);
if($query){
	
	header("location:$redern_link"); //redirects to the page that directed it here ..


}
else{
	echo $conn->error;
}

#$select = "SELECT * FROM voterecord WHERE vote='1' and policy_id='$id'";
#$result = $conn->query($select);
#if ($result->num_rows>0){
#		while($rows=$result->fetch_assoc()){
   	#$count = $result->num_rows; 
#   	    	}
