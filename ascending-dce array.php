  <?php
$input =[10 ,30, 20, 60, 40];
//echo implode(" ",$input);// same value print krne k liye
 $length = count($input);

    for ($j = 0; $j <  $length-1; $j++) {
        // Swap if the element found is greater than the next element
        if ($input[$j] > $input[$j + 1]) {
            $temp = $input[$j];
            $input[$j] = $input[$j + 1];
            $input[$j + 1] = $temp;
             
        }
    }
echo "<pre>"; 
print_r($input);

?>