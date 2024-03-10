<?php
require_once("config.php");
$data = $_POST;
$id = $_GET['id']??0;


 $name = $data["name"];
$email = $data["email"];
$phone = $data["phone"];
$gender = $data["gender"];
$fee    =  $data["fee"];
$address =$data["address"];

$updQuery = "UPDATE students SET name='$name', email='$email', phone='$phone',
             gender='$gender',address='$address',fee=$fee where id=$id";
 $con->query($updQuery);
header("location:student-list.php");
//  print_r($updQuery ); 


?>
