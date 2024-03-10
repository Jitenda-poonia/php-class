<?php
require_once("config.php");

$data = $_POST;


$id = $data["id"];
$name = $data["name"];
$status = $data["status"];

$name_state = $data["name_state"] ?? [];
$name_status = $data["name_status"] ?? [];
$st_id = $data["state_id"] ?? [];

$idImpoled = implode(",", $st_id);
// dd($idImpoled); 

// $isError = false;
// $_SESSION["name"] = $data["name"];
// $_SESSION["status"] = $data["status"];

// if ($data["name"]=="") {
//    $isError = true;
//    $_SESSION["name_error"]= "country name is required field";
// }
// if ($data["status"]=="") {
//     $isError = true;
//     $_SESSION["status_error"]= "status is required field";
//  }
//  if($isError){
//     header("location:country-edit.php?id=".$id);
// exit(); 
// }


$co_Query = "UPDATE `countries` SET name='$name', status=$status where id=$id";
$con->query($co_Query);

if (empty($st_id)) {
    $deleteQuery = "DELETE FROM `states` WHERE country_id=$id";

} else {
    $deleteQuery = "DELETE FROM `states` WHERE id NOT IN($idImpoled) AND country_id=$id";

}

$con->query($deleteQuery);



foreach ($name_state as $key => $st_name) {

    $state_id = $st_id["$key"] ?? "";

    $state_status = $name_status["$key"];
    if ($state_id) {
        $st_Query = "UPDATE `states` SET name='$st_name', status= $state_status where id=$state_id";
        $con->query($st_Query);
    } else {
        $inSate = "INSERT INTO states (name,country_id,status) VALUES ('$st_name',$id,$state_status)";
        $con->query($inSate);

    }

}


header("location:country-list.php");









?>