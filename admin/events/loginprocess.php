<?php
session_start();
if (isset($_session['user'])!=""){
header("Location: home.php");
} 
include "../conn.php";

$email = $_POST['email'];
$password = md5($_POST['password']);
$query = "SELECT userId, userName, userPass FROM user
WHERE userEmail='$email' and userPass='$password'";

$result=$conn->query($query);


$row=$result->fetch_assoc();
$count = $result->num_rows;
if ($count== 1 && $row['userPass'] == $password){
    $_SESSION['user'] = $row['userId'];
    $_SESSION['userName'] = $row['userName'];
    header("Location: ../index.php");
}
else {
    echo "Incorrect Credentials, Try again...";
    echo $conn->error;
   }


?>
