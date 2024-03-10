<?php
//Use of array in bigest value:
$input = [10, 30, 1500, 45, 4400, 800 ];
$a = $input[0];
for($i = 0; $i < count($input); $i++) {
    if($input[$i] > $a) {
        $a = $input[$i];
       
      }
  }
  echo $a;
  echo "<br>";
  
//  ===================================== 
//Use of array in smallest value:

$input = [150, 7, 15, 45, 4  , 10];
$a = $input[0];
for($i = 0; $i < count($input); $i++) { 
  if($input[$i] < $a) {
      $a = $input[$i];
  }  
}
echo $a ; 
echo "<br>";
// =============================
//   Find the Maximum and Minimum Values in one solutions:
// $numbers = array(45, 17, 32, 88, 5, 72);
// $max =$min= $numbers[0];
// foreach ($numbers as $val) {
//     if ($val > $max) {
//         $max= $val;
//     }if ($val < $min) {
//       $min = $val ;
//     } 
// }
//  echo "Maximum value $max <br> Minimum value $min";


?>