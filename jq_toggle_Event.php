<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jq exercise</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        .hs.active{
            background-color: green;
        }
        .hide.active{
            background-color: red;
        }
        .show.active{
            background-color: blue;
        }
        .btn1.active{
            background-color: brown;
        }
    </style>
</head>
<body>
   <div class="btn1">
   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
   </div>
   
    <button class="hs">hide/show</button>
    <button class="hide">hide</button>
    <button class="show">show</button>

    <script>
        $(document).ready(function(){
            $(".hs").click(function(){
                 $(this).toggleClass("active");
                //  $(this).toggle(1000);

             });
            $(".hs").click(function(){
                 $(".btn1").toggleClass("active");
                //  $(this).toggle(1000);

            });
            $(".hide").click(function(){
                 $(this).toggleClass("active");
            
            });
            $(".show").click(function(){
                 $(".btn1").toggleClass("active");
            
            });
            $(".show").click(function(){
                 $(this).toggleClass("active");
            
            });
            
            $(".hs").click(function(e){
                console.log(e);
                  $(".btn1").slideToggle(1000);

            });
            $(".hide").click(function(){
                  $(".btn1").hide(2000);

            });
            $(".show").click(function(){
                  $(".btn1").show(600);

            });



           
        });
    </script>


 



</body>
</html> 