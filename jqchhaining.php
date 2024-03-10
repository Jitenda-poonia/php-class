<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jquery chhaining</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>
    <p>  bs ejjj lsjf sjgsgj sdjsd fsldkjv sdvjsdvks dvlksdvsdlvksldvk slkdv osj</p>
    <button>click here</button>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $("p").css("background-color","red").slideUp(2000).slideDown(1000);
            });
        });
    </script>
</body>
</html>