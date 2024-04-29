<?php 
function checkRequest ($method) {
  if($_SERVER['REQUEST_METHOD'] == "POST") {
    return true;
  }
  return false;
}

function postInput ($name) {
  return trim(htmlentities(htmlspecialchars($_POST[$name])));
}