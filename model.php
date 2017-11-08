<?php

function getTasks() {
	require 'create-pdo.php';
	$pdo_statement = $pdo->query('SELECT tacheid, labeltache, description FROM Tache ORDER BY tacheid');
	return $pdo_statement;
}