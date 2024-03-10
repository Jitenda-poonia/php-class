<?php
require_once("config.php");
$data = $_POST;
$id = $data["id"];
$country = $data["country_id"];
$state = $data["state_id"];
$city = $data["name"];
$status= $data["status"];

$isError = false;
if ($city=="") {
    $isError= true;
    $_SESSION["name_error"] = "City Name is Required field.";
}
if ($isError) {
    header("location:city-edit.php?id=".$id);
    exit();
}
 $update = "UPDATE cities SET country_id='$country',state_id='$state',name='$city',status=$status where id=$id";

if($con->query($update)){
    $_SESSION["success"] = "update successfuly.";

    
}else {
    $_SESSION["error"]= "data not update please try again.";
   
}
header("location:city-list.php");
// dd($update);


   ?> 