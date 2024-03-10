<?php
require_once("config.php");

//totl row
$rowCount = "SELECT * FROM cities";
$row = $con->query($rowCount);
$totalRow = $row->num_rows;
// ------------end----------
// pagination calculation
$pageSize = 5;
$totalPage = ceil($totalRow/$pageSize);
// ------------end--------------

$page = $_GET["page"]??1;
$start = ($page-1)*$pageSize;
// ---------------end-------------------

$cityQuery = "SELECT ct.*,cn.name AS country_name, st.name AS state_name FROM `cities` AS ct 
INNER JOIN `countries` AS cn ON ct.country_id=cn.id INNER JOIN `states` AS st ON ct.state_id=st.id limit $start,$pageSize";
$citiesQuery = $con->query($cityQuery);

// $selQuery = "SELECT * FROM cities";
// $citiesQuery = $con->query($selQuery);
// // dd($citiesQuery);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City list</title>
    <link rel="stylesheet" href="ajax/css/style.css">

</head>

<body>
      
    <h2>City list</h2>
    <?php require_once("form_msg.php"); ?>

    <a href="city-add.php"><button style ="background-color: #ff0066">+City</button> </a>
    <table border="1" cellpadding="0" cellspacing="0" width="50%">
        <th>SR.NO.</th>
        <th>Country</th>
        <th>State</th>
        <th>City Name</th>
        <th>Satuts</th>
        <th>Action</th>

        <?php
        if ($citiesQuery->num_rows) { 
           
        $i = $start+1;
        while($_city = mysqli_fetch_assoc($citiesQuery)){ ?>
        
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $_city["country_name"] ?></td>
            <td><?= $_city["state_name"] ?></td>
            <td><?= $_city["name"] ?></td>
            <td><?= ($_city["status"]==1)?"Enable":"Disable"?></td>
            <td>
               <a href="city-edit.php?id=<?= $_city["id"] ?>"><button>Edit</button></a> ||
               <a href="city-delete.php?id=<?= $_city["id"] ?>" onclick="return confirm('Are you sure you want to delete this record?')"><button>Delete</button></a>
            </td>
        </tr>
            
       <?php } 
          
       }else { ?>
        <tr>
            <td colspan="10" align="center">No record</td>
        </tr>
      <?php }
       ?>

    </table>

    <style>
     .pagination a.disable{
        pointer-events: none;
    }
    </style>

<div class="pagination">
    <?php if ($page > 1) { ?>
        
        <a href="?page=<?= ($page==1)?1:($page-1) ?>">&laquo;</a>
   <?php }
 
  for ($i= 1; $i <= $totalPage; $i++) {  ?>
  <a class="<?= ($page==$i)?'active':'' ?>" href="?page=<?= $i ?>"><?= $i ?></a>
    
   <?php }
  if ($totalPage > $page) { ?>
    
    <a href="?page=<?= $page+1 ?>" class="<?= ($page == $i-1)?'disable':'' ?>">&raquo;</a>
 <?php } ?> 
</div>
     


    
</body>
</html>