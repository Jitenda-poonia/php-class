<?php
require_once("config.php");

$data = $_POST;
$file = $_FILES;
$isError = false;
// dd($other_hobbies);
$fn    =  $data["first_name"];
$ln    =  $data["last_name"];
$email =  $data["email"] ;
$mob   =  $data["mobile"];    
$gender =  $data["gender"];    
$dob    =  $data["dob"];     
$address =  $data["address"];   
$city    =  $data["city"];     
$pin     =  $data["pincode"];   
$state   =  $data["state"];     
$country =  $data["country"];
$hobi    = implode(",",$data["hobbies"]??[]); 
$other_hobbies = $data["other_hobbies"];
$qu   =    implode(",",$data["qualification"]??[]);
$course =  $data["course"]; 


 $_SESSION["first_name"] =     $data["first_name"];
 $_SESSION["last_name"]  =     $data["last_name"];
 $_SESSION["email"]      =     $data["email"] ; 
 $_SESSION["mobile"]     =     $data["mobile"];     
 $_SESSION["gender"]     =     $data["gender"];      
 $_SESSION["dob"]        =     $data["dob"];     
 $_SESSION["address"]    =     $data["address"];      
 $_SESSION["city"]       =     $data["city"];     
 $_SESSION["pincode"]    =     $data["pincode"];      
 $_SESSION["state"]      =     $data["state"];     
 $_SESSION["country"]    =     $data["country"];      
 $_SESSION["hobbies"]    =     $data["hobbies"];      
 $_SESSION["other_hobbies"]  = $data["other_hobbies"];
 $_SESSION["qualification"]  = $data["qualification"]; 
 $_SESSION["course"]         = $data["course"]; 

 if($data["first_name"] == ""){
    $isError = true;
    $_SESSION["fn_error"]= "Name is a required field";
 }
if($data["last_name"] == ""){
    $isError = true;
    $_SESSION["ln_error"]= " last Name is a required field";  
}
if($data["email"] == ""){
    $isError = true;
    $_SESSION["email_error"]= "Email is a required field";
}
if($data["mobile"] == ""){
    $isError = true;
    $_SESSION["mob_error"]= "Mobile No. is a required field";
}
if($data["gender"] == ""){
    $isError = true;
    $_SESSION["gender_error"]= "Gender is a required field";
}
if($data["dob"] == ""){
    $isError = true;
    $_SESSION["dob_error"]= "DOB is a required field";
}
if($data["address"] == ""){
    $isError = true;
    $_SESSION["address_error"]= "Address is a required field";
}
if($data["city"] == ""){
    $isError = true;
    $_SESSION["city_error"]= "city is a required field";
}
if($data["pincode"] == ""){
    $isError = true;
    $_SESSION["pincode_error"]= "pincode is a required field";
}
if($data["state"] == ""){
    $isError = true;
    $_SESSION["state_error"]= "state is a required field";
}
if($data["country"] == ""){
    $isError = true;
    $_SESSION["country_error"]= "country is a required field";
}
if($data["hobbies"] == ""){
    $isError = true;
    $_SESSION["hobbies_error"]= "hobbies is a required field";
}
// $a = 2;
// if($a){
//     $data["hobbies"] == "";
//      $isError = true;
//     $_SESSION["hobbies_error"]= " atleast two hobbies is a required field";
// } 
if($data["qualification"] == ""){
    $isError = true;
    $_SESSION["qu_error"]= "Qualification is a required field";
}
if($data["course"] == ""){
    $isError = true;
    $_SESSION["course_error"]= "course is a required field";
}

// echo "<pre>";
// print_r($data); 
// print_r($file);
if($isError){
    header("location:form-add.php");
    exit();
}

$insQuery = "INSERT INTO form(first_name, last_name, email, mobile, gender,
 dob, address, city, pincode, state, country,hobbies,other_hobbies,qualification,course_apply) 
 values('$fn','$ln','$email','$mob','$gender','$dob','$address',
 '$city',$pin,'$state','$country','$hobi','$other_hobbies','$qu','$course')";

if($con->query($insQuery)){
    unset($_SESSION["first_name"]);
    unset($_SESSION["last_name"]);  
    unset($_SESSION["mobile"]);
    unset($_SESSION["email"]);
   
    unset($_SESSION["dob"]);
    unset($_SESSION["gender"]); 
     unset($_SESSION["city"]);
    unset($_SESSION["state"]);
    unset($_SESSION["pincode"]);
    unset($_SESSION["country"]);
    unset($_SESSION["address"]);
    unset($_SESSION["hobbies"]);
    unset($_SESSION["other_hobbies"]);
    unset($_SESSION['qualification']);
    unset($_SESSION['course']);
    $_SESSION['success'] = "form create success....";
    header("location:form-list.php");
}else {
    $_SESSION["error"] = "something Wrong....";
    header("location:form-add.php");

}


?>