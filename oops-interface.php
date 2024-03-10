<?php
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

// --------------------------------
abstract class ParentClass {
    // Abstract method with an argument
    abstract protected function pre($a,$b); 
    abstract protected function p($c,$d);
  
  }
  
  class ChildClass extends ParentClass {
    public function pre($a,$b) {
      
      return $a+$b;
    }
     public function p($c,$d) {
      
      return $c-$d;
    }
  }
  
  $class = new ChildClass;
  echo $class->pre(12,12);
  echo "<br>"; 
  echo $class->p(30,10);
?> 