 <?php
// class A {
//     public static $name = "poonia";
//     public static function welcome(){
//         return self::$name;
//     }
//     public function __construct(){
//         self::welcome();
//     }
// }
//  echo A::$name;
// echo A::welcome();

// $test = new A();
// echo $test->welcome();
 
// -----------------------------------
// class A {
//     public static $name = "poonia";
//     public static function welcome(){
//         echo self::$name;
//     }
//     public function __construct($n){
//         self::$name= $n;
//     }
// }
// $test = new A("hello");
// $test->welcome();
// _____________________________________________
// class A {
//     public static $name = "poonia";
 //    }
// class B extends A{
//     public static function welcome(){
//         echo parent::$name;
//     }

// }
   //echo B::welcome();
// $test = new B();
// $test->welcome();


// class A {
//     public static $name = "jitendra ";

//     public static function welcome(){
//         return self::$name;
//     }
// }
// class B extends A{
//     public  function wel(){
//         return parent::welcome();
//     }
// }
//  echo A::$name;
//  echo A::welcome();
//  echo B::welcome();

// $test = new B();
// echo $test->wel();
 
// ------------------------------------
// class test1{
//     public static $name = "THis is static method 2";

// }

// class second1 extends test1 {
//     public function seo() {
//         return parent::$name; 
//     }
// }

// $p = new second1();
// echo $p->seo();

// =====================================================
class base{
    protected static $name = "jitendra";
    public function show(){
        return static::$name;  //static -> result poonia 
        return self::$name;     //self -> result jitendra
                               
    }                           
}
class derived extends base{
    protected static $name = "poonia";
}
$test = new derived();
echo $test->show();
?>