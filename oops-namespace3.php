<?php
require 'oops-namespace.php';
require 'oops-namespace2.php';
// -------------------------------------------
// function hello(){
//     echo "poonia";
// }
// // hello();    // jo es file me function define h vo print hoga
// first\hello(); // namespace first ke function me jo echo h vo print hoga
// ---------------------------------------------
echo "<br>";
$obj = new first\test();
echo "<br>";

// $obj = new second\test();

// -----------------------------------------
// for namespace includ 

//$obj = new first\test(); // dono namespace print bcoz second namespace inculd in first
// $obj = new second\test(); //only second namespace echo 


?>