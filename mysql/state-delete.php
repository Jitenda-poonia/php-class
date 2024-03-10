<?php
require_once("config.php");
$id = $_GET["id"];
$delQuery = "DELETE FROM states where id=$id";
$con->query($delQuery);

$deleteCity = "DELETE FROM `cities` WHERE state_id=$id";
$con->query($deleteCity);

if ($id) {
   
  if ($con->query($delQuery)) {
    $_SESSION['success']="Delete successfuly.";
  }else {
    $_SESSION['error']= "Something wrong please try again";
  }
}else {
    $_SESSION['error']= "Id not found";
}






header("location:state-list.php");



?>