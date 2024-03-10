<?php
require_once("../config.php");

$SelQuery = "SELECT * FROM `employe`";
$result = $con->query($SelQuery);
// dd($selData);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable</title>
    <link href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>
    
<h2>Datable ...</h2>
<table id="myTable" class="display">
<thead>
        <tr>
            <th>SR No.</th>
            <th>ID</th>
            <th>Name</th> 
            <th>Email</th>
            <th>Gender</th>
            <th>Hobbie</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $i = 1;
    while($row = mysqli_fetch_assoc($result)){ ?>
    <tr>
    <td><?= $i++ ?></td>
    <td><?= $row["id"] ?></td>
    <td><?= $row["name"] ?></td>
    <td><?= $row["email"] ?></td>
    <td><?= $row["gender"] ?></td>
    <td><?= $row["hobbie"] ?></td>
    
    <td>
      <button id='delete-btn' data-id=<?= $row["id"] ?>>Delete</button>
      <button id="edit-btn" data-editId=<?= $row["id"] ?>>Edit</button>
    </td>
    
    
    </tr>
 <?php } ?> 
       
    </tbody>
</table>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>