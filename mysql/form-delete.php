<?php
require_once("config.php");
$id = $_GET['id'];
if ($id) {
    $delQuery = "DELETE FROM form where id=$id";
   if($con->query($delQuery)){
    $_SESSION['success'] ="Record delete Success.....";
   }else {
    $_SESSION['error']= "Something Wrong.....";
   }
} else {
    $_SESSION["error"]="Something Wrong.Please try again....";
}

header("location:form-list.php");

?>   
  