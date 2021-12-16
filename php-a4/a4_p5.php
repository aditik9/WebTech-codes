<?php 
  $conn = mysqli_connect("localhost","root","","college");
  if($conn)
    echo "Connected<br>";
  else{
    echo "Connection Failed!<br>";
    exit(1);
  }
    
  $query = "CREATE TABLE student(rollno integer(2) not null,name varchar(20) not null,
            branch varchar(20) not null,primary key(rollno))";
  $result = mysqli_query($conn,$query);
  if($result)
    echo "Table created!";
  else
    echo "Table creation failed";
    
  mysqli_close($conn);
 ?>