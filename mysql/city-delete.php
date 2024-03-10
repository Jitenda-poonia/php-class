<?php
require_once("config.php");
$id = $_GET["id"];
$del = "DELETE FROM cities where id= $id";
if($con->query($del)){
    $_SESSION["success"] = "Record Delete Successfuly";
}else {
    $_SESSION["error"]= "Not Deleted Record.";
}
header("location:city-list.php");
?>