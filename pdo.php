  <?php
  	/* Connecxion à une base ODBC avec l'invocation de pilote*/
  	require 'config.php';

  	try {
  		$pdo = new PDO($dsn, $user, $password);
  	} catch (PDOException $e) {
  		echo 'Connexion échouée : ' . $e->getMessage();
    } 
  