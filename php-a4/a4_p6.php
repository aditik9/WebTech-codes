<?php 
  $conn = mysqli_connect("localhost","root","","college");
  if($conn)
    echo "Connected<br>";
  else{
    echo "Connection Failed!<br>";
    exit(1);
  }
    
  $query = "INSERT INTO student(rollno,name,branch) values('55','Isha','Computer'),('56','Rita','ECE'),('57','Suresh','Mechanical')";
  $result = mysqli_query($conn,$query);
  if($result)
    echo "Data inserted successfully!";
  else
    echo "Data insertion failed!";
    
  mysqli_close($conn);
 ?>