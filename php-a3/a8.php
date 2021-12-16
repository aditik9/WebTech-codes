<?php
  $subjects = array('DBMQP','OS','JAVA','WebTech','CL-IPR','MTR');
  echo "Numeric array <br>";
  print_r($subjects);

  $emp_salary = array("Nick"=>45000, "Joe"=>50000, "Tia"=>70000);
  echo "<br><br>Associative array <br>";
  print_r($emp_salary);

  $x = array(
    'comp' => array('Networks','Graphics','Java'),
    'ece' => array('es','mpmc','eoe')
  );
  echo "<br><br>Multidimensional array <br>";
  print_r($x);
 ?>
