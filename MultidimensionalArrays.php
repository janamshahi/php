<?php
  $list = array(
    array("ram singh","ktm",25),
    array("sita devi","dhn",24),
    array("hari saud","dhn",65),
    array("binod prasad","dhn",35),
    );

  //  for($col=0; $col <= 3; $col++){
  //  for($row=0; $row <= 2; $row++){
  //  echo $list[$col][$row]." ";
  //  }
  //  echo "<br>";
  //  }

echo "<table border='2px solid '>
  <tr>
    <th>name</th>
    <th>address</th>
    <th>age</th>
  </tr>
";

  foreach ($list as $value){
    foreach ($value as $info){
      echo "<td>$info</td>";
    }
    echo "<tr>";
  }
 echo "</table>"
  ?>
