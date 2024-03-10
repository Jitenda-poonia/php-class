<?php
require_once("config.php");
$data = $_POST;
$id = $data["id"];
$country = $data["country_id"];
$name = $data["name"];
$status = $data["status"];

$ct_id = $data["cityId"]??[];
// dd($city_id);
$Idimplod = implode(",",$ct_id);

$city_name = $data["city_name"];
$city_status = $data["city_status"];



// $isError = false;

// if ($name=="") {
//     $isError = true;
//     $_SESSION["state_error"] = "Please enter your state name.";
// }

// if ($isError) {
//     header("location:state-edit.php?id=".$id);
//     exit();
// }


 $update = "UPDATE states SET country_id=$country,name='$name',status = $status where id=$id";
 $con->query($update);
if(empty($ct_id)){
    $deleteQuery = "DELETE FROM `cities` WHERE state_id=$id";
    $con->query($deleteQuery);

} else {
    $deleteQuery = "DELETE FROM `cities` WHERE id NOT IN($Idimplod) AND state_id=$id";
    $con->query($deleteQuery);

}
  
       

 foreach ($city_name as $key => $ctName) {
    $ctId = $ct_id[$key]??0;
    $ctStatus = $city_status[$key]; 
   if($ctId){
    $city_update = "UPDATE `cities` SET name='$ctName', status=$ctStatus where id=$ctId";
    $con->query($city_update);
    
   } else{
    $inCity = "INSERT INTO `cities`(country_id,state_id,name,status) VALUES ($country,$id,'$ctName',$ctStatus)";
    $con->query($inCity);
   }
   
 }
 
if($id){
    if($con->query($update)){
        $_SESSION["success"] = "Record Update Successfuly";
    }else {
        $_SESSION["eror"] = "Record not update with wrong id";
    }
     
}
else {
    $_SESSION["error"] ="rocord not update."; 
}
 header("location:state-list.php");
 

?>