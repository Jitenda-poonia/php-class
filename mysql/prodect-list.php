<?php
require_once("config.php");
$selQuery ="SELECT*FROM prodects";
$prodectQuery = $con->query($selQuery);
//  dd($prodectQuery);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prodect List</title>
</head>
<body>
    <h2>Prodect list</h2>
    <table border="1" cellspacing="0" width="90%">
    <tr>
    <th>SR.No.</th>
    <th>Product Name</th>
    <th>Product Price</th>
    <th>Product Id</th>
    <th>Product Weight</th>
    <th>Product Size</th>
    <th>Product Made</th>
    <th>Product Stock</th>
    <th>Product Thumb</th>
    <th>Product SQ</th>
    <th>Product Location</th> 
    <th> Where Product Deliver</th> 
    <th>Iteam Delivered</th> 

    <th>Action</th>
    <th>create</th>
    <th>Update</th>
    </tr>
<?php
 if ($prodectQuery->num_rows) {
    $i=1; 
    while($prodect = mysqli_fetch_assoc($prodectQuery))
    { 
        // dd($prodect); 
        // echo "<pre>";
        // print_r($prodect);
        // echo $prodect["prodectName"];
        // $i++;
        ?>
        <tr> 
             <td><?= $i++ ?></td>
            <td><?= $prodect["prodectName"]?></td>
            <td><?= $prodect["prodectPrice"]?></td>
            <td><?= $prodect["prodectId"]?></td>
            <td><?= $prodect["prodectWeight"]?></td>
            <td><?= $prodect["prodectSize"]?></td>
            <td><?= $prodect["prodectMade"]?></td>
            <td><?= $prodect["prodectStock"]?></td>
            <td><?= $prodect["prodectThumb"]?></td>
            <td><?= $prodect["protdectSq"]?></td>
            <td><?= $prodect["prodectLoction"]?></td>
            <td><?= $prodect["ProdectDeliver"]?></td>
            <td><?= $prodect["IteamDeliverd"]?></td>
            <td><a href="">Edit || Delete</a></td>
            <td><?= $prodect["creat_at"]?></td>
            <td><?= $prodect["update_at"]?></td>
           
        </tr>
    <?php
    }
    
 }else { ?>
       <tr> 
        <td  colspan='15' align="center">data not found</td>
       </tr>
    <?php }
 

?>
   
</table>
</body>
</html>