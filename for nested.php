 <?php
//  for ($i=5; $i>=1; $i--) { 
//     for ($a=1; $a <=$i; $a++) { 
//             echo "* ";
//         } 
// echo " <br>";
// 	}
// 	for ($i=2; $i<6; $i++) { 
// 		for ($a=1; $a <=$i; $a++) { 
// 				echo "* ";
// 			} echo " <br>";
// 		}
// // ==============================================
// echo "<br>";
// for ($i=1; $i <= 2 ; $i++) { 
//     for ($a=5; $a >= 1; $a--) { 
//         for ($c= 1; $c <=$a ; $c++) { 
//             echo "*"." ";
//                  
//         } echo " <br>";
//     }
// }
// // ===================================
// for ($i = 1; $i <= 9; $i++) {
// 	for ($j = 1; $j <= 9; $j++) {
// 		if ($i == 2 && $j == 5 || $i == 3 && $j > 3 && $j < 7) {
// 			echo "&nbsp;&nbsp;&nbsp";
// 		} elseif ($i == 4 && $j > 2 && $j < 8 || $i == 5 && $j > 1 && $j < 9) {
// 			echo "&nbsp;&nbsp;&nbsp";
// 		} elseif ($i == 6 && $j > 2 && $j < 8) {
// 			echo "&nbsp;&nbsp;&nbsp";
// 		} else if ($i == 7 && $j > 3 && $j < 7 ||$i==8 && $j==5 ) {
// 			echo "&nbsp;&nbsp;&nbsp";
// 		}else {
// 			echo "* ";
//         }
// 	}echo "<br>";
// }echo "<br>";
// // ========================================================
// for ($i=1; $i <= 9; $i++) { 
//    for ($j=1; $j <=9; $j++) { 
// 	if ($i == 2 && $j == 5 || $i == 3 && $j > 3 && $j < 7 ||$i == 4 && $j > 2 && $j < 8 || $i == 5 && $j > 1 && $j < 9 ) {
// 		echo "&nbsp;&nbsp;&nbsp";
// 	} elseif ($i == 6 && $j > 2 && $j < 8 || $i == 7 && $j > 3 && $j < 7 ||$i==8 && $j==5) {
// 			echo "&nbsp;&nbsp;&nbsp";
// 		}else {
// 			echo "* ";
//         }
//    }echo "<br>";
   
// }
// // ================================================================
// echo "<br>";
// for ($i=1; $i <=5; $i++) { 
// 	for ($a=1; $a <=$i; $a++) { 
// 		echo " * ";
// 	}
//echo "<br>";
// }
// for ($i=5; $i >=1; $i--) { 
// 	for ($a=1; $a <=$i; $a++) { 
// 		echo " * ";
// 	}
//echo "<br>";
// } 
// =====================================================================
echo "<table border='1' cellspacing = '0' bordercolor=blue >";
for ($i=1; $i <=10; $i++) { 
	echo "<tr>";
	for ($a=1; $a <=10; $a++) { 
		$c =$i*$a;
	echo "<td bgcolor=pink>$c </td>";
	}
	echo "</tr>";
}
echo"</table>";
echo "<br>";
// =================================================================
 
for ($i=1; $i <=5; $i++) { 
	for ($j=$i; $j <=5; $j++) { 
		echo $j." ";
	}echo "<br>";
}
for ($i=2; $i < 10; $i+=2) { 
	 echo $i.-($i+2);
echo "<br>";
}
// ============================================
echo "<table border=1 cellspacing=0 cellpadding= 1>";
for ($i=1; $i <=10; $i++) { 
	echo "<tr>";  
	for ($j=1; $j <= 7; $j++) { 
		
		echo " <td>$i x $j= ".$i*$j." </td>";
	}
	echo "</tr>";
}
echo "</table>";
// =====================================
for($i=0; $i<= 9; $i++)
{ 
  for($j=0; $j<= 9; $j++)
     {
       echo $i.$j.", "; 
    }
}
echo "100";
// ===================================

$text="jitendra poonia dalman bhinwaram rame ra";
$search_char="r";
$count="0";
for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$search_char)
    {
    $count=$count+1;
	 }
  }
echo $count;
// =====================================
echo "<br>";
for ($i=1; $i <= 20; $i++) { 
	if ($i%3==0 && $i%5==0) {
		echo $i ."*"."&nbsp;&nbsp"."jitendra poonia";
	}elseif($i%4==0){
		echo $i ."#"."&nbsp;&nbsp"."jaat";
	}elseif($i%5==0){
		echo $i ."@"."&nbsp;&nbsp"."poonia";
	}elseif ($i%3==0) {
		echo $i."=$"."&nbsp;&nbsp"."dalman";
	}else{
		echo $i."&nbsp;&nbsp"."xxx";
	}echo "<br>";
}echo "<br>";
// ==========================================================
$a=1;
for ($i=1; $i <=7; $i++) { 
	for ($j=1; $j <=$i ; $j++) { 
		echo $a." ";
		$a++;
	}echo "<br>";
}
// ================================================
// 1----100 tak table
// echo "<table border = 1 cellspacing =0 bordercolor=blue>";
//  $num = 1;
// for ($i=1; $i <=10; $i++) {
// 	echo "<tr>"; 
// 	for ($j=1; $j <=10; $j++) { 
// 		echo "<td bgcolor= #aa22bb> $num</td>";
// 		$num++;
// 	}
// 	echo "</tr>";
// } 
// echo "</table>";
// =====================================================
// 1----100 tak table
echo "<table border = 1 cellspacing =0 bordercolor=blue>";
for ($i=1; $i <=10; $i++) {
	echo "<tr>"; 
	for ($j=$i; $j <=100; $j+=10) { 
		echo "<td bgcolor= #aa22bb> $j</td>";
		
	}
	echo "</tr>";
} 
echo "</table>";
// ==================================================
// 1 to 50 tak cube
echo "<table border = '1' cellspacing = '0'cellpadding = '2' >";
for ($i=1; $i <= 10; $i++) { 
  echo "<tr>";
  for ($j=$i; $j <=50; $j+=10) { 
    
    echo "<td>"."$j = ".$j*$j."</td>";
  }
  echo "</tr>";

}
echo "<table>";

?>







