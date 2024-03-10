<?php

// $d1=strtotime("03 january 1998");
// $d2=ceil(($d1-time())/60/60/24 );
// echo "There are " . $d2 ." days until 3th of january.";

// $name = test_input($_POST["name"]);
// if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
//   $nameErr = "Only letters and white space allowed";
// } 
// ====================================================
// abstract class ParentClass {
//   // Abstract method with an argument
//   abstract function pre($a,$b); 
//   abstract function p($c,$d);

// }

// class ChildClass {
//   public function pre($a,$b) {
//     return $a+$b;
//   }
//    public function p($c,$d) {
//     return $c-$d;
//   }
//   public function pa($c,$d) {
//     return $c*$d;
//   }
//  }  
// class Child {
//   public function pre($a,$b) {
//     return $a+$b;
//   }
//    public function p($c,$d) {
//     return $c-$d;
//   }
// }
// $class = new ChildClass;
// echo $class->pre(12,12)."<br>";
// echo $class->p(30,10)."<br>";
// echo $class->pa(30,10)."<br>";

// $class = new Child;
// echo $class->pre(20,40)."<br>";
// echo $class->p(30,10)."<br>";

// =========================================================

// abstract class car{
//   public $name;
//   public function __construct($name){
//       $this->name = $name;
//   }
//      abstract public function inf();    
// }
// class Audi extends car{
 
//   public function inf(){
//       return "Choose German quality! I'm an $this->name!";
//   }
// }
// class volovo extends car{
 
//   public function inf(){
//       return  "Proud to be Swedish! I'm a $this->name!";
//   }
// }
// class citroen extends car{
 
//   public function inf(){
//       return  "French extravagance! I'm a $this->name!";
//   }
// }
// $audi = new Audi("Audi");
// echo $audi->inf()."<br>";
//  $volovo = new volovo ("volovo");
// echo $volovo->inf()."<br>";
// $citroen = new citroen ("citroen");
// echo $citroen->inf()."<br>";
// // ==================================================================
interface A{
  function cal($a,$b,$f);
  function add($e,$f);

}
interface B{
  function sub($c,$d);
}
class child implements A,B { 
function cal($a,$b,$e){
return $a+$b+$e;
}
public function add($e,$f){  
return $e+$f;
}
public function sub($c,$d){
return $c-$d;
}
}
$test = new child();
echo $test->cal(60,30,10)."<br>";
echo $test->add(500,30)."<br>";
echo $test->sub(50,30)."<br>";
// ==============================================================


?>
 