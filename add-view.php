<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link href="microcms.css" rel="stylesheet" />
  </head>
  <body>
  	<h2><?php echo $_POST['title']; ?></h2>
  	<p><?php echo $_POST['description']; ?></p>
  	<br/><br/><br/>
  	<p>Cette tâche a été ajoutée - <a href="index.php">Retour à la liste des tâches</a></p>
  </body>
</html>