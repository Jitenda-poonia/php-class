<?php
// trait hello{
//     public function test(){
//         echo "jitendra poonia.";
//     }
//     public function test3(){
//         echo "dalman.<br>";
//     }
// }
// trait hello1{
//     public function test1(){
//         echo "brp poonia.<br>";
//     }
// }
// class base{
//     use hello;
// }
// class base1{
//     use hello1,hello;
// }
// $out = new base();
// $out->test(); 
// $out->test3();
// echo "<br>";
// $out1 = new base1();
// $out1->test1(); 
// $out1->test(); 
// $out1->test3(); 
// -----------------------------------
// trait name{
//     public function say(){
//         echo " hello everyone";
//     }
// }
// class jp{
//     public function say(){
//         echo " hello guys<br>";
//     }
   
// }
// class child {
//     use name;
//     public function say(){
//         echo " hello child class<br>";
//     }
    
// }

// $test = new child();
// $test->say();
// -------------------------------------------------
// trait name{
//     public function say(){
//         echo " hello everyone";
//     }
// }

// class jp{
//     public function say(){
//         echo " hello guys<br>";
//     }
   
// }
// class child extends jp {
//     use name;
//     public function say(){
//         echo " hello child class<br>";
//     }
    
// }

// $test = new child();
// $test->say();
// -------------------------------------------------
// trait name{
//     public function say(){
//         echo " hello everyone";
//     }
// }
// trait name2{
//     public function say(){
//         echo " hello name2";
//     }
// }

// class child  {
//     use name, name2{
//         name::say insteadOf name2;
//         name2::say as newname;
//     }
   
    
// }

// $test = new child();
// $test->say();
// $test->newname();
// ----------------------------------------
// trait name{
//    private function say(){
//         echo " hello everyone";
//     }
// }


// class child  {
//     use name{
//         name::say as public; // (public hello) functipn ka new name
//     }
    
// }

// $test = new child();
// $test->say(); //$test->hello();
  

?> 