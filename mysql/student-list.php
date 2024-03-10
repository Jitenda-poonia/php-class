 <?php
require_once("config.php");
 
// total record
$rowCount = "SELECT*FROM `students`"; 
$totlRow = $con->query($rowCount);
$totalRec = $totlRow->num_rows;
//-----------End-----------------
 
// total page
$pageSize = 3;
 $totalPage = ceil($totalRec/$pageSize);
// ----------------end-----------------

$page = $_GET["page"]??1;

$start = ($page-1)*$pageSize;

$selQuery = "SELECT*FROM `students` limit $start, $pageSize"; 
$studentQuery = $con->query($selQuery);
// dd($studentQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List from database</title>
    <link rel="stylesheet" href="ajax/css/style.css">
</head>
<body>
    <h2> Students list</h2>
    <?php require_once("student-msg.php");?>
    <a href="student-add.php">+ Add Student</a> 

    <table border="1" cellspacing="0" width=50%>
        <tr>
            <th>Id</th>
            <th>Sr.no.</th>
            <th>Name </th>
            <th>email </th>
            <th> phone</th>
            <th>gender </th>
            <th> fee</th>
              <th> address</th>
              
              <th>Create</th>
              <th>Update</th>
              <th>Action</th>


        </tr>
        <?php
        if($studentQuery->num_rows){
            $i = $start+1;
            while($_student = mysqli_fetch_assoc($studentQuery))
            {
                // echo "<pre>";
                // print_r($_student);   
                // die;
                ?>
                <tr>
                    <td><?= $_student['id'] ?> </td>

                    <td><?= $i++ ?></td>
                    <td><?= $_student['name'] ?> </td>
                    <td><?= $_student['email'] ?> </td>
                    <td><?= $_student['phone'] ?></td>
                    <td><?= $_student['gender'] ?></td>
                    <td><?= $_student['fee'] ?> </td>
                    <td><?= $_student['address'] ?> </td>
                    <td><?= $_student['create_at'] ?> </td>
                    <td><?= $_student['update_at'] ?> </td>
                    <td>
                     
                    <a href="student-delete.php?id=<?= $_student['id']?>"
                     onclick="return confirm('Are you sure you want to this record');">Delete</a>||
                    <a href="student-edit.php?id=<?= $_student['id']?>">Edit</a>
                    </td>
                </tr>
                <?php
            
            }
        }else{ ?>
                  
                <tr>
                   <td colspan="12" align="center">No data found</td>
                </tr>
                <?php
            }
        
        ?>

    </table>

<div class="pagination">
  <a href="?page=<?= ($page==1)?1:($page-1) ?>">&laquo;</a>
  <?php 
  for ($i= 1; $i <= $totalPage; $i++) {  ?>
  <a class="<?= ($page==$i)?'active':'' ?>" href="?page=<?= $i ?>"><?= $i ?></a>
    
   <?php }
  ?> 
    <a href="?page=<?= $page+1 ?>">&raquo;</a>
</div>
</body>
</html>