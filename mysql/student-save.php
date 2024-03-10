<?php
require_once("config.php");
$data = $_POST;
$name = $data["name"];
$email = $data["email"];
$phone = $data["phone"];
$gender = $data["gender"];
$fee    =  $data["fee"];
$address =$data["address"];

$insQuery = "INSERT INTO students(name,email,phone,gender,address,fee) value('$name','$email','$phone','$gender',
'$address', $fee)";
$result = $con->query($insQuery);
dd($result);
if ($con->query($insQuery)) {
    $data['success']="student add success";
    header("location:student-list.php"); 
}

 
 




?>