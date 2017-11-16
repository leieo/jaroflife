<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
  </head>
  <body>
  	hello

  <?php

  include 'addform.php';

  	require 'model.php';

    $tasklist = getTasks();

    foreach ($tasklist as $task):
  ?>
  
    <h4><?php echo $task ['task_name']; ?></h4>
    <h5><?php echo $task ['task_description']; ?></h5>
    <br/>

  <?php
    endforeach;

  ?>
  </body>
</html>