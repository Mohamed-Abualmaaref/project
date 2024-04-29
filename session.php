<?php 
function setSession($key,$value) {
  $_SESSION[$key] = $value;
}
function getSession($key) {
  return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
}
function removeSession ($key) {
  unset($_SESSION[$key]);
}