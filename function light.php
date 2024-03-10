<?php
// 1-50---6
// 51-150---5
// 151---250 ---4
// // 251---3
// $a=258  ;
// if ($a>=1 && $a<=50){
//     echo "amount :".$a*6;//300
//  }
//  elseif($a>=51 && $a<=150) { //500
//     echo "amount:".($a-50)*5+300;//800
//  }
// elseif($a>=151 && $a<=250){
//    echo "amount:".($a-150)*4+800;//1200
// }else if($a>=251){
//    echo "total amount:".($a-250)*3+1200; 
//}
// ==================================================
function unit($unit)
{
	if (($unit >= 1) && ($unit <= 50)) {
		$a = ($unit * 6);
	} else if (($unit > 50) && ($unit <= 150)) {
		$a = ($unit *5) + 50;
	} else if (($unit > 150) && ($unit <= 250)) {      
		$a = ($unit * 4) + 200;
	} else if ($unit > 250) {
		$a = ($unit * 3) + 450;
	} 
	return "Amout Of $unit unit= " . $a;
}
 
echo unit(130);   
?>
