<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jquery try</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            // $("*").mouseenter(function(){
            //     $(this).hide();
            // })
            // $("*").mouseleave(function(){
            //     $(this).show();
            // })
            // $("p").mousedown(function(){
            //     alert("heoieo");
            // })
        //     $("p").hover(function(){
        //      alert("You entered p1!");
        //    },
        //    function(){
        //      alert("Bye! You now leave p1!");
        //    }); 
       
          //     $("input").focus(function(){
            //            $(this).css("background", "yellow");
            //    });
            //     $("input").blur(function(){
            //      $(this).css("background-color", "green");
            //    });
        //   -------------------------------------------
            $("*").on({
                mouseenter:function(){
                    $(this).css("background-color","red")
                },
                mouseleave:function(){
                    $(this).css("background-color","yellow")
                },
                click:function(){
                    $(this).css("background-color","gray")
                }
            });

                


        });

    </script>
</head>
<body>
 name: <input type="text" ><br>
 last:   <input type="text" >
    <p>dalman</p>
    <p>choudhary</p>
    <h1>uu iugiu uihi uiiu </h1>
    
</body>
</html> 