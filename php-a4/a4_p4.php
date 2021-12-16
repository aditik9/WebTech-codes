<?php 
  $conn = mysqli_connect("localhost","root","");
  if($conn)
    echo "Connected<br>";
  else{
    echo "Connection Failed!<br>";
    exit(1);
  }
    
  $query = "CREATE DATABASE college";
  $result = mysqli_query($conn,$query);
  if($result)
    echo "Database created successfully!";
  else
    echo "Database creation failed!";
    
  mysqli_close($conn);
 ?>