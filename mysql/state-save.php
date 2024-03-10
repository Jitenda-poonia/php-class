<?php
require_once("config.php");

$data = $_POST;
$country_id = $data["country_id"];
$name    = $data["name"];
$status = $data["status"];
$city_name = $data["city_name"];
$city_status = $data["city_status"];

//  $isError = false;

// if ($country=="") {
//     $isError = true;
//     $_SESSION["country_error"]= "Please Select your country.";
// }
// if ($name=="") {
//     $isError = true;
//     $_SESSION["name_error"] ="Please enter your state Name.";
// }
// if ($status=="") {
//     $isError = true;
//     $_SESSION["status_error"]= "Please enter your status";
//  }
// if($isError){
//     header("location:state-add.php");
//     exit();
// }
$stQuery = "INSERT INTO states(country_id,name,status) VALUES($country_id,'$name',$status)";
$con->query($stQuery);
   
$stId = $con->insert_id;

foreach($city_name as $key=> $ctName){
    $ctStatus = $city_status[$key];
    $ctQuery = "INSERT INTO cities(country_id,state_id,name,status) VALUES($country_id,$stId,'$ctName',$ctStatus)";
$con->query($ctQuery);
}
if ($data["save"]) {
   $_SESSION["success"] = "Record Save successfuly";
   header("location:state-list.php");
}  
if ($data["save_new"]) {
    $_SESSION["success"] = "Record Save in State list successfuly";
    header("location:state-add.php");
 }  

// $cityQuery = "INSERT INTO cities(country_id,name,status) VALUES($country_id,'$city_name',$city_status)";
// $con->query($cityQuery );


// if($con->query($inQuery)){

//     $_SESSION["success"] = "Record Save Successfuly.";
//     header("location:state-list.php");
//     exit();
// }else{
//     $_SESSION["error"] = "Record Not Save.";
//     header("location:state-add.php");
//     exit();
// }



?>