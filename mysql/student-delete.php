<?php
require_once("config.php");

$id = $_GET['id'];

$delQuery = "DELETE FROM Students where id=$id";
$con->query($delQuery);
header("location:student-list.php");

?>