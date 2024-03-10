 <?php
class student
{
          public $name;
     function __construct($nam)
     {
        $this->name = $nam;
     }
   
    public function g(){
        return $this->name;
    }

}

$test = new student("student1");
$test1 = new student("student2");
echo $test->g();
echo $test1 ->g();



  // ===============================================================
// class pyramid
// {
//     public $count=0;
//     function __construct($no)
//     {
//         $this->count = $no;
//     }
//     public function stOne()
//     {
//         $output = "";
//         for($i=1;$i<= $this->count; $i++){
//             for($j=1;$j<=$i;$j++){
//                 $output.=$j."";
//             }
//             $output.="<br>";
//         }
//         return $output;

//     }
//     public function stTwo()
//     {
//         $output = "";
//         for($i=1;$i<= $this->count; $i++){
//             for($j=1;$j<=$i;$j++){
//                 $output.=$j."";
//             }
//             $output.="<br>";
//         }
//         return $output;

//     }
// }
// $p1 = new pyramid(6);
// $p2 = new pyramid(9);

// echo $p1->stOne();
// echo $p2->stTwo();

// echo "<br>................<br>";
// echo $p1->stOne();
//  echo $p1->stTwo();
// echo "<br>................<br>";
//  echo $p1->stTwo();

 
?>
