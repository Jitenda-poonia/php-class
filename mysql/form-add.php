<?php
require_once("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    

</head>
<style>
    .error{ 
     color:red;  
     }
     .red-border{
        border: 3px solid  red;
        
        
    }
     
    form{
         background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
         border: 2px dashed black;
    }
    </style>
<body>
    <h2>Add form</h2>
    <?php require_once("form_msg.php"); ?>
<form action="form_save.php" method="post"  id="form"  enctype="multipart/form-data">
    <table cellpadding="5">
        <tr>
            <td>Name: <span style="color:red">*</span> </td>
            <td> <input type="text" name="first_name" placeholder="jitendra" id="fn"
                 maxlength="30"  value="<?= $_SESSION["first_name"]??''?>" >(max.30 Characters Allowed)
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
            <td> <input type="text" name="last_name"  placeholder="poonia" id="ln"
             maxlength="30"  value="<?= $_SESSION["last_name"]??''?>" >(max.30 Characters Allowed)  
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
            <td> <input type="email" name="email" id="email" placeholder="jp@gmail.com"
                 maxlength="30"  value="<?= $_SESSION["email"]??''?>" > 
                
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
            <td> <input type="tel" name="mobile" id="mobile" placeholder="7232XXXXX" 
                 maxlength="10"  value="<?= $_SESSION["mobile"]??''?>"> (10 Digit Allowed)
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
            <td> <input type="radio" name="gender" value="m" <?= (($_SESSION["gender"]??'')=="m")? "checked":''?> >Male
                 <input type="radio" name="gender" value="f" <?= (($_SESSION["gender"]??'')=="f")?"checked":''?>  >Female
                 <input type="radio" name="gender" value="o" <?= (($_SESSION["gender"]??'') =="o")?"checked":''?> >other
                
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
                <input type="date" name="dob" id="dob"  value="<?=$_SESSION["dob"]??''?>"  > 
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
                <textarea name="address" cols="30" rows="10"  placeholder="dalman"><?=$_SESSION["address"]??'' ?></textarea> 
                
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
                <input type="text" name="city" placeholder="Sardarshahar"  value="<?=$_SESSION["city"]??'' ?>" > 
                
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
            <td> <input type="tel" name="pincode" placeholder="331403" maxlength="6" value="<?=$_SESSION["pincode"]??'' ?>"> 
        
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
            <td> <input type="text" name="state" placeholder="Rajasthan" value="<?=$_SESSION["state"]??'' ?>" > 
            
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
                <input type="country" name="country" placeholder="India" value="<?=$_SESSION["country"]??'' ?>" > 
        
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
                <input type="checkbox" name="hobbies[]" value="dancing"  <?= (in_array("dancing" , ($_SESSION['hobbies'] ?? []))) ? "checked" : "" ?> >Dancing 
                <input type="checkbox" name="hobbies[]" value="singing"  <?= (in_array("singing", ($_SESSION['hobbies'] ?? []))) ? "checked" : "" ?> >singing 
                <input type="checkbox" name="hobbies[]" value="drawing"  <?= (in_array("drawing" , ($_SESSION['hobbies'] ?? []))) ? "checked" : "" ?> >Drawing
                <input type="checkbox" name="hobbies[]" value="sketching"<?= (in_array("sketching",($_SESSION['hobbies'] ?? []))) ? "checked" : "" ?> >sketching 
                <input type="checkbox" name="hobbies[]" value="other"    <?= (in_array("other", ($_SESSION['hobbies'] ?? []))) ? "checked" : "" ?> >other
                <input type="text" name="other_hobbies" value="<?=$_SESSION['other_hobbies']??'' ?>">                       
                
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
                <input type="checkbox" name="qualification[]" value="10th" <?= (in_array("10th",($_SESSION["qualification"]??[])))? "checked":"" ?> >High school 
                <input type="checkbox" name="qualification[]" value="12th"   <?= (in_array("10th",($_SESSION["qualification"]??[])))? "checked":"" ?> >higher school 
                <input type="checkbox" name="qualification[]" value="Graduation"  <?= (in_array("Graduation",($_SESSION["qualification"]??[])))? "checked":"" ?> >Graduation(Bachelor)
                <input type="checkbox" name="qualification[]" value="post-graduation" <?= (in_array("post-graduation",($_SESSION["qualification"]??[])))? "checked":"" ?>  >post-graduation 
                <input type="checkbox" name="qualification[]" value="phd" <?= (in_array("phd",($_SESSION["qualification"]??[])))? "checked":"" ?>>phd
                

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
                <input type="radio" name="course" value="bca" <?= (($_SESSION["course"]??'')=="bca")? "checked":"" ?>>BCA(Bachelor of computer) <br>
                <input type="radio" name="course" value="bcom"<?= (($_SESSION["course"]??'')=="bcom")? "checked":"" ?> >BCOM(Bachelor of commers)<br>
                <input type="radio" name="course" value="bsc" <?= (($_SESSION["course"]??'')=="bsc")? "checked":"" ?>>BSC<br>
                <input type="radio" name="course" value="ba"  <?= (($_SESSION["course"]??'')=="ba")? "checked":"" ?>>BA<br>
                <input type="radio" name="course" value="mca" <?= (($_SESSION["course"]??'')=="mca")? "checked":"" ?>>MCA<br>
                <input type="radio" name="course" value="mcom"<?= (($_SESSION["course"]??'')=="mcom")? "checked":"" ?> >MCOM<br>
                <input type="radio" name="course" value="msc" <?= (($_SESSION["course"]??'')=="msc")? "checked":"" ?>>MSC<br> 
                <input type="radio" name="course" value="ma"  <?= (($_SESSION["course"]??'')=="ma")? "checked":"" ?> >MA
        
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
            <td> <input type="reset"> 
             <input type="submit"> </td>
        </tr>

    </table>
</form>
<script> 
        $(document).ready(function(){
            $("#form").submit(function(e){
                 isError = false;
                 Name = $("#fn").val();
                 lastn = $("#ln").val();
                 formEmail = $("#email").val();
                //  formMobile = $("#mobile").val();
                //  formAddress = $("#mobile").val();


                 
                 if(Name == ""){
                     isError = true;
                     $("#fn").addClass("red-border");  
                    
                 }
                 if(lastn == ""){
                     isError = true;
                     $("#fn").addClass("red-border");  
                    
                 }
                 if(formEmail == ""){
                     isError = true;
                     $("#fn").addClass("red-border");  
                    
                 }
               
                 
     
                 if(isError){
                     e.preventDefault();
                 }
           });  

                $("#fn,#ln,#email").change(function(){
                    vall = $(this).val();
                    if(vall == ""){
                        $(this).addClass("red-border");
                    }else{
                        $(this).removeClass("red-border");
                    }
                });
        
          
        }); 
    </script> 
 <?php

         
         unset($_SESSION["first_name"]);
         unset($_SESSION["last_name"]);
         unset($_SESSION["mobile"]);
         unset($_SESSION["email"]);
        
         unset($_SESSION["dob"]);
         unset($_SESSION["gender"]); 
          unset($_SESSION["city"]);
         unset($_SESSION["state"]);
         unset($_SESSION["pincode"]);
         unset($_SESSION["country"]);
         unset($_SESSION["address"]);
         unset($_SESSION["hobbies"]);
         unset($_SESSION["other_hobbies"]);
         unset($_SESSION['qualification']);
         unset($_SESSION['course']);



?>
</body>
</html>

