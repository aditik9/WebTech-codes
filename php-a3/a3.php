<?php 
  function updateValue(&$x){
    $x = 0;
  }

  function displayValue($x){
    echo "<br>The value of variable x is $x";
  }
  
  $x = 50;
  displayValue($x);
  updateValue($x);
  displayValue($x);

 ?>