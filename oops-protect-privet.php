 <?php
// class Pyramid {
//   public $count=0;
//   function __construct($no){
//     $this->count=$no;
    
//   }
//   function xy(){               //This function can be used in other classes also-> for exm.class Table me 
//    return $this->stOne();
//   }     
// protected function stOne()
//   {
//     $output="";
//     for($i=1;$i<=$this->count;$i++){
//       for($j=1;$j<=$i;$j++){
//         $output.=$j." ";
//       }
//       $output.="<br>";
//     }
//     return $output;
//   }
// }
// class Table extends Pyramid {
//   public $tabl=0;
//   function __construct($noo){
//     $this->tabl=$noo;
//     parent::__construct($noo);
//   }                              //
//   function get(){
//     return $this->table();
//   }
//   protected function table()
//   {
//     $output="";
//     for($i=1;$i<=10;$i++){
//       $output.=$i*$this->tabl."<br>";
//     }
    
//     return $output;
//   }
 
// }
// $tabObj = new Table(8);
// echo $tabObj->get();
// echo $tabObj->xy();

?> 
<!-- ========================================================== -->
<?php
class Pyramid{
  private $count=0;
  function __construct($no){
    $this->count=$no;
    
  }
  function st(){
    return $this->stOne();
  }
  private function stOne()
  {
    $output="";
    for($i=1;$i<=$this->count;$i++){
      for($j=1;$j<=$i;$j++){
        $output.=$j." ";
      }
      $output.="<br>";
    }
    return $output;
  }
}
class Table extends Pyramid {
  private $tabl=0;
  function __construct($noo){
    $this->tabl=$noo;
    parent::__construct($noo);
  }
 
  function get(){
    return $this->table();
  }
  private function table()
  {
    $output="";
    for($i=1;$i<=10;$i++){
      $output.=$i*$this->tabl."<br>";
    }
    return $output;
  }
 
}
$tabObj = new Table(8);
echo $tabObj->get();
echo $tabObj->st();
 