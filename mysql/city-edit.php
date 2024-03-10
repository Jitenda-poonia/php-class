<?php
require_once("config.php");

$id = $_GET["id"];

if($id) {
    $selQuery ="SELECT * FROM cities where id=$id";
     $cityQuery = $con->query($selQuery);
    
    if(!$cityQuery->num_rows) {
        $_SESSION['error'] ="something wrong id.";
       header("location:city-list.php");
       exit();
    } 
    $_city = mysqli_fetch_assoc($cityQuery);
    
}else {
    $_SESSION['error']= "id not found";
    header("location:city-list.php");
    exit();

}

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
    <title>city Update</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>
    <style>
        .error{
            color:red;
        }
    </style>
    <h2>City Update</h2>
    <?php require_once("form_msg.php"); ?>
    <form action="city-update.php" method="post">
        <input type="hidden" name="id" value="<?= $_city["id"] ?>">
        <table>
        <tr>
            <td>Country id:</td>
        
             <td> 
                <select name="country_id" id="country_id">

                    <?php while($_country = mysqli_fetch_assoc($countyQuery)){ ?>
                    <option value="<?= $_country["name"] ?>" <?= ($_city["country_id"]??"")==$_country["name"]? "selected":""?> > <?= $_country["name"]?></option>
                    <?php } ?>

                </select>  
            </td>
        </tr>
            <tr>
                <td>State</td>
                <td>
                    <select name="state_id" id="state_id">
                      
                    </select>
                </td>
            </tr>
            <tr>
                <td>City</td>
                <td> 
                    <input type="text" name="name" value="<?= $_city["name"]??''?>"> 
                    <?php if(isset($_SESSION["name_error"])){ ?>
                 <span class="error">
                     <?php
                           echo $_SESSION["name_error"];
                           unset($_SESSION["name_error"]);
                     ?>
                 </span>
                 
                <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>  
                    <select name="status">
                        <option value="" selected disabled >Select</option>
                        <option value="1" <?= (($_city["status"]??'')==1)?"selected":"" ?> >Enable</option>
                        <option value="2" <?= (($_city["status"]??'')==2)?"selected":"" ?> >Disable</option>
                    </select>
                </td>
            </tr>
           
            <tr>
                <td></td>
                <td> <input type="submit" value="update"> </td>
            </tr>
         </table>

    </form>
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
          
        });
    </script>
</body>
</html>  
