 <?php
require_once("config.php");

$data = $_POST;
//  dd($data);
// $file = $_FILES;
$isError = false;
 
$id = $data['id'];
$fn =  $data["first_name"];
 $ln  = $data["last_name"];
 $email = $data["email"] ;
 $mob   = $data["mobile"];    
 $gender = $data["gender"];    
 $dob = $data["dob"];     
 $address = $data["address"];   
 $city = $data["city"];     
 $pin = $data["pincode"];   
 $state  = $data["state"];     
 $country = $data["country"];

 $hobi =  implode(",",$data["hobbies"]??[]); 
 $other_hobbies = $data["other_hobbies"];

 $qu =    implode(",",$data["qualification"]??[]);
 $course =  $data["course_apply"]; 
 

if($data["first_name"]== ""){
    $isError = true;
    $_SESSION["fn_error"]= "Name is a required field";
 }
if($data["last_name"]== ""){
    $isError = true;
    $_SESSION["ln_error"]= " last Name is a required field";
}
if($data["email"] == ""){
    $isError = true;
    $_SESSION["email_error"]= "Email is a required field";
}
if($data["mobile"]== ""){
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
// $a = count($data["hobbies"]);

if($data["hobbies"] == ""){
    $isError = true;
    $_SESSION["hobbies_error"]= "hobbies is a required field";
}
if($data["qualification"] == ""){
    $isError = true;
    $_SESSION["qu_error"]= "Qualification is a required field";
}
if($data["course_apply"] == ""){
    $isError = true;
    $_SESSION["course_error"]= "course is a required field";
}


if($isError){
    header("location:form-edit.php?id=".$id);
exit(); 
}



$update = "UPDATE form SET first_name='$fn', last_name='$ln', email='$email', mobile='$mob', gender='$gender',
dob='$dob', address='$address', city='$city', pincode=$pin, state='$state', 
country='$country', hobbies='$hobi', other_hobbies='$other_hobbies', qualification='$qu', course_apply='$course' where id=$id"; 

//  $con->query($update);
// //  dd($update);

if($con->query($update)){
   
    $_SESSION['success']="Record update successfuly";
}else{
    $_SESSION['error']="Something is wrong data not update";
}


header("location:form-list.php");


?> 