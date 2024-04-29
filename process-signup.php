<?php
require_once("../app/config.php");

$errors=[];
if(checkRequest("POST")){
$username=postInput("username");
$email=postInput("email");
$password=postInput("password");
$password_confirmation=postInput("password_confirmation");
//username
if(!requiredInput($username)){
  $errors[]="requierd username";
}
elseif(!minInput($username,3)){

$errors[]="username must be greater then 3";
}
elseif(!maxInput($username,30)){

$errors[]="username must be smaller then 30";
}

//email
if(!requiredInput($email)){
  $errors[]="requierd email";
}
elseif(!filterEmail($email)){
 
  $errors[]="required most be email";
}
//password
if(!requiredInput($password)){
  $errors[]="requierd password";
}
elseif(!minInput($password,8)){

$errors[]="password must be greater then 8";
}
elseif(!maxInput($password,50)){

$errors[]="password must be smaller then 50";
}
//password_confirmation
if(!requiredInput($password_confirmation)){
  
  $errors[]="requierd password_confirmation";
}
elseif(!minInput($password_confirmation,8)){

$errors[]="password_confirmation must be greater then 8";
}
elseif(!maxInput($password_confirmation,50)){
$errors[]="password_confirmation must be smaller then 50";
}

//password macth
if(!passwordMatch($password,$password_confirmation)){
  
  $errors[]=" not password match";
}

$emailMatch=dbRow("user","email",$email);
if($emailMatch){
  $errors[]="This email already exists";
}
if(!requiredInput($errors)){
$passwordnew=passwordMatch($password,$password_confirmation);
  dbInster('user',["name"=>"$username","email"=>"$email","password"=>"$passwordnew"]);
  setSession("Success-singup","Added data successfluy");
  header("location:".URL."/app/login.php");
}
else{
  setSession("errors",$errors);
  header("location:".URL."/app/signup.php");
}












}

else{
  echo("required method post");
}

