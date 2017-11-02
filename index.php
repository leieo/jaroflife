<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
  </head>
  <body>
  	hello
  <?php
  	/* Connecxion à une base ODBC avec l'invocation de pilote*/
  	require 'config.php';

  	$dsn = "mysql:dbname=$dbname;host=$host";

  	try {
  		$pdo = new PDO($dsn, $user, $password);
  	} catch (PDOException $e) {
  		echo 'Connexion échouée : ' . $e->getMessage();
    } 
  ?>
  </body>
</html>