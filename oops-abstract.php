<?php
// abstract class test {
//     public $name;
//     abstract protected function call($a,$b);

// }
//  class test1 extends test {
    
//     public function call($c,$d){
//         echo $c+$d;
//     }
        
// }
// $r = new test1();
// $r->call(10,30);
// ------------------------------------------
abstract class car{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    abstract public function inf();
}
class Audi extends car{
   
    public function inf(){
        return "Choose German quality! I'm an $this->name!";
    }
}
class volovo extends car{
   
    public function inf(){
        return  "Proud to be Swedish! I'm a $this->name!";
    }
}
class citroen extends car{
   
    public function inf(){
        return  "French extravagance! I'm a $this->name!";
    }
}
$audi = new Audi("Audi");
echo $audi->inf()."<br>";

 $volovo = new volovo ("volovo");
echo $volovo->inf()."<br>";

$citroen = new citroen ("citroen");
echo $citroen->inf()."<br>";
// -----------------------------------------------
abstract class ParentClass {
    // Abstract method with an argument
    abstract protected function prefixName($name);
  }
  
  class ChildClass extends ParentClass {
    public function prefixName($name) {
      if ($name == "Jitendra") {
        $prefix = "Mr.";
      } elseif ($name == "sharda") {
        $prefix = "Mrs.";
      } else {
        $prefix = "";
      }
      return "{$prefix} {$name}";
    }
  }
  
  $class = new ChildClass;
  echo $class->prefixName("Jitendra")."<br>";
  echo $class->prefixName("sharda")."<br>";
  echo $class->prefixName("pk")."<br>";
   echo $class->prefixName("manu")."<br>";

//   -----------------------------------------------
abstract class Parent1 {
    // Abstract method with an argument
    abstract protected function prefixName($name);
  }
  
  class Child extends Parent1 {
    public function prefixName($name , $great = "Dear") {
      if ($name == "Jitendra") {
        $prefix = "Mr.";
      } elseif ($name == "sharda") {
        $prefix = "Mrs.";
      } else {
        $prefix = "";
      }
      return "{$great} {$prefix} {$name}";
    }
  }
  
  $class = new Child;
  echo $class->prefixName("Jitendra")."<br>";
  echo $class->prefixName("sharda")."<br>";
  echo $class->prefixName("pk")."<br>";
  echo $class->prefixName("manu")."<br>";

// --------------------------------------------------
  abstract class ParentClass1 {
    // Abstract method with an argument
    abstract protected function pre($a,$b); 
    abstract protected function p($c,$d);
  
  }
  
  class ChildClass1 extends ParentClass1 {
    public function pre($a,$b) {
      
      return $a+$b;
    }
     public function p($c,$d) {
      
      return $c-$d;
    }
  }
  
  $class = new ChildClass1;
  echo $class->pre(12,12);
  echo "<br>"; 
  echo $class->p(30,10);
?>