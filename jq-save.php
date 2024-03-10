<?php
session_start();
$data = $_POST;
// $file = $_FILES;
$isError = false;
$_SESSION["First_name"] = $data["First_name"];
$_SESSION["email"] = $data["email"];
$_SESSION["mobile"] = $data["mobile"];


if($data["First_name"] == ""){
    $isError = true;
    $_SESSION["First_name_error"]= "Name is a required field";
}

if($data["mobile"] == ""){
    $isError = true;
    $_SESSION["mobile_error"]= "mobile is a required field";
}
if($data["email"] == ""){
    $isError = true;
    $_SESSION["email_error"]= "email is a required field";
}


if($isError){
    header("location:jq.php");
}






echo "<pre>";

print_r($data);
?>