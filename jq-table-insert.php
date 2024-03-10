<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jq table insert</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

   
</head>
<body>
     <table id="data-table" border="1" width="400" cellspacing="0">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>MOBILE:</th>
            <th>class:</th>
            <th><button class="add_more">+</button></th>
            
        </tr>
        <tr>
            <td><input type="text" name="name"></td>
            <td><input type="email" name="email"></td>
            <td><input type="mobile" name="mobile"></td>
            <td><input type="text" name="class"></td>
            <td><button class="remove">X</button></td>
            
            
        </tr>
    </table>
    <script>
         $(document).ready(function(){
            $(".add_more").click(function(){
                    table = '<tr>\
                    <td><input type="text" name="name"></td>\
            <td><input type="mobile" name="mobile"></td>\
            <td><input type="mobile" name="mobile"></td>\
            <td><input type="text" name="class"></td>\
            <td><button class="remove">X</button></td>\
                </tr>';
               $("#data-table").append(table); //prepend => top 
                //   $("data-table").html(table);  

    
            });
            // $(".remov").click(function(){
                  
            //    $(this).closest("tr").remove();
    
            // });
            $("#data-table").delegate(".remove","click",function(){
                $(this).closest("tr").remove();
            })

  
          

         });


              
    </script> 


</body>
</html>