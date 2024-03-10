<?php
echo "<h1> chase bord </h1>";
echo "<table border = 1px cellspacing = 0px width = 370px>";
for ($i=1; $i <=8; $i++) { 
   echo"<tr>";
	for ($j=1; $j <=8 ; $j++) { 
		$total = $i+$j;
		if($total % 2==0){
			echo"<td width = 35px height = 35px bgcolor=black>";
		}else{
			echo"<td width = 35px height = 35px >";
		}
	}
   echo "</tr>";
}echo "</table>";
?>