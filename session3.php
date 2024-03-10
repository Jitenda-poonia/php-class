<?php
session_start();


  $_SESSION["Name"] = "ramdev";
  $_SESSION["Nam"] = "houdhary" ;
  $_SESSION["Na"] = "girls" ;
  $_SESSION["N"] = "banana" ;
  $_SESSION["m"] = "lady" ;
  $_SESSION["k"] = "ora" ;


  $_SESSION["email"] = "pitu@gmaiul.com";
  $_SESSION["email2"] = "pooja@gmaiul.com";
  $_SESSION["email3"] = "dal@gmaiul.com";
  $_SESSION["email4"] = "choudharyjaat@gmaiul.com";


setcookie("TEST-NAME","This is test value",time()+(86400*30),"/");

?>