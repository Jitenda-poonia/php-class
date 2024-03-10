<?php
require_once("config.php");

$rowCount = "SELECT * FROM states";
$row = $con->query($rowCount);
$totalRow = $row->num_rows;

$pageSize = 5;

$totalPage = ceil($totalRow/$pageSize);

$page = $_GET["page"]??1;
$start = ($page-1)*$pageSize ;

$selQuery = "SELECT s.*,c.name as country_name FROM states as s INNER JOIN countries as c ON s.country_id  = c.id limit $start,$pageSize";
$stateQuery = $con->query($selQuery);
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>state</title> 
    <link rel="stylesheet" href="ajax/css/style.css">

</head>

<body>
      
    <h2>state list</h2>
    <?php require_once("form_msg.php");?>
    <a href="state-add.php"> <button>+State</button> </a>
    <table border="1" cellpadding="0" cellspacing="0" width="50%">
        <tr>
            <th>SR.NO.</th>
            <th>country Name</th>
            <th>State Name</th>
            <th>Satuts</th>
            <th>Action</th>
        </tr>

        <?php
        if($stateQuery->num_rows){
            
        $i = $start+1;
        while($_state = mysqli_fetch_assoc($stateQuery)){ ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $_state["country_name"] ?></td>
                <td><?= $_state["name"] ?></td>
            <td><?= ($_state["status"]==1)?"Enable":"Disable"?></td>
              <td>
                <a href="state-delete.php?id=<?= $_state["id"]?>" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>||
                <a href="state-edit.php?id=<?= $_state["id"]?>">Edit</a>  
            </td>
        </tr>
            
       <?php } 
        }else { ?>
             <tr>
                <td colspan="12" align="center">No data found</td>
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
        <a href="?page=<?= ($page==1)?1:($page-1) ?>">&laquo;</a>
           <?php 
              for ($i= 1; $i <= $totalPage; $i++){ 
            ?>
        <a class="<?= ($page==$i)?'active':'' ?>" href="?page=<?= $i ?>"><?= $i ?></a>
            
            <?php }
             ?> 
         <a href="?page=<?= $page+1 ?>" class="<?= ($page == $i-1)?'disable':'' ?>">&raquo;</a>
    </div>

</body>
</html>