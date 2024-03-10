<?php 
class calculation{
    // public $a,$b,$c; 
    function sum(){
      $this->c = $this->a +  $this->b ;
      return $this->c;   
    }
    function sub(){
        $this->c = $this->a - $this->b ;
        return $this->c;   
      }
    function multi(){
        $this->c = $this->a * $this->b ;
        return $this->c;   
      }
      function div(){
        $this->c = $this->a / $this->b ;
        return $this->c;   
      } 
      function power(){
        $this->c = $this->a ** $this->b ;
        return $this->c;   
      }    
}
$c1 = new calculation(); 
$c1->a = 50;
$c1->b = 30 ;

$c2 = new calculation(); 
$c2->a = 40;
$c2->b = 30;

$c3 = new calculation(); 
$c3->a = 40;
$c3->b = 30;

$c4 = new calculation(); 
$c4->a = 4  1 ;
$c4->b = 3;

echo "sum value of c1:".$c1->sum()."<br>";
echo "sub value of c2:".$c2->sub()."<br>";
echo "sub value of c1:".$c1->sub()."<br>";
echo "sub value of c2:".$c2->sum()."<br>";
echo "multi value of c3:".$c3->multi()."<br>";
echo "divide value of c3:".$c3->div()."<br>";
echo "power value of c3:".$c4->power()."<br>";










?>