<?php
for ($i=1; $i <= 6; $i++) { 
     for ($j=1; $j <=$i ; $j++) { 
        echo "*";
     } 
     echo "<br>";  
}
// // ===========================================
echo "<br>";

for ($i=7; $i >=1; $i--) { 
    for ($j=1; $j<=$i; $j++) { 
        echo "$i";
    }
    echo "<br>";
}
// =========================================
 for ($i=1; $i<= 5; $i++) { 
    for ($j=5; $j>=$i ; $j--) { 
        if($i>=$j){
            echo $i ;
        }else {
            echo "&nbsp; &nbsp";
        }
    }echo "<br>";
 }
// ========================
for ($i=1; $i<= 5; $i++) { 
    for ($j=5; $j>=1 ; $j--) { 
        if($i>=$j){
            echo "*";
        }else {
            echo "&nbsp;&nbsp";
        }
    }echo "<br>";
}
// =====================================
$n=4;
for ($i=1; $i <= $n; $i++) { 
    for ($j=1; $j <=(2*$n-1); $j++) { 
        if ($j>=$n-($i-1) && $j<=$n+($i-1)) {
            echo "$i";
        }else {
            echo "&nbsp;&nbsp";
        } 
    }echo "<br>";
    
}
for ($i=$n; $i >=1 ; $i--) { 
    for ( $j=1;$j <=(2*$n-1); $j++) { 
        if ($j>=$n-($i-1) && $j<=$n+($i-1)) {
            echo "$i";
            
        }else {
            echo "&nbsp;&nbsp";
        }
    }echo "<br>";
    
}
 
for ($i=1; $i <=5; $i++) { 
    for ($j=1; $j <=$i; $j++) { 
        echo "$i";
    }echo "<br>";
}
$a=1;
for ($i=1; $i <=5; $i++) { 
       echo $a;
       $a=$a*11;
       echo "<br>";
}
  for ($i=1; $i <=5; $i++) { 
    for ( $j = $i; $j>=1;$j--) { 
        echo $j ;
    }echo "<br>";
  }
//   ==========================================

  for ($i=1; $i <=5; $i++) { 
    $a= 1;
    for ( $j = 1; $j <= $i;$j++) { 
        echo $a."&nbsp" ;
        $a=$a*($i-$j)/$j;
    }echo "<br>";
  }
  echo "<br>"; 

//===========================================
function pascal(){
    $b="";
    for ($i=1; $i <=5; $i++) { 
        $a= 1;
        for ( $j = 1; $j <= $i;$j++) { 
           $b.=$a." "   ;
                $a=$a*($i-$j)/$j;
        }      
        $b.="<br>";
    } 
    return $b;  
}
echo pascal() ;
// ==================================
for ($i= 1; $i <= 7; $i++) { 
    $a = "a";
    for ($j= 1; $j <=$i; $j++) { 
        echo $a;
        $a++;
    }echo "<br>";
}
// ===================================
for ($i= 1; $i <= 7; $i++) { 
    for ($j= 1; $j <=$i; $j++) { 
        echo $j;
        
    }echo "<br>";
}
// ==================================================================
for ($i=5; $i >=1; $i--) { 
    for ($j=1; $j <=$i; $j++) { 
        echo "*";
    }echo "<br>";
}
// ==========================================
$a=1;
for ($r=1; $r <=5; $r++) { 
    for ($j=5; $j>$r; $j--) { 
        echo "&nbsp;&nbsp";
    }
    for ($i=1; $i <= $r; $i++) { 
        echo "$a &nbsp ";
        $a++;
    }echo "<br>";
}
// ==============================================
echo "<br>";
for ($r=1; $r <=5; $r++) { 
    for ($j=5; $j>$r; $j--) { 
        echo "&nbsp;&nbsp";
    }
    for ($i=1; $i <= $r; $i++) { 
        echo "* ";
        
    }echo "<br>";
}
// =============================
echo "<br>";
for ($r=1; $r <=5; $r++) { 
    for ($j=5; $j>$r; $j--) { 
        echo "&nbsp;&nbsp";
    }
    for ($i=1; $i <= $r; $i++) { 
        echo "a &nbsp ";
        
    }echo "<br>";
}
// ======================================
echo "<br>";
$A="a";
for ($r=1; $r <=5; $r++) { 
    for ($j=5; $j>=$r; $j--) { 
        echo "&nbsp;&nbsp";
    }
    for ($i=1; $i <= $r; $i++) { 
        echo "$A &nbsp ";
        $A++;
    }echo "<br>";
}
// ======================================
for ($r=1; $r <=5; $r++) { 
    for ($j=5; $j>=$r; $j--) { 
        echo "&nbsp;&nbsp";
    }
    for ($i=1; $i <= $r; $i++) { 
        echo "$r &nbsp ";
        
    }echo "<br>";
}
echo "<br>";
// ===========================================
for ($r=1; $r<=5; $r++) { 
    for ($j=1; $j<=$r; $j++) { 
        echo "&nbsp;&nbsp";
    }
    for ($i=5; $i>=$r; $i--) { 
        echo "$r &nbsp ";
          
    }echo "<br>";
}
echo "<br>";
// ================================
$a=1;
for ($r=1; $r <=4; $r++) { 
    for ($j=4; $j>=$r; $j--) { 
        echo "&nbsp;&nbsp";
    }
    for ($i=1; $i <= $r; $i++) { 
        echo "$a &nbsp ";
  
        $a++;
    }echo "<br>";
}
$a = 10;
for ($r=1; $r<=4; $r++) { 
    for ($j=1; $j<=$r; $j++) { 
        echo "&nbsp;&nbsp";
    }
    for ($i=4; $i>=$r; $i--) { 
        echo "$a &nbsp ";
          $a--;
    }echo "<br>";
}


$alph = 65;

for($i = 1; $i <= 6; $i++) {
    for($j = 1; $j <= 5; $j++){
        echo chr($alph) . " ";
        $alph++;
    }
    echo "<br>";
}
echo "<br>";
// ==============================================
for ($i=1; $i <=5; $i++) { 
    for ($j=0; $j <=4; $j++) { 
        echo ($i+$j)%2 . " ";
        
       
    } echo "<br>";
} 
echo "<br>";
// ==============================================
for ($i=1; $i <=5; $i++) { 
    for ($j=0; $j <=$i; $j++) { 
        echo ($i+$j)%2 . " &nbsp";
       
    } echo "<br>";
} 
echo "<br>";


?>

 
