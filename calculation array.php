    <?php
// $input = [
// 	[10, 20, 30],
// 	[40, 50, 60],
// 	[60, 70, 80]
// ];
// //output=[110,140,170]

// for($i=0;$i<count($input);$i++){
// 	$num=0;
// 	foreach($input as $a){
// 		$num+=$a[$i];
// 	}$output[]=$num;
// }echo "<pre>";
// print_r($output);
//  echo "<br>";


// //  ===============================
//Row wise sum

// $input = [
//   [10, 20, 30.10],
//   [40, 50],
//   [60, 70, 80], 
//   [10,10,10,10,10,10] 
// ];
//  $output = [];
// for ($i = 0; $i < count($input); $i++) {
//   $sum = 0;
//   for ($j = 0; $j < count($input[$i]); $j++) {
//       $sum += $input[$i][$j];
//   }
//     $output[] = $sum;
// }
// echo "<pre>";
// print_r($output); 
// //  ========================== ============

// Two array sum and result array
// $a =[10,20,30,40,60];
// $b =[10,20,30];
// $c =[];
// for ($i=0; $i < count($a); $i++) { 
// $c[] = $a[$i]+($b[$i]??0) ;
// } 
// echo "<pre>";
// print_r($c);
// // -----------------------------
// // Two array sum and result whiout arry(simle yog)

// $a =[10,20,30,40,60];
// $b =[10,20,30];

// for ($i=0; $i < count($a); $i++) { 
// $c = 0;
// $c = $a[$i]+($b[$i]??0) ;
// echo "<pre>";
//  echo $c ." ";
// } 
// // ---------------------------
// echo "<br>";
// Two array of total

// $a =[10,20,30,40,60];
// $c =[20,30,40];
// $b=0;
// for ($i=0; $i <count($a) ; $i++) { 
//   $b += $a[$i]+($c[$i]??0);

// }echo $b;
// ================================================
//Miltipul array of  coulm wise sum

// $a = [    
//     [10, 20, 30, 40,90],
//     [50, 60, 70, 80 ],
  
// ];
// // $c = [60, 80, 100, 120, 90];

// $c = [];
// for($i = 0; $i < count($a); $i++) 
// {        
//     for($j = 0; $j < count($a[$i]); $j++)
//     {
//       $c[$j]= ($c[$j]??0) + $a[$i][$j];
//     }
//  }
//  echo "<pre>";
// print_r($c);
// -------------------------------------------------
// 2nd method

// for($i = 0; $i < count($a); $i++) 
// {        $sum=$a[$i];
//     for($j = 0; $j < count($sum); $j++)
//     {
//       $c[$j]= ($c[$j]??0) + $sum[$j];
//     }
//  }
//  echo "<pre>";
// print_r($c);

// // ============================================

// $a = [
//     [10, 20, 30],
//     [60, 40, 50],
//     [50, 10, 90],
//     [1,2,3],
//     [1,2,3],
//     [4,5,6]
//     // [1,2,3]
// ];
// $b = [
//     [70, 80, 90],
//     [40, 50, 60],
//     [10, 20, 30],
//     [1,2,3],
//     [1,2,3]
    
// ];

// // $output = [
// //     [80, 100, 120],
// //     [100, 90, 110],
// //     [60, 30, 120]
// // ];
// $c =[];
// for ($i=0; $i < count($a); $i++) { 
//     // $total = $a[$i];
//     for ($j=0; $j < count($a[$i]); $j++) { 
//         $c[$i][$j]= ($a[$i][$j])+($b[$i][$j]??0);
//     }
// }
// echo "<pre>";
// print_r($c);
// =============================================
// $a = [
//     [10, 20, 30,10],
//     [60, 40, 50,10],
//     [50, 10, 90 ,10]
   
// ];
// $b = [
//     [70, 80, 90,10],
//     [40, 50, 60,10],
//     [10, 20, 30 ,10],
//     [50, 10, 90 ,10]
//     ];
// $c =[];
// for ($i=0; $i < count($b); $i++) { 
//     // $total = $a[$i];
//     for ($j=0; $j < count($b[$i]); $j++) { 
//         $c[$i][$j]= ($a[$i][$j]??0)+($b[$i][$j]);
//     }
// }
// echo "<pre>";
// print_r($c);
// ======================================
// $input=[
//     [10,20,30],
//     [10,20,30],
//     [10,20,30],
//     [10,20,30],    
//     [10,20,30]
    
// ];
//  $b = [];
//  echo "<table border =1 cellspacing=1>";
// for ($i=0; $i < count($input); $i++) {
//  echo "<tr>";

//     for ($j=0; $j < count ($input[$i]); $j++) { 
//         $b[$j]= ($b[$j]??0)+($input[$i][$j]) ;
       
//      echo "<td> $b[$j] </td>";
//      }echo "</tr>";
// }
// echo "</table>";
// echo "<pre>";
//  print_r($b);
// =============================
//  $output=[];
// for ($i=2; $i <=5; $i++) { 
//     for ($j=1; $j <=10; $j++) { 
//       $output[$i][$j] = $i*$j; 
//     }     
// }
// echo "<pre>";
//  print_r($output);
// =======================================
// Calculate Average Grades
$grades = [85, 92, 78, 88, 90];
 $sum=0;
 foreach($grades as $value){
    $sum+=$value;
}
 echo "average grade". $sum/count($grades);
// =============================

?>