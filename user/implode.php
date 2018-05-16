<?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('host','username','password','database_name');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

$capture_field_vals ="";
if(isset($_POST["mytext"]) && is_array($_POST["mytext"])){
    $capture_field_vals = implode(",", $_POST["mytext"]); 
}

//MySqli Insert Query
$insert_row = $mysqli->query("INSERT INTO table ( captured_fields ) VALUES( $capture_field_vals )");

if($insert_row){
    print 'Success! ID of last inserted record is : ' .$mysqli->insert_id .'<br />';
}
?>