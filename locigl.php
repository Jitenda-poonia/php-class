<?php
$x =true;
$y =false;
$x = ($x && $y);//f
 $y= ($x or $y);//f
 $y= ($x && $y);//f
$x= ($x||!$y);//t
// echo $x."<br>".$y;
 echo !$x;

 var_dump (!$x);









?>