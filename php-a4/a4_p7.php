<?php 
  $conn = mysqli_connect("localhost","root","","college");
  if($conn)
    echo "Connected<br>";
  else{
    echo "Connection Failed!<br>";
    exit(1);
  }
  $query = "SELECT * FROM student";
  $result = mysqli_query($conn,$query);
  if($result)
  {
    while($row = mysqli_fetch_array($result)){
      echo "<br>Roll No. : " .$row['rollno'];  
      echo "<br>Name : " .$row['name'];   
      echo "<br>Branch : " .$row['branch']. "<br>";
    }
  }
  else
    echo "Display operation failed!";
    
  mysqli_close($conn);
 ?>