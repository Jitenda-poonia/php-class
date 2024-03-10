 <?php
require("config.php");
$countryID =  $_GET['cnt_id'];
$stateQuery = "SELECT * FROM `states` where country_id=$countryID";
$stateData = $con->query($stateQuery);

echo '<option value="" selected disabled>Select State</option>';
while ($_state = mysqli_fetch_assoc($stateData)){ ?>
  <option value="<?= $_state['id'] ?>"><?= $_state['name'] ?></option>
<?php
}

?>