<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<style>
    #error{
        color:red;
        background-color:#efdcdd;
        padding: 10px;
        margin: 1px;
        display:none;
        position: absolute;
        right: 61%;
        top: 15px:
    }
    #success{
        color: green;
        background-color: #def1d8;
        padding: 5px;
        margin: 1px;
        display:none;
        position: absolute;
        right: 62%;
        top: 55px;

    }
    .delete-btn{
        background-color:red;
        border: 0;
        padding: 3px 10px;
        border-radius:3px;
        cursor: pointer;
    }
</style>
 
<h1>Add record with php & Ajax</h1>

<div id="error"></div>
<div id="success"></div>

<form id="addform">
<table cellspacing="0">
      
        <tr>
               <td>Name:</td>
               <td><input type="text" id="name" name="name"></td> 
               
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" id="email" name="email"></td>
        </tr>

        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender" class="gender" value="f">Female
                <input type="radio" name="gender" class="gender" value="m">Male
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Save" id="save-button"></td>
        </tr>
        
        <tr></tr>
        <tr>
        <td></td>
            <td id="table-data"></td>
        </tr>

</table>
</form> 

    <script>
        $(document).ready(function(){
            function laodtable(){
                $.ajax({
                    url:"ajax-load.php",
                    type:"POST",
                    success:function(data){
                        $("#table-data").html(data);
                    }
                });
                }
               
               laodtable(); 
            
               $("#save-button").on("click",function(e){
               
                e.preventDefault(); 
                   var name = $("#name").val();
                   var email = $("#email").val();
        
               if (name == "" || email =="" || !$('input:radio[name:gender]').is(":checked")){
                 $("#error").html("All fields are required.").slideDown();
                $("#success").slideup();
                
               }
               
                $.ajax({
                    url:"ajax-insert.php",
                    type:"POST",
                    data:{nam:name,gmail:email,gndr:gender},
                    success:function(data){ 
                        if(data == 1){
                            laodtable();

                            $("#addform").trigger('reset');
                            $("#success").html("Data insert successfuly.").slideDown();
                           

                        }else{
                            
                            $("#error").html("All fields are required.").slideDown();
                            
                        }
                        
                      }
                });

               });
              $(document).on("click",".delete-btn", function(){
                if (confirm("Are you sure you want to delete this record?")) {
                    
                
                  var employId = $(this).data("id");
                
                 var DelRec = this;  
                $.ajax({ 
                    url:"ajax-delete.php",
                    type:"POST",
                    data:{id:employId},
                    success:function(data){
                        if(data == 1){
                            $(DelRec).closest("tr").fadeOut();
                            
                        }else{
                            $("#error").html("can't Delte this record").slideDown();
                        }

                    }

                });
            }
              });
            
        });
    </script>
 <body>  
    
</body>
</html>