<?php
include "../conn.php";
 /* Function for automatic increment of field's "Name" attribute. */
/*$i = 1;
$i = $i + 1;
 $total = $_GET["total"];
$i = $i + 1;
//echo $_GET["option" . $i];
//echo 'kfkjnfjekn';
for ($i=2; $i <= $total; $i++) { 
	# code...
	$cars = array("Volvo", "BMW", "Toyota");
	//if(is_array($_GET["option" . $i])){
    $capture_field_vals = implode(",", $_GET["option".$i]); 
    echo $capture_field_vals;
    echo "fknvk";
}*/
//echo $_GET["option"][0];
//echo $_GET["option"][1];
$policy = $_GET['policy'];
$capture_field_vals ="";

if ($_GET['option']) {
	//$capture_field_vals = implode(",", $_GET["option"]); 
foreach ( $_GET['option'] as $key=>$value ) {

$values = $conn->real_escape_string($value);
echo $values;
//$values = implode(",", $value);
$insert = "INSERT INTO options(policy_id, value)VALUES('$policy', '$values')";

$result = $conn->query($insert);

     if ($result){
     	header("location:../index.php");
     }
     else{
     	echo "Please try again" .$conn->error;
     }
 
}
}

/*if(isset($_GET["option"]) && is_array($_GET["option"])){
    $capture_field_vals = implode(",", $_GET["option"]); 
    echo $capture_field_vals;
}*/
/*$insert = "INSERT INTO options(policy_id, value)VALUES('$policy', '$capture_field_vals')";

$result = $conn->query($insert);

     if ($result){
     	header("location:../index.php");
     }
     else{
     	echo "Please try again" .$conn->error;
     }
   
/*$insert_row = $mysqli->query("INSERT INTO options ( policy_id, value ) VALUES('$policy', '$capture_field_vals' )");

if($insert_row){
    print 'Success! ID of last inserted record is : ' .$mysqli->insert_id .'<br />';
*/
