<?php 
  $n = $_POST['number'];
  factorial($n);

  function factorial($n)
  {
    $fact=1;
    for($i=$n ; $i>1 ; $i--)
    {
      $fact = $fact*$i;
    }
    echo "<br>The factorial of $n : $fact";
  }

 ?>