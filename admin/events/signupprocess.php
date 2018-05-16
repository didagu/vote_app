<?php
session_start();
include "../conn.php";

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$checkPass = $_POST['checkPass'];


if(empty($name)) {
  echo "Please enter your full name.";
}else if (strlen($name) < 3) {
  echo "Name must have atleat 3 characters.";
}


//basic email validation
if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  echo "Please enter valid email address.";
}
else{
   // check email exist or not
  $query = "SELECT userEmail FROM user WHERE userEmail='$email'";
  $result = $conn->query($query);
}

  if($result->num_rows>0){
    echo  "Provided Email is already in use.";
    die();
  }

  // password validation
if (empty($password)){
  echo "Please enter password.";
}
if (empty($checkPass)){
  echo "please confirm your password";
}
else if(strlen($checkPass) < 6) {
  echo "Password must have atleast 6 characters.";
}
else if(($checkPass)!= ($password)) {
  echo "please ensure you entered the same password";
}
else{
    //encrypt password
  $password_en = md5($_POST['password']);
  $insert = "INSERT INTO user(userName, userPhone, userEmail, userPass) VALUES('$name', '$phone', '$email', '$password_en')";
  $result = $conn->query($insert);
  if($result){
    echo "Saved!";
    header("Location: ../login2.php");
  }     
  else{
    echo $conn->error;
  }
}
