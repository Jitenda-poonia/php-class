 <?php
$a = 0;
$b =1;
for ($i=0; $i < 17 ; $i++) { 
echo " $a <br>";//0,1,1,2
$c =$a+$b;//1/1/2 
$b =$a;//0/1
$a =$c;//2/ n
}
// ===============================
$a=1;
for($i = 0;$i<1000;){
    echo $i;
    $c =$a+$i;
    $a=$i;
    $i=$c;
    echo "<br>";
}
// ========================
for ($i= "A" ; $i <= "Z" ;$i++) { 
    echo $i." ";
    if($i=="Z"){
       break;
    }
 }
// =================================================
$a = 0;
$b = 1;
while($a<=100){
    
    echo $a." ";//0
    $c=$a+$b;//1  
     $a=$b; //1
   
     $b= $c ;//1
}


?>