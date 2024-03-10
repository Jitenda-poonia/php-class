<?php
// namespace first;
// class test{
//     public function __construct() {
//         echo "This is first test............";
//     }
// }
// // -----------------------------------------
// function hello(){
//     echo "jitendra";
// }
// // hello(); 
// // -------------------------------
// // $obj = new test();


// =============================================================
namespace first;
class test{
    public function __construct() {
        echo "This is first test............";

        $test = new \second\test(); //oops-namespace2.php file ka namespace second includ
        
    }
}
?>