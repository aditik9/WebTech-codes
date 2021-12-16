<?php 

  $subjects = array('DBMQP','OS','JAVA','WebTech','CL-IPR','MTR');
  $len = count($subjects);
  echo "The elements in the array are";
  for($i=0 ; $i<$len ; $i++){
    echo "<br>".$subjects[$i];
  }

 ?>