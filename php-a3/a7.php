<?php
  //Q. PHP program to demonstrate multidimensional array. Display contents using nested for loops

  $dept = array('comp' => array('Networks','Graphics','Java'),
                'ece' => array('es','mpmc','eoe'));

  echo "The elements in the array are <br><br>";
  foreach($dept as $i=>$value)
  {
      echo $i." : ";
      $len = count($value);
      for($j=0 ; $j<$len ; $j++)
      {
          echo $value[$j]." ";
      }
      echo "<br>";
  }
 ?>
