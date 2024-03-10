<?php
$students = [
  [ "age" => 50 ,"class" => "10th" ,"name" => "jitendra"],
  ["name" => "ramdev d" ,"age" => 40 ,"class" => "11th" ],
  ["name" => "brp jp"  ,"age" => 30 ,"class" => "12th" ],
  ["name" => "sharda"  ,"class" => "13th" ,"age" => 20]
];
echo "<table border = '1' cellspacing = '0' width = 300px> ";
echo "<tr>
           <th> Sr   </th>
          <th> Name </th>
          <th> age </th>
          <th> class</th>
          <th> Edit,view <br>& delete</th>
           
          </tr>";

foreach ($students as $key => $value) {
    echo "<tr>";
    echo "<td>" .($key+1) ."</td>";
   

        echo "<td>". $value["name"] ."</td> "; 
        echo "<td>". $value["age"]. "</td> "; 
        echo "<td>". $value["class"] ."</td> "; 
        
    
    echo "<td> <a href= ''> Edit</a>|<a href= ''> view</a> |<a href= ''> delete</a></td>";
    echo "</tr>";
}
 echo "</table>";   
// ==============================================================
$a = [
  ["jitendra",     "bhinwaram",   "tulchhi",  "Male",    "10/09/1998" , 7232026292],
    ["Ramdev",        "dularam",     "geeta",   "Male",     "11/05/1999" , 6232026292],
  ["Manisha",     "bhinwaram",   "tulchhi", "feMale" ,  "12/05/ 2000" ,  7732026292],
  ["sharad",        "bhinwaram",   "tulchhi", "feMale",   "01-jan- 1999",  7270026292],
  ["mamata",        "rameshwarram",  "tulchhi", "feMale",  1997,  9232026292],
  ["chnadarkaala",  "dularam",       "tulchi",  "feMale",  1998,  8232026292],
  ["rajveer",       "bhinwaram",      "tulchhi","Male",   1998 ,  9232026292]
];
?>
<table border = "1" cellspacing ="0" cellpadding ="3 "style = "background-color : pink";>
  <tr> 
     <th style= "color : blue"> Sr </th>
     <th style= "color : blue"> Name </th>
     <th style= "color : blue"> Father's </th>
     <th style= "color : blue"> Mother's </th>
     <th style= "color : blue"> Gender</th>
     <th style= "color : blue"> DOB </th>
     <th style= "color : #33bbcc"> Mob. </th>
</tr>
<?php
foreach ($a as $key => $value) {
  echo "<tr>";
  echo "<td>".($key+1)."</td>";
  foreach ($value as $v) {
     echo "<td> $v </td>";
  }
  echo "</tr>";
}
?>
</table>
