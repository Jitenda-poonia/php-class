       <h1> datatype</h1>
<?php
$x="jitendra";
var_dump($x);
echo"---------------&ndsp;";
echo gettype($x);
echo"<br>";
$x=100;
var_dump($x);
echo"---------------&ndsp;";
echo gettype($x);
echo"<br>";

$x=1314.69;
var_dump($x);
echo"---------------&ndsp;";
echo gettype($x);
echo"<br>";

$x=true;
var_dump($x);
echo"---------------&ndsp;";
echo gettype($x);
echo"<br>";

$x=null;
var_dump($x);
echo"---------------&ndsp;";
echo gettype($x);
echo"<br>";
$x=[12,655,"5678","ttt"];
var_dump($x);
echo"---------------&ndsp;";
echo gettype($x);
echo"<br>";
echo pi();
echo"<br>";

// echo $studentName=" radhe";
echo $class_student_name=" radhe";
// $student_name=" radhe";
// $studentNameTeacher=" radhe";
echo"<br>";
//  $a=$b=100;
list($a,$b ,$c,$d)=[10,20 ,"tt","hh"];
 echo $a;
echo"<br>",$b;
echo"<br>",$c;
echo"<br>",$d;
 

?>