<?php

$tasks_json = file_get_contents('tasks.json');

$tasks = json_decode($tasks_json);

if (isset($_POST['addTask'])) {
    $task = $_POST['addTask'];
    array_push($tasks, $task);
}
header('Content-Type: application/json');
echo json_encode($tasks);
