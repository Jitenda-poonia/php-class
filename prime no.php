<?php
// $num =88;
// // $b =0;
// for($a = 2;$a < $num ; $a++){
//    if($num%$a==0){
//       $b=1;
//       break;
//    }
//    }
// if ($b==1){
//    echo "not prime";
// }else{
//    echo "prime";
// }
//  ========================================================
echo "<br>";
// for ($i=2; $i <= 100 ; $i++) { 
//    $flag=0;
//    for ($j=2; $j < $i; $j++) { 
//      $ren =$i%$j;
//      if($ren==0)
//      $flag++;
   
//    } if($flag== 0)
//    echo $i." ,"; 
// }
// ============================
echo "<br>";
// } 
for ($i=2; $i <=100; $i++) { 
   $a= true;
      for($j=2; $j < $i; $j++) { 
         if ($i % $j == 0) {
           $a=false;
           break;
      }         
      }

      if($a){
         echo $i." ";
      }
}




?>