<?php
require_once("../config.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
   <h1>php with  Ajax</h1>
      <div id="msg"></div>
   
     
      <!-- <tr>
            <td><input type="button" id="load-button" value="Load Data"></td>
        </tr>
 -->

    <form id="form-submit">
    <input type="hidden" name="edit_id" id="edit_id">

        <table>
            <tr>
                <td>Name:</td>
                <td>
                    <input type="text" name="name" id="name">
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>
                    <input type="email" name="email" id="email">
                </td>
              </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" class="gender" value="m">Male
                    <input type="radio" name="gender" class="gender" value="f">Female
                </td>
            </tr>
            <tr>
                <td>Hobbie:</td>
                <td>
                    <input type="checkbox" name="hobbie[]" class="hobbie" value="study">study
                    <input type="checkbox" name="hobbie[]" class="hobbie" value="web-devolping">Web devolping
                    <input type="checkbox" name="hobbie[]" class="hobbie" value="dancing">Dancing
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Save" id="submit" style="border-radius:15px;width:40%; 
                    color:blue;cursor: pointer" >
                    
                </td>
            </tr>
        
        </table>
       </form>

       <label>Search:</label>
            <input type="search" id="search" name="search">   
            

    <div id="table-data"></div>         
    

    <Script>
        $(document).ready(function(){
            // pagination
            $("body").delegate(".pages","click",function(){
                pageno = $(this).attr('page-no');
                data(pageno);
                
            });
          function data(page = 1){
            // search 
                var srchData = $("#search").val();
            $.ajax({
                    url:'ajax-load.php',
                    type: 'GET',
                    data: {
                        //for search data
                        src_data: srchData,
                        // for pagination
                        page:page
                    },
                    
                     success:function(data){
                        // alert(data);
                        $("#table-data").html(data); 
                        //pagination css
                        $('a[page-no='+page+']').addClass("active");  
                    }  
                });

            }
        data();
        
             $("#search").keyup(function(){
                data();
            });

        $("#form-submit").submit(function(e){
            e.preventDefault();
            var insertData = $(this).serialize ();
            // alert(insertData);
            //  console.log(insertData);
             
            var name = $("#name").val();
            var email = $("#email").val();
            
            if(name == "" || email == "" || !$('.gender').is(':checked')){
                // $("#msg").fadeIn();  
                $("#msg").addClass("error").removeClass("success").html("All field are required.").fadeIn();
                setTimeout(function(){
                    $('#msg').fadeOut("slow");
                     
                 }, 5000);
             }else{
                $.ajax({
                url:"ajax-insert.php",
                method:"POST",
                data:insertData ,
                success:function(record){
                    $("#form-submit").trigger("reset");

                    // $('#msg').fadeIn();
                    $('#msg').addClass('success').removeClass('error').html(record).fadeIn(); 
                  
                 setTimeout(function(){
                    $('#msg').fadeOut("slow");
                    
                 }, 6000);
                 data();
                 },
                 error:function(er){
                    console.log(er);
                 }

            });
             }
            // var insertData = $(this).serializeArray();
            // $.ajax({
            //     url:"ajax-insert.php",
            //      method:"POST",
            //     data:insertData,
            //     success:function(record){
            //     //   alert(record); 
            //       data();
            //       $("#form-submit").trigger("reset");
            //      }
            // }); 
        
        });
        $("body").delegate("#delete-btn", "click",function(){
            var DelRec = $(this).attr('data-id');
            // alert(DelRec);
            $.ajax({
                url:"ajax-delete.php",
                method:"GET",
                data:{id:DelRec},
                success:function(){
                  data();


                }
            });

        });
  
       
         $("body").delegate("#edit-btn", "click", function(){
            var editid = $(this).attr('data-editId');
            //alert(editid);
            $.ajax({
                url:'ajax-edit.php',
                type:'GET',
                data: {'editId': editid},
                success: function(st){
                    // alert(st);                    //output-> string
                     editData = JSON.parse(st);
                    //  alert(editData);               // output-> oject
                      
                    $("#edit_id").val(editData.id)
                    $("#name").val(editData.name); 
                    $("#email").val(editData.email);
                     $(".gender").val(editData.gender);
                     $(".hobbie").val(editData.hobbie);
                    //  $(".gender").attr('checked', 'checked');
                     $(".hobbie").attr('checked', 'checked');
                    //  alert(editData.gender);
                    // test = editData.gender;
                    // if(gender == "m") {
                    //  $(".gender").attr('checked', 'checked');
                    // }elseif(gender == "f") {
                    //  $(".gender").attr('checked', 'checked');
                    // }
                    
                }
            });
        });


        });
    </Script>

</body>
 </html>       