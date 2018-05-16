<?php
session_start();
include "../conn.php";

$sname = $_POST['sname'];
$fname = $_POST['fname'];
$oname = $_POST['oname'];
#$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$checkPass = $_POST['checkPass'];
$designate = $_POST['designate'];

if ($designate == 'parent' ) {

$query = "SELECT * FROM parents 
WHERE sname='$sname' and fname= '$fname'and oname='$oname' and email = '$email'";

$result=$conn->query($query);

if ($result->num_rows>0){
  while($rows=$result->fetch_assoc()){
    $count = $result->num_rows; 
    }
  
if ($count== 1){
    if((empty($sname)) || (empty($fname)) || (empty($oname))) {
  echo "Please enter your full name.";
}
else if (strlen($sname) < 3) {
  echo "Name must have atleat 3 characters.";
}


//basic email validation
if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  echo "Please enter valid email address.";
}
else{
   // check email exist or not
  $query = "SELECT email FROM users WHERE email='$email'";
  $result2 = $conn->query($query);
}
if($result2->num_rows>0){
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
  $insert = "INSERT INTO users(sname, fname, oname, email, password, designation) VALUES('$sname', '$fname', '$oname', '$email', '$password_en' , 'parent')";
  $result = $conn->query($insert);
  if($result){

    header("Location: ../login.php");
  }     
  else{
    echo $conn->error;
  }
}

}

}

}


else if ($designate == 'staff' ) {

$query = "SELECT * FROM staff 
WHERE sname='$sname' and fname= '$fname'and oname='$oname' and email = '$email' ";

$result=$conn->query($query);

if ($result->num_rows>0){
  while($rows=$result->fetch_assoc()){
    $count = $result->num_rows; 
    }
  
if ($count == 1){
    if((empty($sname)) || (empty($fname)) || (empty($oname))) {
  echo "Please enter your full name.";
}
else if (strlen($sname) < 3) {
  echo "Name must have atleat 3 characters.";
}


//basic email validation
if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  echo "Please enter valid email address.";
}
else{
   // check email exist or not
  $query = "SELECT email FROM users WHERE email='$email'";
  $result = $conn->query($query);

  if($result->num_rows>0){
    echo  "Provided Email is already in use.";
    die();
  }
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
  $insert = "INSERT INTO users(sname, fname, oname, email, password,designation) VALUES('$sname', '$fname', '$oname', '$email', '$password_en', 'staff')";
  $result = $conn->query($insert);
  if($result){

    header("Location: ../login.php");
  }     
  else{
    echo $conn->error;
  }
}

}

}

}

else if ($designate == 'student' ) {

$query = "SELECT * FROM students 
WHERE sname='$sname' and fname= '$fname'and oname='$oname' and email = '$email'";

$result=$conn->query($query);

if ($result->num_rows>0){
  while($rows=$result->fetch_assoc()){
    $count = $result->num_rows; 
    }
  
if ($count== 1){
    if((empty($sname)) || (empty($fname)) || (empty($oname))) {
  echo "Please enter your full name.";
}
else if (strlen($sname) < 3) {
  echo "Name must have atleat 3 characters.";
}


//basic email validation
if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  echo "Please enter valid email address.";
}
else{
   // check email exist or not
  $query = "SELECT email FROM users WHERE email='$email'";
  $result = $conn->query($query);

  if($result->num_rows>0){
    echo  "Provided Email is already in use.";
    die();
  }
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
  $insert = "INSERT INTO users(sname, fname, oname, email, password, designation) VALUES('$sname', '$fname', '$oname', '$email', '$password_en', 'student')";
  $result = $conn->query($insert);
  if($result){

    header("Location: ../login.php");
  }     
  else{
    echo $conn->error;
  }
}

}

}

}
else{
  echo "not a member";
}

  



