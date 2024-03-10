<?php
class base{
    private $name;
    public function __construct($n){
        $this->name = $n;
    }
    protected function show(){
        echo "your Name:".$this->name,"<br>";
    }
}
 
class derived extends base{
     function get(){
        echo "your Name:".$this->name,"<br>";
    }
}
$test = new derived ("jitendar");
$test->name ="poonia";
$test->get();



?>