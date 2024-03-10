<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
        /* input:focus-visible, input:active {
            border-color:yellow;
        } */
        input {
            border-color: #979528;
        }

    </style>
</head>
<body>
      
 <form action="form2Save.php" method="post" enctype="multipart/form-data">
   <table cellpadding="5" cellspacing="0">
      <tr>
           <td>Name:</td> 
           <td><input type="text" name="name" placeholder="enter your Name"
           style= "background:green ;color:yellow ;border:2px solid red;" required><span style="color:red">*</span></td>
      </tr>
      <tr>
            <td>Father's:</td>
             <td><input type="text" name="name" placeholder="enter your Father Name" required><span style="color:red">*</span></td>
      </tr>
      <tr>
            <td>Mother's: </td>
           <td><input type="text" name="name" placeholder="enter your Mother Name" required><span style="color:red">*</span></td>
      </tr>
      <tr>
            <td> E-mail: </td>
            <td> <input type="text" name="E-mail" placeholder="enter your E-mail" required><span style="color:red">*</span></td> 
      </tr>
      <tr>
            <td> website: </td>
            <td><input type="text" name="website"><span style="color:red">*</span></td>
      </tr>       
      <tr>
            <td> mobile: </td>
            <td> <input type="text" name="tel" placeholder="enter your mobile nomber"><span style="color:red">*</span></td>
      </tr>  
      <tr>
            <td> Gender: </td>
            <td><input type="radio" name= "gender" value="female" required>female
                <input type="radio" name= "gender"value="male">male
                <input type="radio" name= "gender"value="other" > other <span style="color:red">*</span></td>
      </tr>
         
      <tr>
            <td>Address:</td>
            <td><textarea name="comment" rows=5 cols =40></textarea><span style="color:red">*</span></td>
      </tr> 
      <tr>
             <td>image:</td>
             <td><input type="file" name="image" accept="image/*"></td>
      </tr>  
      <tr>
            <td></td>
            <td><input type="reset"><input type="submit"></td>
            
      </tr>      
      
    

</table>
</form>

</body>
</html>
