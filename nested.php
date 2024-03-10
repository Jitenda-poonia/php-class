 <?php
$a = 70;
$b = 60;
$c = 300;
$d = 400;

if($a>$b){
    if($a>$c){
        if($a>$d){
                echo "A is big";            
            }else{
                echo "d is big 1";
            }
    } else{
            if($c>$d){
                echo "c is big";
            }else {
                echo "d is big 2";
            }
        }
} else{
        if($b>$c){
            if($b>$d){
                echo " b IS BIG";
            }else{
                echo "d is big 3";
                }
        } else{
            if ($c>$d){
                echo "c is big";
            }else {
                echo "d is big 4 ";
                   }
             }
}
?>



























