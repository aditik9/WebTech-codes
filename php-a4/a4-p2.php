<?php 
  $firstName = $_POST['fname'];
  $lastName = $_POST['lname'];
  $gender = $_POST['gender'];
  $state = $_POST['state'];
  
  $languages = $_POST['lang'];
  $n = count($languages);
  
  echo "First Name is : ".$firstName;
  echo "<br>Last Name is : ".$lastName;
  echo "<br>Gender : ".$gender. "<br>";
  
  echo "Languages known : ";
  for($i=0 ; $i<$n ;$i++)
    echo $languages[$i]." ";
  
  echo "<br>State : ".$state;
 ?>