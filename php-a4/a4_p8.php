<?php 
  $conn = mysqli_connect("localhost","root","","college");
  if($conn)
    echo "Connected<br>";
  else{
    echo "Connection Failed!<br>";
    exit(1);
  }
    
  $query = "SELECT * FROM student where rollno = '56'";
  $result = mysqli_query($conn,$query);
  if($result)
  {
    $n = mysqli_num_rows($result);
    if($n>0)
    {
      while($row = mysqli_fetch_array($result)){
        echo "<br>Roll No. : " .$row['rollno'];  
        echo "<br>Name : " .$row['name'];   
        echo "<br>Branch : " .$row['branch']. "<br>";
      }
    }
    else {
      echo "<br>Record not found!";
    }
  }
  else {
    echo "<br>Display operation failed!";
  }
    
  mysqli_close($conn);
 ?>