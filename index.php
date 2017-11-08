<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
  </head>
  <body>
  	hello
  <?php

  	require 'model.php';

    $tasklist = getTasks();

    foreach ($tasklist as $task){
  ?>
  
    <h4><?php echo $task ['labeltache']; ?></h4>
    <h5><?php echo $task ['description']; ?></h5>
    <br/>

  <?php
    }
  ?>
  </body>
</html>