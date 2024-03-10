<?php
require_once("config.php");

$selQuery = "SELECT * FROM countries";
$countyQuery = $con->query($selQuery);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country</title>
    
    <link href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="ajax/css/style.css">
    
</head>
<body>
    <h2>Country list</h2>
    <?php require_once("form_msg.php"); ?> 
    <a href="country-add.php"><button type="button">Add Country</button></a>
   
    <table id="myTable" class="display">
<thead>
        <th>SR.NO.</th>
        <th>Country Name</th> 
         <th>Satuts</th>
        <th>Action</th>
   
        </thead>
    <tbody>
        <?php
        if($countyQuery->num_rows){
        $i = 1;
        while($_country = mysqli_fetch_assoc($countyQuery)){ ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $_country["name"] ?></td>
            <td><?= ($_country["status"]==1)?"Enable":"Disable"?></td>
            <td>
                <a href="country-edit.php?id=<?= $_country["id"]?>">Edit</a>||
                <a href="country-delete.php?id=<?= $_country["id"]?>" onclick="return confirm('Are you sour you want to delete this record?')">Delete</a>
            </td>
            

        </tr>
            
       <?php } 
        } 
       
       ?>


</tbody>
</table>


<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>   