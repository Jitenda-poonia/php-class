<?php
session_start();


 echo $_SESSION["Name"] = "choudhary";
  $_SESSION["Nam"] = "jaat" ;
  $_SESSION["Na"] = "boy" ;
  $_SESSION["N"] = "apple" ;
  $_SESSION["m"] = "mango" ;
  $_SESSION["k"] = "orange";


  $_SESSION["email"] = "jitu@gmaiul.com";
  $_SESSION["email2"] = "poonia@gmaiul.com";
  $_SESSION["email3"] = "dalman@gmaiul.com";
  $_SESSION["email4"] = "choudhary@gmaiul.com";


setcookie("TEST-NAME","This is test value",time()+(86400*30),"/");
echo "<pre>";
print_r($_SESSION);
?>





