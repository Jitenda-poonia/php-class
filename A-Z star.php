
<?php
 for ($row=1; $row<=8; $row++)
{
  for ($column=1; $column<=5; $column++)
	{
        if ((($column == 1 or $column == 5) and $row != 1) or (($row == 1 or $row == 5) and ($column > 1 and $column < 5))){
            echo"@";
        }
        else {
            echo " &nbsp;&nbsp ";
        } 
                
    }        
  echo "<br>";
}
echo "<br>";
// ========================================================
for ($row=1; $row<=7; $row++)
{
  for ($column=1; $column<=5; $column++)
	{
      if ($column == 1 or (($row == 1 or $row == 4 or $row == 7) and ($column >1 and $column <5)) or ($column == 5 and ($row   != 1 and $row != 4 and $row != 7)))
            echo "$";    
        else  
            echo "&nbsp;&nbsp ";     
	}        
  echo "<br>";
}
// ============================================================
echo "<br>";

 for ($i=1; $i <=7; $i++) { 
    for ($j=1; $j <=5; $j++) { 
        if (($j==1) &&( $i != 1 && $i != 7)||($i==1 || $i==7) && ($j>1 && $j < 5)||($i==2 ||$i==6)&& ($j==5)){
            echo "#";
        } echo "&nbsp;&nbsp";
        
    }echo "<br>";
}
// ==============================================================================

for ($i=1; $i <=7; $i++) { 
  for ($j=1; $j <=5; $j++) {
    if((($j==1)||($j==5)&& ($i !=1 && $i !=7))|| (($i==1)||($i==7)) && ($j>1 && $j<5)) {
      echo  "*";
    }else {
      echo " &nbsp ";
    }
    }echo "<br>";
}  
// ==========================================================
for ($row=1; $row<=7; $row++)
{
  for ($column=1; $column<=5; $column++)
	{
     if ($column == 1 or (($row == 1) || ($row == 7) && ($column >1 and $column <= 5)) or ($row == 4 and $column > 1 and $column < 5))
            echo "*";    
        else  
            echo "&nbsp ";     
	}        
  echo "<BR>";
}
// ====================================================================
// for ($row=1; $row<=7; $row++)
// {
//   for ($column=1; $column<=5; $column++)
// 	{
//      if ($column == 1 or (($row == 1) && ($column >1 and $column <= 5)) or ($row == 4 and $column > 1 and $column < 5)){
//             echo "*";    
//      }else  
//             echo "&nbsp ";     
// 	}        
//   echo "<BR>";
// }
// =========================================================================
//   ***                                                       
//  *   *                                                      
//  *                                                          
//  * ***                                                      
//  *   *                                                      
//  *   *                                                      
//   ***
echo "<br>";
    for ($i=1; $i <=7; $i++) {
      for ($j=1; $j <=5; $j++) { 
        if(($j==1) && ($i>1 && $i<7)){
          echo "*";
        }elseif((($i==1) ||($i==7)) &&  ($j>1 && $j<5)){
          echo "*";
        }elseif((($i==2) ||($i==5)||($i==6)) && ($j==5)){
          echo "*";
        }elseif(($i==4)&&($j>2&& $j<=5)){
          echo "*";
        }else{
          echo "&nbsp;&nbsp";
        }
      }echo "<br>";
}

  
for($row=1;$row<=8;$row++){
  for($column=1;$column<=5;$column++){
      if ((($column ==1 or $column ==5) && $row != 1) || (($row ==1 || $row ==5) && ($column >1 and $column < 5))) {
       echo " * ";
      }else {
        echo "&nbsp; &nbsp";
      }
  }
  echo "<br>";
}
?>



