<?php

function getTasks() {
	require 'pdo.php';
	$pdo_statement = $pdo->query('SELECT * FROM tasks_table ORDER BY task_id DESC');
	return $pdo_statement;
}

function createTask() {

    $title = $_POST['title'];
    $description = $_POST['description'];

    require 'pdo.php';

    $query = $pdo->prepare('INSERT INTO tasks_table (task_name, task_description) VALUES(:title, :description)');
    $query->bindParam(':title', $title, PDO::PARAM_STR, 50);
    $query->bindParam(':description', $description, PDO::PARAM_STR, 50);
    $query->execute();
    
    echo 'Nouvelle tâche ajoutée :';

}