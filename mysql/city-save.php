<?php
require_once("config.php");
$data = $_POST;
 $country = $data["country_id"];
 $state = $data["state_id"];
 $name = $data["name"];
 $status = $data["status"];


 $isError = false;
 
 if ($country=="") {
   $isError = true;
   $_SESSION["country_error"] = "Select your country.";
 }
 if ($state=="") {
    $isError = true;
    $_SESSION["state_error"] = "Select your state.";
  }
  if ($name=="") {
    $isError = true;
    $_SESSION["city_error"] = "city name is requird field.";
  }
  if ($status=="") {
    $isError = true;
    $_SESSION["status_error"] = "Select your status.";
  }
  if($isError) {
   header("location:city-add.php");
   exit();
  }
$inQuery = "INSERT INTO cities(country_id,state_id,name,status) VALUES('$country','$state','$name',$status)";

if ($con->query($inQuery)) {
    // unset($_city["country_id"]);
    // unset($_city["state_id"]);
    // unset($_city["name"]);
    // unset($_city["status"]);
   $_SESSION['success']= "add successfuly.";
   header("location:city-list.php");
   exit();
}else{
    $_SESSION["eror"]="dada not updateded.";
    header("location:city-add.php");
    exit();
}



?>