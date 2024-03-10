 <?php
class Student
{

    function __construct()
    {
        echo "construct function called<br>";
    }    
    
    function hello(){
        return "hello..... ".$this->name();
    }
    protected function name(){
        return "student name...... ";
    }
    function __destruct()
    {
        echo "<br> Destruct called....";
    }
 


}
$stuObj = new Student();
echo $stuObj->hello();
echo "<br>";
// echo $stuObj->name ();    

?> 




