<?php
// for($a=1;$a<=20;$a++){
//     if($a>6 && $a<=14 or $a>17 && $a <= 20){
//         continue;
//     }echo "$a <br>";
    
// }echo "$a";    //21
// ====================
// for($a=1;$a<=20;$a++){
//    if($a>6 &&$a<=14){
//     continue;
//    }

//    if($a>17){
//     break;
// }   echo "$a <br>";

// }echo "$a";     //18
// ====================================================

$a =10;
for ($b=1; $b <=10 ; $b++) { 
   $c=$a**$b-1;  
echo "$c<br>";
}
// ======================================
$a =10;
$d=8;
for($b=1;$b<=10;$b++){
    $c= ($a**$b-1)/9;
    $e=$c*$d;
    echo "$e <br>";
}
// ====================================
$a =10;
for ($b=1; $b <=10 ; $b++) { 
   $c=$a**$b;  
echo "$c<br>";
}
// =========================================
?>