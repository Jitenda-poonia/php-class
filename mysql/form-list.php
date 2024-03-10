<?php
require_once("config.php");
$selQuery = "SELECT * FROM form";
$formQuery = $con->query($selQuery);
// dd($formQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysql form</title>
</head>
<style>
    button{
    
    background-color:#adf3d9;
    border-radius 5px;
    margin: 5px;
    border: 1px solid green;
    border-width: 2px;
    
    }
    th{
        background-color:#bbf3f8; 
    }
   
</style>

<body>
    <h2>Mysql form</h2>
    <?php require_once("form_msg.php");?>
    <a href="form-add.php"><button style ="background-color: #ff0066">+New Student</button></a>
    <table border="1" cellspacing="0">
        <tr> 
          
            <th>SR.
                NO.</th>
           <th>First Name</th>
           <th>Last Name</th>
           <th>Email</th>
           <th>Mobile No.</th>
           <th> Gender</th>
           <th>DOB</th>
           <th>Address</th>
           <th>City</th>
           <th>Pin Code</th>
           <th>State</th>
           <th>Country</th>
           <th>Hobbies</th>
           <th>Other Hobbies</th>
           <th>Qualification</th>
           <th>Applied For Course</th>
           <th>Action</th>
        </tr>
         <?php

        if ($formQuery->num_rows) {
            
         $i = 1;
         while ($_form = mysqli_fetch_assoc($formQuery)) { ?>
                <tr> 
                    
                  <td><?=$i++ ?></td>
                  <td><?= $_form["first_name"] ?></td>
                  <td><?= $_form["last_name"] ?></td>
                  <td><?= $_form["email"] ?></td>
                  <td><?= $_form["mobile"] ?></td>
                  <td><?= $_form["gender"] ?></td>
                  <td><?= $_form["dob"] ?></td>
                  <td><?= $_form["address"] ?></td>
                  <td><?= $_form["city"] ?></td>
                  <td><?= $_form["pincode"] ?></td>
                  <td><?= $_form["state"] ?></td>
                  <td><?= $_form["country"] ?></td>
                  <td><?= $_form["hobbies"] ?></td>
                  <td><?= $_form["other_hobbies"] ?></td>
                  <td><?= $_form["qualification"] ?></td>
                  <td><?= $_form["course_apply"] ?></td>
                  <td> 
                  <a href="form-delete.php?id=<?= $_form['id']?>"
                     onclick="return confirm('Are you sure you want to delete this record?')"><button>Delete</button></a>||
                    <a href="form-edit.php?id=<?= $_form['id']?>"><button>Edit</button></a>
                    </td>
                </tr>
            <?php 
            } 
       
        }else { ?>
            <tr>
                <td colspan="30" align="center">Data not found...</td>
            </tr>  
            
       <?php }
        ?>    

    </table>
</body>
</html>