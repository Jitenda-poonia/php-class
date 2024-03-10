<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jquery animastion</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<style>
    p{
   
      background-color: red;
      color: #ffffaa;
      overflow: auto;
      
    }
</style>
</head>
<body>
<button id="an">animastion</button>
   <p>hii,jitendra poonia <br> u r most welcome in jquery </p>
   
    <script>
        $(document).ready(function(){
            $("#an").click(function(){
                // $("p").animate({
                //     marginLeft: '75%',
                //     height:'170px',
                //     width:'170px',
                //     opacity:0.5
                //     // ------------------
                //     height:'toggle'
                // });
                // // ----------------------
                p = $("p");
                p.animate({height: '100px', opacity: '0.4'}, "100");
                p.animate({width: '200px', opacity: '0.8'}, "400");
                p.animate({height: '300px', opacity: '0.4'}, "120");
                p.animate({width: '370px', opacity: '0.8'}, "fast");
                p.animate({width:'toggle'}, "fast");
                p.animate({height:'toggle'}, "fast");
                p.animate({marginLeft:'30%'}, "slow");
                p.animate({fontSize: '3em'}, "slow");
                // --------------------------------------------------------------
                //    $("p").hide(1000,function(){
                //     alert("this message hide");
                //    });  
                // --------------------------------------------------
                // $("p").hide(1000);
                //     alert("this message hide");
                
                
             });

        });
    </script>
</body>
</html>