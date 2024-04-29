<?php 
function requiredInput ($input) {
    if(!empty($input)){
      return true ;
    }
    return false;
  }
  
  function minInput($input , $length) {
    if(strlen($input) > $length ) {
      return true;
    }
    return false;
  }
  function maxInput($input , $length) {
    if(strlen($input) < $length ) {
      return true;
    }
    return false;
  }
  function filterEmail($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    }
    return false;
  }
  function passwordMatch($password1,$password2){
    if($password1===$password2){
     $passwordnew=   password_hash($password1, PASSWORD_DEFAULT);
     return $passwordnew;
    }
    return false;
  }
  