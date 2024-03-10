<?php
class Pyramid {
  public $count=0;
  function __construct($no){
    $this->count=$no;
    
  }
  function stOne()
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
  public $tabl=0;
  function __construct ( $noo){
    $this->tabl=$noo;
    parent::__construct($noo);
  }
  function table()
  {
    $output="";
    for($i=1;$i<=10;$i++){
      $output.=$i*$this->tabl."<br>";
    }
    
    return $output;
  }
 
}
$tabObj = new Table (8);
echo $tabObj->table();
echo $tabObj->stOne()

?>