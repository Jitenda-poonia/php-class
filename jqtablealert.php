<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jq table alert</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>
    <table id="table-data" border="1" cellspacing="0" cellspacing="0" width="35%">
        <tr>
            <th>Name</th>
            <th>email</th>
            <th><button id="add">+</button></th>
        </tr>
        <tr>
            <td><input type="text" name="name"></td>
            <td><input type="text" name="email"></td>
            <td><button id="remove">-</button></td>
        </tr>
      
      <script>
        $(document).ready(function(){

            function hello(){                               //this function for msg
     
                table =  `<tr>
                   <td><input type="text" name="name"></td>
                   <td><input type="text" name="email"></td>
                   <td><button id="remove">-</button></td>
                </tr>`
            $("#table-data").append(table);
            
            }
            $("#add").click(function(){
                isConfirm = confirm("Are you sure you want to add row ?"); // msg ka function krsne ke kiye
                if(isConfirm){
                    hello();
                }
            });

           
            $("#table-data").delegate("#remove","click" ,function(){
                 isConfirm = confirm("are you sure you want to remove row")
                if(isConfirm){
                    $(this).closest("tr").remove();
                }
                

            });

        });



      </script>

</table>
</body>
</html>