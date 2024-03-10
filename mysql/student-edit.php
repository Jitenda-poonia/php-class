<?php
require_once("config.php"); 
$id = $_GET['id']??0;
$selQuery ="SELECT * FROM students where id=$id";
$stRec= $con->query($selQuery);
// dd($stRec);
// header("location:student-list.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit Student</title>
</head>
<body>
    <h2>update Student</h2>
</body>
<form action="student-update.php" method="post">
<table cellspacing="5">
    <tr>
        <td>Name:</td>
        <td> <input type="text" name="name"> </td>
    </tr>
    <tr>
        <td>Email:</td>
        <td> <input type="Email" name="email"> </td>
    </tr>
    <tr>
        <td>Phone:</td>
        <td> <input type="tel" name="phone"> </td>
    </tr>
    <tr>
        <td>gender:</td>
        <td> <input type="radio" name="gender" value="m">Male
            <input type="radio" name="gender" value="f">Female
         </td>
    </tr>
    <tr>
        <td>Fee:</td>
        <td> <input type="number" name="fee"> </td>
    </tr>
    <tr>
        <td>Address:</td>
        <td> <textarea name="address" cols="30" rows="10"></textarea> </td>
    </tr>
    <tr>
        <td></td>
       <td> 
            <button type="reset">Reset</button>
            <input type="submit" value="update">
       </td>
    </tr>
</table>
</html>