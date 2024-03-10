<?php
// ============================
// $first = [1, 2, 3, 4, 5];
// $second = [6, 7, 8, 9, 10];
// $output=array_merge($first,$second);
// echo "<pre>";
// print_r($output);
// =================================
$first = [1, 2, 3, 4, 5];
$second = [6, 7, 8, 9, 10];

// $output = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$output=$first;

 foreach($second as $val){
    $output[]=$val;
 }
  echo "<pre>";
 print_r($output);
//  ================================
$first = [1, 2, 3, 4, 5];
$second = [6, 7, 8, 9, 10];
$third =  [11,12,13,14,15];

// $output = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$output=$first;
foreach($second as $val){
    $output[]=$val;
}  
 foreach($third as $val){
    $output[]=$val;
 }
  echo "<pre>";
 print_r($output);

//  ==========================================================  
$a = [10, 20, 30, 40, 50, 60];
$b = [70, 80, 90, 100];
$c = [1, 2, 3, 4, 5];
$d = [11, 12, 13, 14, 15];
$e = [16, 17, 13, 14, 15];
$output = [];

foreach ([$c, $d, $e,$a,$b] as $arr) {
    foreach ($arr as $item) {
      
        $output[] = $item;
        
    } 
}
echo "<pre>";
print_r($output);

?> 