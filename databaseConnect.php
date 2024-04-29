<?php 
$conn = mysqli_connect('localhost',"root","","users");
if(!$conn) {
  echo("error".mysqli_connect_error());
}
function dbInster ( $tabel , $data) {
  global $conn ;
  $keys = array_keys($data);
  $keys = "".implode(",",$keys) . "";
  $values = array_values($data);
  $values = "'".implode("','",$values) . "'";
  $sql = "INSERT INTO $tabel($keys) VALUES($values)";
  try {
    $result = mysqli_query($conn,$sql);
  }catch(mysqli_sql_exception $e) {
    die("inster error : " . $e->getMessage());
  }
}

function dbRow ($table , $filed , $value) {
  global $conn ;
  $sql = "SELECT * FROM $table WHERE $filed = '$value'";
  try {
    $result = mysqli_query($conn,$sql);
    $data = [] ;
    while($row =mysqli_fetch_assoc($result)) {
      $data []=$row; 
    }
    return $data ;
  }catch(mysqli_sql_exception $e) {
    die("select error".$e->getMessage());
  }
}