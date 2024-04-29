<?php 
session_start();
define ("MAIN_PATH",dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
define("URL","http://localhost/project/");
require_once("databaseConnect.php");
require_once("request.php");
require_once("validation.php");
require_once("session.php");



