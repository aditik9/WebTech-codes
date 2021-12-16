<?php 
  $conn = mysqli_connect("localhost","root","");
  if($conn)
    echo "Connected";
  else{
    echo "Connection Failed!<br>";
    exit(1);
  }
  mysqli_close($conn);
 ?>