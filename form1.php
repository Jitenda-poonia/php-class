<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document uplod</title>

    <style>
        form{
          
            background: linear-gradient(to bottom, #34aaff 30%, #ff88ee 100%);
         border: 2px dashed black;
    
        }

    </style>
</head>
<body>
<form action = "form1-save.php" method ="post" anctype= "multipart/form-data">
 <table  cellpadding=5px>
 <tr>
        <td>Name: <span style="color:red" >*</span></td>
        <td>
            <input type="text" name="name" placeholder="jitender" maxlength="50" required>  Maximum 50 characters Allowed
        </td>
    </tr> 
    
    <tr>
        <td>Last Name: <span style="color:red" >*</span> </td></td>
        <td>
           <input type="text" name="lastname" placeholder="poonia" maxlength="20" required>  Maximum 20 characters Allowed
        </td>
    </tr>
    
    <tr>
        <td> Email: <span style="color:red" >*</span> </td>
        <td>
           <input type="text" name="email" placeholder="Enter your email" value="<?= ($_SESSION["email"]??"") ?>" >
           
           <?php if(isset($_SESSION["email_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["email_error"];
                               unset($_SESSION["email_error"]);   
                            ?>
                        </span>

            <?php }?>
        </td>
    </tr> 
    
    <tr>
        <td> Mobile: <span style="color:red" >*</span>  </td>
        <td>
           <input type="text" name="mobile"  placeholder="Enter your  mobile"  maxlength="10" required> 10 Digit Allowed 
        </td>
    </tr> 
    
    <tr>
        <td>  Gender: <span style="color:red" >*</span> </td>
        <td>
            <input type=radio name="gender" value="m" required>Male
            <input type=radio name="gender" value="f">Female
            <input type=radio name="gender" value="o">Transgender
        </td>
    </tr>
    
    <tr>
        <td>State:<span style="color:red" >*</span>  </td>
        <td>
           <input type="text" name="State"  placeholder="Enter your  State"  maxlength="20" required> Maximum 20 characters Allowed
        </td>
    </tr>

    <tr>
        <td>city:<span style="color:red" >*</span>  </td>
        <td>
           <input type="text" name="city"  placeholder="Enter your  city"  maxlength="20",required> Maximum 20 characters Allowed
        </td>
    </tr>
    <tr>
        <td>Pincode:<span style="color:red" >*</span>  </td>
        <td>
           <input type="text" name="pincode"  placeholder="Enter your pincode"  maxlength="6",required>6 Digits Allowed
        </td>
    </tr>

<tr>
    <td></td>
  <td> <input type="submit"> 
      <input type="reset">
  </td>


</tr>
   
    </table>
</form>
<?php 
unset($_SESSION["email"]);
?> 
</body>
</html>
