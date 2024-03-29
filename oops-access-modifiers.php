<?php


class Fruit {
  public $name;
  public $color;
  public $weight;

  function set_name($n) {  // a public function (default)
    $this->name = $n;
  }
  function get_name() { 
    return $this->name;
  }

 protected function set_color($n) { // a protected function
    $this->color = $n;
  }
  function get_color() { 
    return $this->color;
  }
  

 private function set_weight($n) { // a private function
    $this->weight = $n;
  }
  function get_weight() { 
    return $this->weight;
  }
}

$mango = new Fruit();
$mango->set_name("Mango"); // OK
$mango->set_color('Yellow'); // ERROR
 $mango->set_weight('300'); // ERROR
echo "name:".$mango->get_name();
echo "<br>";
echo "color:".$mango->get_color();
echo "<br>";
echo "weight:".$mango->get_weight();


  ?>
   