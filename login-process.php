<?php 
require_once("../app/config.php");
$errors=[];
if(checkRequest("POST")){
        
$email=postInput("email");
$password=postInput("password");

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
  //database
$db=dbRow("user","email",$email);
$passworddb=$db[0]["password"];
if($db){
    if(!$db[0]["email"]==$email){
        $errors[]="This email does not exist";
        }
        elseif(!password_verify($password,$passworddb)){
            $errors[]="The password is wrong";
            echo "The password is wrong";
        }
        setSession("Successlogin","user login Successfully ");
        setSession("Success-login","user login");
        header("location:".URL."/index.php");
}else{
    setSession("errors",$errors);
    header("location:".URL."/app/login.php");
}

}
else{
    echo"requierd method post";
}