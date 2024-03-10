<?php

class Fruit{
    public $name;
    public $color;
    public $weight;
    function __construct($nam, $col, $wei="No Weight") {
        $this->name  = $nam;
        $this->color = $col;
        $this->weight = $wei;
    }

    function get_name() {
        return $this->name;
    }

    function get_color() {
        return $this->color;
    }

    function get_weight() {
        return $this->weight;
    }
}

// for apple
$apple = new Fruit("Apple", "Red", 30);
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
echo "<br>";
echo "Weight: " . $apple->get_weight() . "Kg";

// for banana
echo "<br>--------------------------------<br>";
$banana = new Fruit("Banana", "Yellow");
echo "Name: " . $banana->get_name();
echo "<br>";
echo "Color: " . $banana->get_color();
echo "<br>";
echo "Weight: " . $banana->get_weight() . "Kg";

//for blackberry
echo "<br>--------------------------------<br>";
$blackberry = new Fruit("balckberrey","black","20kg");
echo "Name:".$blackberry->get_name();
echo "<br>";
echo "color:". $blackberry->get_color();
echo "<br>";
echo  "weight:". $blackberry->get_weight();
echo "<br>";

?>