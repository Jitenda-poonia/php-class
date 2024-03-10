   <?php
require_once("../config.php"); 
$search = $_GET["src_data"]??0;

if($search){
  $rowCount = "SELECT * FROM employe where name like '%$search%' or email like '%$search%'";
}
else{
  $rowCount = "SELECT * FROM `employe`";
}
 
//To get total rows count
// $rowCount = "SELECT * FROM `employe`";  
$rowData = $con->query($rowCount);
$totalRow = $rowData->num_rows;
// --------------END--------

// page count  
$pageSize = 5;
$totalPage = ceil($totalRow/$pageSize);
// ------------END--------------
$page = $_GET["page"]??0;

// $start = $page*$pageSize-$pageSize;
 $start = ($page-1)*$pageSize;    


if($search){
  $sql = "SELECT * FROM employe where name like '%$search%' or email like '%$search%' limit $start,$pageSize";
}else{
  $sql = "SELECT * FROM `employe` limit $start,$pageSize";
}

$result = $con->query($sql);
$i = $start+1;

?>
<table cellspacing="0" border="1"cellpadding="3px">
    
  <tr>
      <th>SR No.</th>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Hobbie</th>
      <th>Action</th>
     </tr>
   
  <?php 
  if($result->num_rows) {
    
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
 <?php } 
 
  }else { ?>
  <tr>
    <td align="center" colspan="10">No record at this time</td>
  </tr>
    
 <?php }
 ?>
</table>

<div class="pagination">
  <?php if($page > 1) { ?>
  <a href="javascript:void(0)" class="pages" page-no="<?= $page-1 ?>">&laquo;</a>
  <?php } 
   
  for ($i= 1; $i <= $totalPage; $i++) {  ?>
  <a href="javascript:void(0)" class=pages page-no="<?= $i ?>"><?= $i ?></a>
    
      <?php }
   
   if($totalPage > $page){ ?>
    <a href="javascript:void(0)" class="pages" page-no="<?= $page+1 ?>">&raquo;</a>
    <?php } 
    
  ?>
    
</div>

  

  