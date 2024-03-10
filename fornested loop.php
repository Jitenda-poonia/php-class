<?php
for ($i=1; $i <=5; $i++) {                       
		for ($a=1; $a<= 5 ; $a++) { 
			echo $i." ";

		}echo "<br>";
}
echo "<br>";
// ===================================
for ($i=1; $i <=5; $i++) { 
	for ($a=1; $a<= $i ; $a++) { 
		echo $i." ";

	}echo "<br>";
}
echo "<br>";
// ==========================================
for ($i=1; $i <=5; $i++) { 
	for ($a=1; $a<= $i ; $a++) { 
		echo $a." ";

	}echo "<br>";
}
// =======================================
echo "<br>";
for ($i=1; $i <=5; $i++) { 
	for ($a=1; $a <= 5 ; $a++) { 
		echo $a." ";
 
	}echo "<br>";
}
echo "<br>";
// ======================================
echo "<br>";
// ============================================
for ($i=5; $i >=1; $i--) { 
	for ($a=5; $a >=$i ; $a--) { 
		echo $i." ";

	}echo "<br>";
}
echo "<br>";
// ===========================================
for ($i=1; $i<= 5; $i++) { 
	for ($a=5; $a >=$i ; $a--) { 
		echo $a." ";

	}echo "<br>";
}
echo "<br>";
// ================================
for ($i=5; $i>=1; $i--) { 
	for ($a=$i; $a >=1 ; $a--) { 
		echo $a." ";

	}echo "<br>";
}
echo "<br>";
// ==============================
for ($i=5; $i>=1; $i--) { 
	for ($a=$i; $a >=1 ; $a--) { 
		echo $i." ";

	}echo "<br>";
}
echo "<br>";
// ===================================
for ($i=1; $i <=10; $i++) { 
	for ($a=1; $a<= $i ; $a++) { 
		echo $a." ";

	}echo "<br>";
	
}
echo "<br>";
$a=1;
for ($i=1; $i <= 4; $i++) { 
	for ($b=1; $b <=$i ; $b++) { 
		echo $a. " ";
		$a++;
	}echo "<br>";
}
echo "<br>";
// =======================================
for ($i=1; $i <=5; $i++) { 
	for ($a=0; $a <=4; $a++) { 
		echo ($i+$a)%2 ." ";
	}echo "<br>";
}
echo "<br>";
// ==============================================
for ($i=1; $i <=4; $i++) { 
	for ($a=1; $a <=$i; $a++) { 
		echo ($i+$a+1)%2 ." ";
	}echo "<br>";
}
echo "<br>";
// =============================================== 
// $a =1;
// $b =5;
// for ($i=1; $i <=$b; $i++) { 
// 	$a*=$i;
// }echo $a;
// =====================================
$a =1;
for ($i=1; $i <= 10 ; $i++) { 
	$fact =1;
	for ($b=1; $b <=$i ; $b++) { 
		$fact*=$b;
	} echo "factorial of $a is :$fact";
echo "<br>";
$a++;
}
// ----------------------------
// answer
// factorial of 1 is :1
// factorial of 2 is :2
// factorial of 3 is :6
// factorial of 4 is :24
// factorial of 5 is :120
// factorial of 6 is :720
// factorial of 7 is :5040
// factorial of 8 is :40320
// factorial of 9 is :362880
// factorial of 10 is :3628800
echo "<br>";
// =================================
$a=12;
for ($i=2; $i<$a  ; $i++) { 
	if($a%$i==0){
		echo "it is not prime number <br>";
	}else "it is  prime number";
}
?>



