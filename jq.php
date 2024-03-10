<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<style>
    .error{ 
    color:red;  
     }
    .green-border{
        /* border-color:yellow; */
        border:4px solid yellow;

    }
    .red-border{
        /* border-color:red; */
        border:4px solid red;
        
    }      
    

    form{
         background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
         border: 2px dashed black;
    }
    </style>
<body>
    <button class="btn" id="button">click heare</button>
    <form action="jq-save.php" method="post" id="my-form" enctype="multipart/form-data" >
<table align= center cellpadding ="5">
<tr>
    <td> Frist Name: <span style = "color:red" >*</span> </td> 
    <td> <input type= "text"  name="First_name" id="name"  placeholder ="jitendra" maxlength="50" 
              value= "<?=( $_SESSION["First_name"]??'')?>" >(Max.50 Characters Allowed)

              <?php if(isset($_SESSION["First_name_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["First_name_error"];
                               unset($_SESSION["First_name_error"]);
                            ?>
                        </span>

                   <?php }?>
    </td>
</tr> 



<tr>
<td>Mobile:<span style = "color:red">*</span></td>
 <td><input type="tel"  name ="mobile" id="mobile" placeholder ="72320xxxx" maxlength="10"  
       value= "<?=( $_SESSION["mobile"]??'')?>">(10 digit Allowed)

       <?php if(isset($_SESSION["mobile_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["mobile_error"];
                               unset($_SESSION["mobile_error"]);
                            ?>
                        </span>

                   <?php }?>
 </td >
</tr>
<tr>
<td>Email: <span style = "color:red">*</span></td>
<td><input type = "email"  name ="email" id= "email" placeholder ="jitendra@gmail.com"
     value= "<?=($_SESSION["email"]??'')?>" >

     
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
<td></td>
   <td> 
   <button type ="reset">Reset</button>&nbsp;&nbsp;
   <input type = "submit" >
 </td>


</tr>
  </table>
    </form> 
<script>
    $(document).ready(function(){
        $("#my-form").submit(function(e){
            formName = $("#name").val();
            formEmail = $("#email").val();
            formMobile = $("#mobile").val();

            
            isError = false;
            if(formName == ""){
                isError = true;
                $("#name").addClass("red-border");  
               
            }

            if(formEmail == ""){
                isError = true;
                $("#email").addClass("red-border");  
               
            }

            if(formMobile == ""){
                isError = true;
                 $("#mobile").addClass("red-border");  
               
            }
            if(isError){
                e.preventDefault();
            }
        });

        $("#name,#email,#mobile").change(function(){
            vall = $(this).val();
            if(vall != ""){
                 $(this).addClass("green-border");
            }else{
                $(this).removeClass("green-border");
            }
        })

        $("#name,#email,#mobile").change(function(){
            vall = $(this).val();
            if(vall = ""){
                $(this).addClass("red-border");
            }
            else{
                $(this).removeClass("red-border");
            }
        })
        $("#name").change(function(){
            formName = $(this).val();

            if(formName == ""){
                $(this).addClass("red-border");
                $(this).removeClass("green-border");
             }else{
                $(this).addClass("green-border");

                 $(this).removeClass("red-border");
            }
            
        });
        
        // $("#email").change(function(){
        //     formEmail = $(this).val();

        //     if(formEmail == ""){
        //         $(this).addClass("red-border");
        //         $(this).removeClass("green-border");
        //      }//else{
        //     //     $(this).addClass("green-border");

        //     //      $(this).removeClass("red-border");
        //     // }

          
        // });
        
        // $("#mobile").change(function(){
        //     formMobile = $(this).val();

        //     if(formMobile == ""){
        //         $(this).addClass("red-border");
        //         $(this).removeClass("green-border");
        //     }//else{
            //     $(this).addClass("green-border");

            //      $(this).removeClass("red-border");
            // }

            //  $(this).attr("id","names");
            // $(this).removeAttr("id");
            // $(this).addClass("red-border");
            // console.log(" called....");
        // });

            



   



    });
</script>
     









  

<?php
unset($_SESSION["First_name"]);
 
unset($_SESSION["mobile"]);
unset($_SESSION["email"]);


?>
</body>
</html> 
