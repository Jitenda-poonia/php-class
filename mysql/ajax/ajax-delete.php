<?php
require_once("../config.php");
$emply_id = $_GET['id'];

$del = "DELETE FROM `employe` where id=$emply_id";
$con->query($del);

//  if($con->query($del)){
//     echo 1;
//  }else {
//     echo 0;
//  }


?>