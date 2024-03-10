<?php
$a= 800;
$b= 7000;
$c= 6000;
$d= 5000;
$e= 4000;
$f= 9000;
if($a<$b){
    if($a<$c){
        if($a<$d){
            if($a<$e){
                if($a<$f){
                    echo "A is samall";
                }else{
                    echo "D is samall"; 
                }
            }else{
                if($e<$f){
                    echo "E is samall";
                }else{
                    echo "F is samall";
                }
            }
        }else{
            if($d<$e){
                if($d<$f){
                    echo "d is samall";
                }else{
                    echo "F is samall";
                }
            }else{
                if($e<$f){
                    echo "E is samall";
                }else{
                    echo "F is samall";
                }
            }
        }
    }else{
        if($c<$d){
            if($c<$e){
                if($c<$f){
                    echo "C is samall";
                }else{
                    echo "F is samall";
                }
            }else{
                if($e<$f){
                    echo "E is samall";
                }else{
                    echo "F is samall";
                }
            }
        }else{
            if($d<$e){
                if($d<$f){
                    echo "D is samall";
                }else{
                    echo "F is samall";
                }
            }else{
                if($e<$f){
                    echo "E is samall";
                }else{
                    echo "F is samall";
                }
            }
        }
    }
}else{
    if($b<$c){
        if($b<$d){
            if($b<$e){
                if($b<$f){
                    echo "B is samall";
                }else{
                    echo "F is samall";
                }
            }else{
                if($e<$f){
                    echo "E is samall";
                }else{
                    echo "F is samall";
                }
            }
        }else{
            if($d<$e){
                if($e<$f){
                    echo "E is samall";
                }else{
                    echo "F is samall";
                }
            }else{
                if($e<$f){
                    echo "E is samall";
                }else{
                    echo "F is samall";
                }
            }
        }
    }else{
        if($c<$d){
            if($c<$e){
                if($c<$f){
                    echo "C is samall";
                }else{
                    echo "F is samall";
                }
            }else{
                if($e<$f){
                    echo " is samall";
                }else{
                    echo "F is samall";
                }
            }
        }else{
            if($d<$e){
                if($d<$f){
                    echo "D is samall";
                }else{
                    echo "F is samall";
                }
            }else{
                if($e<$f){
                    echo "E is samall";
                }else{
                    echo "F is samall";
                }
            }
        }
    }
}
?>