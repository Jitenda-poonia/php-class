<?php
$a = [10,20,30,"40","50","jitu","jitu","jitu",11.11, 33.5,44.6,11,44.6,77,88];
$total_str = $total_int =$total_float =0;
foreach ($a as $value) {
    if (is_float($value)) {
        $total_float++;
    }if(is_string($value)){
        $total_str++;
    }if(is_int($value)){
        $total_int++;
    }
}
echo "Total float value: $total_float <br> Total string value: $total_str <br> Total integer value: $total_int ";

?>