<style>
.success{
    width:20%;
    padding: 5px 10px;
    background-color:#adf3d9;
    border-radius 5px;
    margin: 20px 10px;
    border: 1px solid green;
}
.error{
    width:20%;
    padding: 5px 10px;
    background-color:#adf3d9;
    border-radius 5px;
    margin: 20px 10px;
    border: 1px solid red;


}

</style>



<?php

if (isset($_SESSION["success"])) { ?>
    <div class="success">
        <?php
          echo $_SESSION["success"];
          unset($_SESSION["success"]);
       ?>
    </div>
<?php } ?>

<?php if (isset($_SESSION["error"])) { ?>
    <div class="error">
       <?php   echo $_SESSION["error"];
          unset($_SESSION["error"]);
        ?> 
    </div>     
<?php } ?>

