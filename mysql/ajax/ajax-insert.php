<?php
require_once("../config.php");


$id = $_POST["edit_id"]??"";
$name = $_POST["name"]??'';
$email = $_POST["email"]??'';
$gender = $_POST["gender"]??'';
$hobbie = $_POST["hobbie"]??[];
$hby = implode(",",$hobbie);

if($id){
$update = "UPDATE `employe` SET name='$name',email='$email',gender='$gender',hobbie='$hby' where id= $id";
$con->query($update);
} else {
    $sql = "INSERT INTO `employe` (name,email,gender ,hobbie) values ('$name','$email','$gender','$hby')";
    if($con->query($sql)){
        echo "Hii,".$name.",your record is save successfuly";
    }else {
        echo "can't save record.";
    }
}
?>

















 


