<?php
$a =75;
$b =600;
$c =690;
$d =700;
$e =300;
if ($a>$b){
    if ($a>$c){
        if ($a>$d){
            if ($a>$e){
                echo "A is big";
            }else {
                echo "E is big";
            }
        }else{
            if($d>$e){
                echo "D is big";
            }else {
                echo " E is big 2";
            }        
        } 
            
    }else{
        if($c>$d){
            if($c>$e){
                echo "C is big";
            }else {
                echo "E is big 3";
            }
        }else{
            if($d>$e){
                echo "D is big 2";
            }else {
                echo "E is big 4";
            }
            }
    }
}else{
    if($b>$c){
        if($b>$d){
            if($b>$e){
                echo "B is big";
            }else{
                echo "E is big 5";
            }
        }else{
            if($d>$e){
                echo "D is big 3";
            }else {
                echo "E is big 6";
            }
        }
    }else{
        if($c>$d){
            if($c>$e){
                echo "C is big 2";
            }else{
                echo "E is big 7";
            }
        }else{
            if($d>$e){
                echo "D is big 4";
            }else {
                echo "E is big 8";
            }
        }
    }
}


?>






