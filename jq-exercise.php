<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jquery exercise</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        #box{
            padding: 4px;
            width:70%;
            height: 250px;
            border:2px solid #22bbcc;
            overflow: auto; 
            background-color:lightgreen;
           }
           .test{
            padding: 4px;
            border:2px solid #223344;
           }
           .jp{
            color:#9b7b20;
           }
           #p{
            display:none;
            color:#bb7b22;
            border:2px solid blue;
            background-color:lightyellow;
           }
    </style>
</head>
<body>
<!-- <h1 id="jp">hii,jp</h1>
    <div id="box" claas="test">
        <h2>box1</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa quasi officia id magni sed vel quae dicta illo sint esse exercitationem omnis ipsam assumenda architecto saepe voluptatem et perspiciatis tempora at, sequi ratione! Eligendi quod asperiores veniam esse commodi amet ut nulla dolorum? Cum, assumenda similique. Quam, harum! Rerum, laboriosam quaerat consectetur praesentium beatae cum?</p>
</div> -->
<!-- <ul id="list">
    <li class="test">orange</li>
    <li> purpal</li> 
    <li> banana</li>
    <li> appple</li>
    <li> app</li>
    <li> a</li>
    <li class="test"> grapes</li>
</ul> -->
Name:<input type="text" id="name"><br>
Email:<input type="text" id="email"><br>
<p id="p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum nobis debitis sunt facilis, eaque soluta sint architecto accusamus itaque libero eligendi, maxime possimus rem tempora dolorum incidunt odio, cum nihil molestias amet necessitatibus minima vel deleniti. Aperiam itaque sed ea aspernatur eius excepturi rerum sequi quos sunt eos, id non.</p>
<button id="btn">save</button>
    <script>
        $(document).ready(function(){
            // $("ul li:lt(3)").css("border","2px dotted pink")
            //$(window).scroll(functtion(){
            //console.log(u r scrolling);
            //}); 
            //$(window).resize(functtion(){
            //console.log(u r resizing);
            //});
            // $("#btn").click(function(){
            //     $("#box h2 ,p").attr("class","jp"); 
                
        //     // });
        //    $("#name").val("jitendra");
        //    $("#email").val("poonia");
        $("#btn").click(function(){
             $("#p").slideDown();
        });
        $("#btn").dblclick(function(){
            //  $("#p").slideUp();
            //  $("#p").slideToggle();
           
        });
       
            
        
        });
    </script> 
</body>
</html>