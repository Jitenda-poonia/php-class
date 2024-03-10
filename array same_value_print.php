<?php
// $words = array("Hello", "world", "in", "PHP");
// //  Output
// // Concatenated String: Hello, world, in, PHP
// echo "Concatenated String:". implode(",",$words);
// =================================================
// $num = [1,2,3,4,5,6,7,"jitu"];
// echo "this number natural no:".implode(" ,",$num);
// =========================================
$a = ["jls" ,"fglfj", "flkjf" ,"sfjspj","utriuetr",11,3,3];
$b= " ";
foreach($a as $c => $d){
    if ($c==(count($a)-1)) {
        $b.= $d;
    }else{
        $b.=$d.",";
    }
  
}
echo "Concatenated String:". $b;
// ===============================================


?>