<?php 
require_once("../app/config.php");
if(session_destroy()){
    header("location:".URL."/index.php");
}