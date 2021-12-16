<?php 
  if(isset($_POST['number']))
  {
    $n = $_POST['number'];
    function sumofn($n)
    {
      if($n == 1)
        return($n);
      else {
        return ($n + sumofn($n-1));
      }
    }
    $sum = sumofn($n);
    echo "<br />The sum of first $n natural number is : $sum";
  }
 ?>