<!DOCTYPE html>
<html>
<head>
    <title>Form Page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <form action="form-save.php" method="post" enctype="multipart/form-data">
        Name:<span style="color:red;">*</span> <input type="text" name="name"
         placeholder="Enter your name..." style="background-color:red;color:green;border:1px dotted yellow;" required><br><br>

        Email: <input type="email" name="email"><br><br>

        Phone: <input type="tel" name="phone"><br><br>
        
        Gender: <input type="radio" name="gender" value="m">Male &nbsp;&nbsp;<input type="radio" name="gender" value="f">FeMale<br><br>
        
        Class: <input type="checkbox" name="class[]" value="10th">10th &nbsp;&nbsp;<input type="checkbox" name="class[]" value="12th">12th <br><br>
        
        Address: <textarea name="address" rows="" cols=""></textarea><br><br>
        
        Image: <input type="file" name="image" accept="image/*"><br><br>

        <button type="reset">Reset</button>
        <input type="submit" value="Save">

    </form>
</body>
</html>