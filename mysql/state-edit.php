<?php
require_once("config.php");
$id = $_GET["id"]??0;
// dd($id);
$selSt = "SELECT * FROM states where id=$id";
$stateQuery = $con->query($selSt);

$_state = mysqli_fetch_assoc($stateQuery);

$selCn = "SELECT * FROM countries";
$countyQuery = $con->query($selCn);

$selCity = "SELECT * FROM cities where state_id=$id";
$ctQuery = $con->query($selCity);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>State update</title>
</head>
<body>
    <style>
        .error{
            color:red;
        }
    </style>
    <h2>State update</h2>
    <form action="state-update.php" method="post">
        <input type="hidden" name="id" value="<?= $_state["id"] ?>">
    <table>
       <tr>
            <td>Country id:</td>
        
             <td> 
                <select name="country_id">

                    <?php while($_country = mysqli_fetch_assoc($countyQuery)){ ?>
                    <option value="<?= $_country["id"] ?>" <?= $_state["country_id"] == $_country["id"]? "selected":""?> ><?= $_country["name"]?></option>
                    <?php } ?>

                </select> 
               
            </td>
        </tr>
       
            
       
        <tr>
            <td>State Name:</td>
            <td> 
                <input type="text" name="name" value="<?= $_state["name"] ?>"> 
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
            <td>Status:</td>
            <td> 
               <select name="status">
                  <option value="" selected disabled>Select</option>
                  <option value="1" <?= $_state["status"]==1 ? "selected":"" ?> >Enable</option>
                  <option value="2" <?= $_state["status"]==2 ? "selected":""?> >Disable</option>
               

               </select>
              
            </td>
        </tr>
        

        <tr>
    <td>city</td>
    <td>
    
        <table id="table-data">
            <tr>
           
               <th>Name</th>
               <th>Status</th>
               <td>
                   <button type="button" class="add">+</button>
               </td>
            </tr>
            
            
                 <?php  while($_city = mysqli_fetch_assoc($ctQuery)) { ?>
            
            <tr>
                <td>
                    <input type="hidden" name="cityId[]" value="<?= $_city["id"] ?>">
                  
                    <input type="text" name="city_name[]" value="<?= $_city["name"] ?>">
                </td>
                <td>
                    <select name="city_status[]">
                        <option value="">Select</option>
                        <option value="1" <?= $_city["status"]==1 ? "selected":"" ?> >Enable</option>
                        <option value="2" <?= $_city["status"]==2 ? "selected":"" ?> >Disable</option>
                    </select>
                </td>
                <td><button type="button" class="remove">X</button></td>

            </tr>
            <?php } ?>
           
        </table>
    </td>
</tr>    

        <tr>
            <td></td>
            <td>
                <input type="reset" value="Reset">
                <input type="submit" value="update"> 
            </td>
        </tr>




    </table>
    </form>
    <script>
        $(document).ready(function(){
            $(".add").click(function(){
                table=` <tr>
                <td><input type="text" name="city_name[]"></td>
                <td>
                    <select name="city_status[]">
                        <option value="">Select</option>
                        <option value="1">Enable</option>
                        <option value="2">Disable</option>
                    </select>
                </td>
                <td><button type="button" class="remove">X</button></td>
               
            </tr>`;
            $("#table-data").append(table);
            });
            $("#table-data").delegate(".remove","click",function(){
                $(this).closest("tr").remove();
             
             });
        });
    </script>
    
</body>
</html>