 <?php
// $input =[10,20,"10",30,"20",50,60,10,"30","10","10","jitendra","jitendra"];
// $num = 10;
// $a =0;
// foreach ($input as  $value) {
//     if($value===$num){
//         $a++;
//     }
   
// }      
// echo "$num ,$a times";
// ==========================================
// $colors =["red","blue","green","blue","yellow","blue"];

//  $targetcolor ="blue";
// //  $output ="The color blue appears 3 times";

// $a=0;
// foreach ($colors as $value) {
     
//     if($value==$targetcolor){
//         $a++;
//     }
    
// }
// echo "The color  $targetcolor appears $a times";
// ===================================================================
//Counting Occurrences of Elements

//$items =  array("Apple", "Banana", "Orange", "Apple", "Banana", "Mango", "Apple");
// $output = [
//         "Apple" => 3, 
//         "Banana" => 2,
//         "Orange" => 1,
//         "Mango" => 1
// ]
//echo "<pre> ";
 //print_r(array_count_values($items));
// ------------------------------------------------------------------------------
$items =  array("Apple", "Banana", "Orange", "Apple", "Banana", "Mango", "Apple");
$output = [];
 
foreach ($items as $item) {
    $output[$item] = ($output[$item]??0)+1;
}
echo "<pre>";
print_r($output);

// ----------------------------------------------------------------






?>