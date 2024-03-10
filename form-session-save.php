Form submited....
<?php
session_start();
$data = $_POST;
$file = $_FILES;
$isError = false;



$_SESSION["First_name"] = $data["First_name"];
$_SESSION["last_name"] = $data["last_name"];
$_SESSION["mobile"] = $data["mobile"];
$_SESSION["email"] = $data["email"];
$_SESSION["gender"] = $data["gender"];
$_SESSION["gender"] = $data["gender"];

$_SESSION["cutom_date"] = $data["cutom_date"];
$_SESSION["dob_day"] = $data["dob_day"];       
$_SESSION["dob_month"] = $data["dob_month"];
$_SESSION["dob_year"] = $data["dob_year"];
// $_SESSION["DOB"] = $data["dob_day"]."-".$data["dob_month"]."-".$data["dob_year"];

$_SESSION["city"] = $data["city"];
$_SESSION["pincode"] = $data["pincode"];
$_SESSION["state"] = $data["state"];
$_SESSION["country"] = $data["country"];
$_SESSION["address"] = $data["address"];

$_SESSION["hobbies"] = $data["hobbies"];
$_SESSION["other_hobbies"] = $data["other_hobbies"];

$_SESSION["Qualification"] = $data["Qualification"];
$_SESSION["course"] = $data["course"];
 $_SESSION["image"] = $file["image"]["name"];
 $_SESSION["pdf"]   = $file["pdf"];

if($data["First_name"] == ""){
    $isError = true;
    $_SESSION["First_name_error"]= "Name is a required field";
}
if($data["last_name"] == ""){
    $isError = true;
    $_SESSION["last_name_error"]= "last name is a required field";
}
if($data["mobile"] == ""){
    $isError = true;
    $_SESSION["mobile_error"]= "mobile is a required field";
}
if($data["email"] == ""){
    $isError = true;
    $_SESSION["email_error"]= "email is a required field";
}
if($data["gender"]==""){
    $isError = true;
    $_SESSION["gender_error"]= "gender is a required field";
}
if($_SESSION["cutom_date"] == "") {
    $isError = true;
    $_SESSION["date_error"] = "DOB is required field.";
}
if(!($data["dob_day"] && $data["dob_month"] && $data["dob_year"])){
    $isError = true;
    $_SESSION["dob_error"]= "Date Of Borth  is a required field";
}


if($data["city"]==""){
    $isError = true;
    $_SESSION["city_error"]= "city is a required field";
}
if($data["pincode"]==""){
    $isError = true;
    $_SESSION["pincode_error"]= "pincode is a required field";
}
if($data["state"]==""){
    $isError = true;
    $_SESSION["state_error"]= "state is a required field";
}
if($data["country"]==""){
    $isError = true;
    $_SESSION["country_error"]= "country is a required field";
}

if ($data["address"] == "") {
	$isError = true;
	$_SESSION["address_error"] = "Address is a required field";
}

if($data["hobbies"]==""){
    $isError = true;
    $_SESSION["hobbies_error"]= "hobbies is a required field";
}
// if($data["hobbies"]=="other"){
//     $isError = false; 
// }
if($data["other_hobbies"]==""){
       $isError = true;
        $_SESSION["otherhobbies_error"]= "otherhobbies a required field";
       
 }

if($data["Qualification"]==""){
    $isError = true;
    $_SESSION["Qualification_error"]= "Qualification is a required field";
}

if($data["course"]==""){
    $isError = true;
    $_SESSION["course_error"]= "course a required field";
   
}
if($file["image"]["name"]==""){
    $isError = true;
    $_SESSION["image_error"]= "image a required field";
   
}
if($file["pdf"]["name"]==""){
    $isError = true;
    $_SESSION["pdf_error"]= "pdf a required field";
   
}




if($isError){
    header("location:form_session.php");
    exit();
}
// if($isError){
//     header("location:jqform.php");
// }


echo "<pre>";
print_r($data);
//  $data = $_POST;
// echo $data["State"];
//print_r($_GET);

 print_r($file);


// echo "<br>REQUEST<br>";

//print_r($_REQUEST);

// print_r($_SERVER);



