<?php
require_once("config.php");

$data = $_POST;

$name = $data["name"];
$status = $data["status"];


$name_state = $data["name_state"];

$name_status = $data["name_status"];

$isError = false;
$_SESSION["name"] = $data["name"];
$_SESSION["status"] = $data["status"];

if ($data["name"] == "") {
  $isError = true;
  $_SESSION["name_error"] = "country name is required field";
}
if ($data["status"] == "") {
  $isError = true;
  $_SESSION["status_error"] = "status is required field";
}
if ($isError) {
  header("location:country-add.php");
  exit();
}


$co_Query = "INSERT INTO `countries`(name,status) VALUES('$name', $status)";
if ($con->query($co_Query)) {


  $country_id = $con->insert_id;

  foreach ($name_state as $key => $st_name) {

    $st_status = $name_status[$key];

    $stateQuery = "INSERT INTO states (country_id,status,name) values($country_id,$st_status,'$st_name')";
    $con->query($stateQuery);
  }

  if ($data["save"]) {
    $_SESSION["success"] = "Record Save Successfuly.";
    header("location:country-list.php");
  } else {
   
    $_SESSION["success"] = "Record Save in country list Successfuly.";
    header("location:country-add.php");
  }


} else {
  $_SESSION["error"] = "Record Not Save.";
  header("location:country-add.php");
  exit();
}


?>