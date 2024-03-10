<?php
// $a=[1=> 12,13,45,0 ];
// echo $a[4];
//     echo "<pre>";
//     $a[]=5;
//     $a[]=788;
//     $a[]=99;
//     $a[]=989;
//     unset($a[6]);
// print_r ($a);
// ==================================
//  $a=[ 
//     [22,23,24,25,26],
//     [27,28,29,40]
// ];
// $a[]= [46,4,6] ;
// echo "<pre>";
// unset($a[2][0]);

// print_r($a);

// $a[0][]=55;
// $a[1][]=59;
// $a[2][]=99;
// print_r($a[0]);
// echo $a[0][2] . "<br>";echo $a[1][2];
// ================================
// $a=[11,12,13,14,77,889,99];
// for ($i=0; $i < count($a); $i++) {    
//     echo $a[ $i] ."<br> ";     
// }

// // =======================================
// $a=[11,12,13,14,77,889,99];
// echo count($a) ."<br>";
// echo sizeof($a);
// echo "<br>";
// // ==========================================

// $a=["jp","poonia" ,"uti","jgkg", "jp","poonia"];
//     for ($i=0; $i < count($a); $i++) { 
//     echo $a[$i] ."<br> ";
// }
// echo "<pre>";
// print_r(array_count_values($a));
// // ====================================== 

// $emp =[
//     [1,"Jitendra","Secarty",55000],
//     [2,"Ravindra","Maneger",5000],
//     [3,"Bhawani","Empo",95000],
//     [4,"Surendar","Chif sec",115000]
// ];
// for ($i=0; $i < count($emp); $i++) { 
//     for ($j=0; $j < count($emp); $j++){
//         echo $emp[$i][$j] ." ";
//     }
//     echo "<br>";
// } 
// ---------------------------------------- 
// echo "<table border=1 cellspacing =0 cellpadding =5>"; 
// echo "<tr>
//        <th> Epmloy id </th>
//        <th> Name </th>
//        <th>Desigion</th>
//        <th> Sellary  </th>
//        <tr>";
// foreach ($emp as $k) {
//     echo "<tr>";
//     foreach ($k as $k1) {
//       echo "<td> $k1 </td> ";
//     }
//     echo "</tr>";    
// }
// echo "</table>";
// =====================================
// $num =[6556, 10,20,30,45,88 ];
// $a= array_sum($num);
// print_r($a);


// $a=[10, 20, 30];
// $total = 0;
// for($i = 0; $i < count($a); $i++) {
//    $total = $total+$a[$i];
// }
// echo $total;
// ================================================

//  $a = ["india" => "new daily","pak"=>"islamabad","us"=>"newyork","itealy"=> "bagdad"];
//   arsort($a);
//       foreach($a as $b =>$c){
//       echo "this capital of $b is $c" . "<br>";
//       }
//     // ======================================
$a =["jitendra","ramdv","ck","pk"];
// echo "<ol>";
for ($i=0; $i < count($a); $i++) { 
    echo "<li>" .$a[$i]."</li>";
}
// echo "</ol>";


$a = [ 'a'=> [10, 20, 30, 40],['a' => 50, 'b' => 60, 70]];


// $output = [280];
foreach ($a as $key => $value) {
    print_r ($value);
}
  

?>