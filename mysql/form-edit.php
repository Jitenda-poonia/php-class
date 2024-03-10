  <?php
require_once("config.php");

$id = $_GET['id'];


 if($id) {
    $selQuery = "SELECT * FROM form where id=$id";
    $rec = $con->query($selQuery);
    
    if(!$rec->num_rows){
        $_SESSION['error']="Somthing Wrong with id...";
        header("location:form-list.php");
        exit();
        
    }
    $_form = mysqli_fetch_assoc($rec);
        // dd($_form);  
}else {
    $_SESSION['error']="Not id found...";
    header("location:form-list.php");
    exit();
}

?>

<!DOCTYPE html>   
<html lang="en">
<head>
    <title>Add form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

</head>
<style>
    .error{ 
    color:red;  
     }
     
    form{
         background-color:#ff99c2;
         border: 2px dashed black;
    }
    </style>
<body>
    <h2>form update</h2>
    <?php require_once("form_msg.php"); ?>
    <form action="form_update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $_form["id"] ?>">
    
    <table cellpadding="3">
        <tr>
            <td>Name: <span style="color:red">*</span> </td>
            <td> <input type="text" name="first_name" placeholder="jitendra"
              maxlength="30"  value="<?= $_form["first_name"]??''?>" >(max.30 Characters Allowed)
              <?php if(isset($_SESSION["fn_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["fn_error"];
                               unset($_SESSION["fn_error"]);
                            ?>
                        </span>

                   <?php }?>

            
            </td>
             </tr>
        
        <tr>
            <td>Last Name: <span style="color:red">*</span> </td>
            <td> <input type="text" name="last_name" placeholder="poonia" 
             maxlength="30"  value="<?= $_form["last_name"]??''?>" >(max.30 Characters Allowed)  
             <?php if(isset($_SESSION["ln_error"])) {?>
                <span class="error">
                    <?php
                         echo $_SESSION["ln_error"];
                        unset($_SESSION["ln_error"]);
                    ?>

                </span>
                
            <?php } ?>
        
        
           </td>
        </tr>

        <tr>
            <td>Email: <span style="color:red">*</span> </td>
            <td> <input type="email" name="email" placeholder="jp@gmail.com"
                 maxlength="30"  value="<?= $_form["email"]??''?>" > 
                
                 <?php if(isset($_SESSION["email_error"])) {?>
                <span class="error">
                    <?php
                         echo $_SESSION["email_error"];
                        unset($_SESSION["email_error"]);
                    ?>

                </span>
                
            <?php } ?>
          
           
        
           </td>
        </tr>

        <tr>
            <td>Mobile No.: <span style="color:red">*</span> </td>
            <td> <input type="tel" name="mobile" placeholder="7232XXXXX" 
                 maxlength="10"  value="<?= $_form["mobile"]??''?>"> (10 Digit Allowed)
                 <?php if(isset($_SESSION["mob_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["mob_error"];
                               unset($_SESSION["mob_error"]);
                            ?>
                        </span>

                   <?php }?>
        
        
           </td>
        </tr>

        <tr>
            <td>Gender: <span style="color:red">*</span> </td>
            <td> <input type="radio" name="gender" value="m" <?= (($_form["gender"]??'')=="m")? "checked":''?> >Male
                <input type="radio" name="gender" value="f" <?=(($_form["gender"]??'')=="f")?"checked":''?>  >Female
                <input type="radio" name="gender" value="o" <?=(($_form["gender"]??'') =="o")?"checked":''?> >other
                
                <?php if(isset($_SESSION["gender_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["gender_error"];
                               unset($_SESSION["gender_error"]);
                            ?>
                        </span>

                   <?php }?>
             </td>
        </tr>

        <tr>
            <td>DOB: <span style="color:red">*</span> </td>
            <td> 
                <input type="date" name="dob"  value="<?= $_form["dob"]??''?>"> 
                
                <?php if(isset($_SESSION["dob_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["dob_error"];
                               unset($_SESSION["dob_error"]);
                            ?>
                        </span>

                   <?php }?>
        
    
           </td>
        </tr>

        <tr>
            <td>Address: <span style="color:red">*</span> </td>
            <td> 
                <textarea name="address" cols="30" rows="10"  placeholder="dalman"><?= $_form["address"]??'' ?></textarea> 
                
                <?php if(isset($_SESSION["address_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["address_error"];
                               unset($_SESSION["address_error"]);
                            ?>
                        </span>

                   <?php }?>
        
        
        
          </td>
        </tr>

        <tr>
            <td>city: <span style="color:red">*</span> </td>
            <td> 
                <input type="text" name="city" placeholder="Sardarshahar"  value="<?= $_form["city"]??'' ?>" > 
                
                <?php if(isset($_SESSION["city_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["city_error"];
                               unset($_SESSION["city_error"]);
                            ?>
                        </span>

                   <?php }?>
        
        
        
           </td>
        </tr>

        <tr>
            <td>Pincode: <span style="color:red">*</span> </td>
            <td> <input type="tel" name="pincode" placeholder="331403" maxlength="6" value="<?= $_form["pincode"]??'' ?>"> 
        
            <?php if(isset($_SESSION["pincode_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["pincode_error"];
                               unset($_SESSION["pincode_error"]);
                            ?>
                        </span>

                   <?php }?>
        
           </td>
        </tr>

        <tr>
            <td>State: <span style="color:red">*</span> </td>
            <td> <input type="text" name="state" placeholder="Rajasthan" value="<?= $_form["state"]??'' ?>" > 
            
            <?php if(isset($_SESSION["state_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["state_error"];
                               unset($_SESSION["state_error"]);
                            ?>
                        </span>

                   <?php }?>
        
        
        
          </td>
        </tr>

        <tr>
            <td>Country: <span style="color:red">*</span> </td>
            <td> 
                <input type="country" name="country" placeholder="India" value="<?= $_form["country"]??'' ?>" > 
        
                <?php if(isset($_SESSION["country_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["country_error"];
                               unset($_SESSION["country_error"]);
                            ?>
                        </span>

                   <?php }?>
        
        
        
           </td>
        </tr>

        <tr>
            <td> Hobbies: <span style="color:red">*</span> </td>
            <td> 

               <?php
                    $hobbie = explode(",", $_form["hobbies"]);
               ?>
                <input type="checkbox" name="hobbies[]" value="dancing"  <?= (in_array("dancing",$hobbie ))? "checked" : "" ?> >Dancing 
                <input type="checkbox" name="hobbies[]" value="singing"  <?= (in_array("singing",$hobbie))? "checked" : "" ?> >singing 
                <input type="checkbox" name="hobbies[]" value="drawing"  <?= (in_array("drawing",$hobbie))? "checked" : "" ?> >Drawing
                <input type="checkbox" name="hobbies[]" value="sketching"<?= (in_array("sketching",$hobbie))? "checked" : "" ?> >sketching 
                <input type="checkbox" name="hobbies[]" value="other"    <?= (in_array("other",$hobbie))? "checked" : "" ?> >other
                <input type="text" name="other_hobbies" value="<?= $_form["other_hobbies"]??'' ?>">                       
                
                <?php if(isset($_SESSION["hobbies_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["hobbies_error"];
                               unset($_SESSION["hobbies_error"]);
                            ?>
                        </span>

                   <?php }?>

           </td>
        </tr>

        <tr>
            <td> Qualification: <span style="color:red">*</span> </td>
            <td> 
                <?php
                    $qualification = explode(",", $_form["qualification"]);
                ?>
                <input type="checkbox" name="qualification[]" value="10th" <?= (in_array("10th",$qualification))? "checked":"" ?> >High school 
                <input type="checkbox" name="qualification[]" value="12th"   <?= (in_array("10th",$qualification))? "checked":"" ?> >higher school 
                <input type="checkbox" name="qualification[]" value="Graduation"  <?= (in_array("Graduation",$qualification))? "checked":"" ?> >Graduation(Bachelor)
                <input type="checkbox" name="qualification[]" value="post-graduation" <?= (in_array("post-graduation",$qualification))? "checked":"" ?>  >post-graduation 
                <input type="checkbox" name="qualification[]" value="phd" <?= (in_array("phd",$qualification))? "checked":"" ?>>phd
                

                <?php if(isset($_SESSION["qu_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["qu_error"];
                               unset($_SESSION["qu_error"]);
                            ?>
                        </span>

                   <?php }?>
            </td>
        </tr>

        <tr>
            <td>Apply For Course: <span style="color:red">*</span> </td>
            <td> 
              
                <input type="radio" name="course_apply" value="bca" <?= (($_form["course_apply"]??'')=="bca")? "checked":"" ?>>BCA(Bachelor of computer) 
                <input type="radio" name="course_apply" value="bcom"<?= (($_form["course_apply"]??'')=="bcom")? "checked":"" ?> >BCOM(Bachelor of commers)
                <input type="radio" name="course_apply" value="bsc" <?= (($_form["course_apply"]??'')=="bsc")? "checked":"" ?>>BSC
                <input type="radio" name="course_apply" value="ba"  <?= (($_form["course_apply"]??'')=="ba")? "checked":"" ?>>BA
                <input type="radio" name="course_apply" value="mca" <?= (($_form["course_apply"]??'')=="mca")? "checked":"" ?>>MCA
                <input type="radio" name="course_apply" value="mcom"<?= (($_form["course_apply"]??'')=="mcom")? "checked":"" ?> >MCOM
                <input type="radio" name="course_apply" value="msc" <?= (($_form["course_apply"]??'')=="msc")? "checked":"" ?>>MSC 
                <input type="radio" name="course_apply" value="ma"  <?= (($_form["course_apply"]??'')=="ma")? "checked":"" ?> >MA
                

                <?php if(isset($_SESSION["course_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["course_error"];
                               unset($_SESSION["course_error"]);
                            ?>
                        </span>

                   <?php }?>
        
        
            </td>
        </tr>

        <tr>
            <td></td>
            <td> 
                <input type="reset"> 
                <input type="submit" value="update "> 
            </td>
        </tr>

    </table>
   
</form>
 

</body>
</html>   