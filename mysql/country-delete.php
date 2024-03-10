<?php
require_once("config.php");
$id = $_GET["id"];

$delco = "DELETE FROM countries where id=$id";
 $con->query($delco);
   

$deleteState = "DELETE FROM `states` WHERE country_id=$id";
$con->query($deleteState);


$deleteCity = "DELETE FROM `cities` WHERE country_id=$id";
$con->query($deleteCity);


if ($id) {
    
    if ( $con->query($delco)) {
       
    $_SESSION["success"] = "Record Delete Seuccesfuly.";
    }else {
        $_SESSION["error"] = "somethin wrong id";
    }
}else {
    $_SESSION["error"] = "not id found";
}

header("location:country-list.php"); 
?>