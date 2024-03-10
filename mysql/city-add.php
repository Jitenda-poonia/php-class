<?php
require_once("config.php");
$selQuery = "SELECT * FROM countries";
$countyQuery = $con->query($selQuery);
$selQuery = "SELECT * FROM states";
$stateQuery = $con->query($selQuery);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>city Add</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <style>
        .error{
            color:red;
        }
    </style>
    <h2>City Add</h2>
    <form action="city-save.php" method="post" id="city_form">
        <table>
            <tr>
                <td>Country</td>
                <td>
                    <select name="country_id" id="country_id">
                        <option value="" selected disabled>Select country</option>
                        <?php while($_country= mysqli_fetch_assoc($countyQuery)){ ?>
                            
                            <option value="<?= $_country["id"]?>"><?= $_country["name"] ?></option>
                      <?php  }?>
                       
                   </select>
                   <?php if(isset($_SESSION["country_error"])) { ?>
                    <span class="error">
                        <?php 
                             echo $_SESSION["country_error"];
                             unset($_SESSION["country_error"]);

                        ?>

                    </span>
                    
                 <?php  } ?>

                  
                </td>
            </tr>
            <tr>
                <td>State</td>
                <td>
                    <select name="state_id" id="state_id"> 
                    <!-- <option value="" selected disabled>Select State</option> -->

                       <?php /*while($_state = mysqli_fetch_assoc($stateQuery)){ ?>
                            <option value="<?= $_state["id"] ?>"> <?= $_state["name"] ?></option>
                      <?php  */ ?>
                    
                  
                    </select>
                    <?php if(isset($_SESSION["state_error"])) { ?>
                    <span class="error">
                        <?php 
                             echo $_SESSION["state_error"];
                             unset($_SESSION["state_error"]);

                        ?>
  
                    </span>
                    
                 <?php  } ?>
                </td>
            </tr>
            <tr>
                <td>City</td>
                <td> 
                    <input type="text" name="name" value="<?= $_SESSION["name"]??"" ?>">
                    <?php if(isset($_SESSION["city_error"])) { ?>
                    <span class="error">
                        <?php 
                             echo $_SESSION["city_error"];
                             unset($_SESSION["city_error"]);

                        ?>

                    </span>
                    
                 <?php  } ?>
            
            
               </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select name="status">
                        <option value="" selected disabled >Select Status</option>
                        <option value="1" <?= (($_SESSION["status"]??"")==1)?"selected":"" ?>>Enable</option>
                        <option value="2" <?= (($_SESSION["status"]??"")==2)?"selected":"" ?>>Disable</option>
                    </select>
                    <?php if(isset($_SESSION["status_error"])) { ?>
                    <span class="error">
                        <?php 
                             echo $_SESSION["status_error"];
                             unset($_SESSION["status_error"]);

                        ?>

                    </span>
                    
                 <?php  } ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td> <input type="submit"> </td>
            </tr>
         </table>

    </form>
    <?php
    unset($_SESSION["name"]);
     

    ?>

    <script>
        $(document).ready(function(){
            $("#country_id").change(function(){
                countryID = $(this).val();
                $.ajax({
                    url: 'get-sate.php',
                    method: 'GET',
                  data: {'cnt_id':countryID},
                    success: function(e){
                        console.log(e);

                        $('#state_id').html(e);

                    },
                    error:function(er){
                        console.log(er);
                    }
                    
                });
            });
            // $('#city_form').submit(function(e){
            //     e.preventDefault();
            //     // formData = $(this)

            // });
        });
    </script>
</body>
</html>  