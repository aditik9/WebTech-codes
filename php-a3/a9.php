<?php
  $cities = array('India'=>'Delhi','Japan'=>'Tokyo','South Korea'=>'Seoul');
  $iterator = new ArrayIterator($cities);
  $iterator->rewind();

  while($iterator->valid()){
    print $iterator->current() . " is the capital of " .$iterator->key(). "<br>";
    $iterator->next();
  }
 ?>
