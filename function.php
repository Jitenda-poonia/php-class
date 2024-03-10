  <?php
// function name(){
//     $msg ="jitendra poonia";
//     return $msg;
// }
//  echo name()."<br>";
//  echo name()."<br>";
//  echo name()."<br>";
// ==============================
// function name($n) {
//     $count = "";
//     for ($i=1  ; $i <=$n; $i+=2) { 
//         $count.=$i." ,";
//     }
//     return $count;
// }
// echo name(23)."<br>";
// echo name(7)."<br>";
// echo name(2)."<br>";
// ========================================
// function name($x,$y) {
//     $z = $x+$y;
//     // $z =$x*$y;
//     return $z;
// }
// echo "5+10=".name(5,10)."<br>";
// echo "12+5=".name(12,5)."<br>";
// echo "50*5=". name(50,5)."<br>";
// // ===============================================
// function addNumber($a,$b){
//     return $a+$b;
// }echo addNumber(1.6,3.9);
// // ==========================================
// function familyName($fname,$y=12) {
//     echo "$fname poonia born $y in dalman<br>";
//   }
  
//   familyName("Jitendra" ,"kjh",);
//   familyName("sp", 176);
//   familyName("br", 878);
//   familyName("rd",9879);
//   familyName("dularam" ,);
// //   ========================================
//  function add_five(&$value) {
//   $value.="jitendra";
// }
// $num = "poonia dalman";
// add_five($num);
// echo $num;
// ECHO "<BR>";
// // ==============================================
// function addFive(&$value) {
//   $value -= 4;
// }
// $num = 10;
// addFive($num);
// echo $num;
// // =============================================
// echo "<br>";
// function cube($n){
//   return $n*$n*$n;
// }echo "cube of 3 is:&nbsp" .cube(3);
// // ===================================
 echo "<br>";
// // ================================================
// // > Write a function called isEven that takes an integer as a parameter and returns true if the number is even, and false otherwise.

// function isEven($n){
//     $isEven=false;
//   if($n%2==0){
//    $isEven=true;
//   }
//   return $isEven;
//   }
//    $t= isEven(53);
//    echo var_dump($t);
  //  ========================================== 
  echo "<br>";
  function isOdd($n){
    $isOdd=false;
  if($n%2==1){
   $isOdd=true;
  }
  return $isOdd;
  }
   $t= isOdd(57);
   echo var_dump($t);
  echo "<br>";
  // -------------------------------------------------
  // -> Write a function called isPrime that checks
  //  if a given number is prime and returns true if it is, or false if it's not.

// function isPrime($n){
//   $isPrime=true;
//   for ($i=2; $i <$n; $i++) { 
//     if ($n%$i==0) {
//       $isPrime=false;
//     }
//   }
//   return $isPrime;
// }
// $a =isPrime(15);
// var_dump($a);
// ==========================================
// -> Write a function called calculateBMI that calculates the BMI (Body Mass Index) of a person given
//  their weight in kilograms and height in meters. 
//  The formula for BMI is BMI = weight (kg) / (height (m) * height (m)).
// function calculataBMI(){
//   $weight=56;
//   $height =1.72;
//   $BMI= $weight/($height*$height);
//   return $BMI;
// }
// echo calculataBMI();
// --------------------------------------------------------
// function calculataBMI($weight,$height){
//    $BMI= $weight/($height*$height);
//     return $BMI;
//   }
//   echo calculataBMI(56,1.72)."<br>";
//   echo calculataBMI(58,1.22)."<br>";
//   echo calculataBMI(70,1.72)
  // ------------------------------------------------

 ?>