<?php
require_once("config.php");
$selQuery = "SELECT * FROM countries";
$countyQuery = $con->query($selQuery);

?>                                   
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .error{
            color:red; 
        }
     </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>State Add</title>
</head>
<body>
    <h2>State & city Add</h2>
    <?php require_once("form_msg.php");?>
    <form action="state-save.php" method="post">
    <table>
       <tr>
            <td>Country:</td>
        
             <td> 
                <select name="country_id">

                    <option value="" selected disabled>Seclect Country</option>
                    <?php while($_country = mysqli_fetch_assoc($countyQuery)){ ?>
                    <option value="<?= $_country["id"] ?>"><?= $_country["name"]?></option>
                     <?php } ?>

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
            <td>State Name:</td>
            <td> 
                <input type="text" name="name" value= "<?= $_SESSION["name"]?? null ?>">
                <?php if(isset($_SESSION["name_error"])) { ?>
                    <span class="error">
                        <?php 
                             echo $_SESSION["name_error"];
                             unset($_SESSION["name_error"]);

                        ?>

                    </span>
                    
                 <?php  } ?>
            
            
            </td>
        </tr>
        <tr>
            <td>Status:</td>
             <td>
                <select name="status">
                    <option value="" selected disabled>Select Status</option>
                    <option value="1" <?= (($_SESSION["status"]??"")==1)? "selected":"" ?>>Enable</option>
                    <option value="2" <?= (($_SESSION["status"]??"")==2)? "selected":"" ?>>Desable</option>
                </select>
                <?php if(isset($_SESSION["status_error"])){ ?>
                <span class="error">
                    <?php
                          echo $_SESSION["status_error"];
                          unset($_SESSION["status_error"]);
                    ?>
                </span>
                
               <?php } ?>
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
            
            <tr>
                <td><input type="text" name="city_name[]"></td>
                <td>
                    <select name="city_status[]">
                        <option value="">Select</option>
                        <option value="1">Enable</option>
                        <option value="2">Disable</option>
                    </select>
                </td>
               
            </tr>
        </table>
    </td>
</tr>
     


        <tr>
            <td></td>
            <td>
                <input type="reset" value="Reset"> 
                <input type="submit" value="save" name="save"> 
                <input type="submit" value="save & new" name="save_new">
            </td>
        </tr>



 
    </table>
    </form>
    <?php
    unset($_SESSION["country_id"]);
    unset($_SESSION["name"]);
    unset($_SESSION["status"]);
    


    ?>

    <script>
        $(document).ready(function(){
            $(".add").click(function(){
                table = `<tr>
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