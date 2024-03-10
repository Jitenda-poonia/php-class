<?php
$nu =[1=>11,12,13,14,15,16];
foreach ($nu as $key => $value) {
    echo "<pre>";
    echo $key. "=> ".$value; 
    if ($value==13) {
        break;
    } 
} 
// ===========================

// $students = [
//   ["name" => "jitendra" ,"age" => 50 ,"class" => "10th" ],
//   ["name" => "ramdev d" ,"age" => 40 ,"class" => "11th" ],
//   ["name" => "brp jp"  ,"age" => 30 ,"class" => "12th" ],
//   ["name" => "sharda"  ,"age" => 20 ,"class" => "13th" ]
// ];
// echo "<table border = '1' cellspacing = '0' width = 300px> ";
// echo "<tr>
//            <th> Sr   </th>
//           <th> Name </th>
//           <th> age </th>
//           <th> class</th>
//           <th> Edit,view <br>& delete</th>
           
//           </tr>";

// foreach ($students as $key => $value) {
//     echo "<tr>";
//     echo "<td>" .($key+1) ."</td>";
//     foreach ($value as $val) {

//         echo "<td> $val </td> "; 
        
//     }
//     echo "<td> <a href= ''> Edit</a>|<a href= ''> view</a> |<a href= ''> delete</a></td>";
//     echo "</tr>";
// }
// echo "</table>";   
//  ===================================   

  
// ==========================================
$students = [
    ["name" => "jitendra" , "age" => 50 , "class" => "10th"  ],
    ["name" => "ramdev d" , "age" => 40 , "class" => "11th" ],
    ["name" => "brp jp"  , "age" => 30 ,  "class" => "12th" ],
    ["name" => "sharda"  , "age" => 20 ,  "class" => "13th"]
  ];
  ?>
  <table border = "1" cellspacing = "0" width = "300"> 
   <tr>
             <th> Sr   </th>
            <th> Name </th>
            <th> age </th>
            <th> class</th>
            </tr>
    <?php     
  foreach ($students as $key => $value) {
      echo "<tr>";
      echo "<td>" .($key+1) ."</td>";
      echo  "<td>". $value["name"]."</td>";  
      echo  "<td>". $value["age"]."</td>";  
      echo  "<td>". $value["class"]."</td>";  
       
      echo "</tr>";
           
    }

    
  ?>
  </table> 
