<?php
 require_once("../config.php"); 
 $id = $_GET["editId"]??0;
 $sql = "SELECT * FROM `employe` where id=$id";
 $result = $con->query($sql);

echo json_encode(mysqli_fetch_assoc($result));
 
?>    

  
  
 
 
 
 




