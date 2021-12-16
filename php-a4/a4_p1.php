<?php 
  $firstName = $_GET['fname'];
  $lastName = $_GET['lname'];
  $gender = $_GET['gender'];
  $state = $_GET['state'];
  
  $languages = $_GET['lang'];
  $n = count($languages);
  
  echo "First Name is : ".$firstName;
  echo "<br>Last Name is : ".$lastName;
  echo "<br>Gender : ".$gender. "<br>";
  
  echo "Languages known : ";
  for($i=0 ; $i<$n ;$i++)
    echo $languages[$i]." ";
  
  echo "<br>State : ".$state;
 ?>