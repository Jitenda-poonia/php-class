<?php
session_start();
$data = $_POST;
$isError = false;

$_SESSION["email"] = $data["email"];

if($data["email"] =="")
{
    $isError = true;
    $_SESSION["email_error"] = "eamail is required field";
}
if($isError)
{
    header("location:upload_file.php");
}
//echo $data["email"];
//print_r($_GET);
echo "<pre>";
print_r($_POST);


// print_r($_FILES);

// echo "<br>REQUEST<br>";

// print_r($_REQUEST);

// print_r($_SERVER);
?>