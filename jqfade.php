<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>
    <div id="d1" style="border: 2px dashed red;background-color:blue;width: 100px; height: 100px;display:none"></div><br>
    <div id="d2" style="border: 2px dashed yellow;background-color:red;width: 100px; height: 100px;display:none"></div><br>
    <div id="d3" style="border: 2px dashed pink;background-color:green;width: 100px; height: 100px;display:none"></div>
<button id= "fin">fadein</button>
<button id= "fout">fadeout</button>
<button id= "ft">fadetoggle</button>
<button id= "fto">fadeinTo</button>
 <script>
    $(document).ready(function(){
        $("#fin").click(function(){
            $("#d1").fadeIn();
            $("#d2").fadeIn("slow");
            $("#d3").fadeIn(3000);

        });
        $("#fout").click(function(){
            $("#d1").fadeOut("fast");
            $("#d2").fadeOut("slow");
            $("#d3").fadeOut(4000);

        });
        $("#ft").click(function(){
            $("#d1").fadeToggle();
            $("#d2").fadeToggle("slow");
            $("#d3").fadeToggle(2000);

        });
        $("#fto").click(function(){
            $("#d1").fadeTo("slow",0.20);
            $("#d2").fadeTo("slow",0.4);
            $("#d3").fadeTo(3000 ,0.7);

        });
    });
    </script>   
    
</body>
</html>