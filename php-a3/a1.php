<?php 
  $n = $_POST['number'];
  
  echo "The multiplication table of $n <br>";
  for($i=1 ; $i<=10 ; $i++)
  {
    $ans = $n*$i;
    echo $n." x ".$i." = ".$ans. "<br>";
  }

 ?>