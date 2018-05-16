<?php
session_start();
$idd = $_SESSION['policy'];
//echo "$idd";

session_destroy();

include "conn.php";

$select = "SELECT  * FROM rundb.policy ORDER BY policy_id desc";

$result = $conn->query($select);
if ($result->num_rows>0){
	while($rows=$result->fetch_assoc()){
 		$id = $rows['policy_id'];
 		$title = $rows['title'];
 		header("location:blog2.php?policy_id=$idd");
 		//echo "<a href='blog2.php?policy_id=$id'>$title<br><br></a>";
	}
}
else{
	echo $conn->error;
}

//header("location:blog2.php");