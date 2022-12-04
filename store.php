<?php
if (isset($_POST['title'])) {
    $task = [
        'title' => $_POST['title'],
        'done' => false
    ];

    $tasksJson = file_get_contents('tasks.json');
    $tasksArray = json_decode($tasksJson, true);

    $tasksArray[] = $task;

    file_put_contents('tasks.json', json_encode($tasksArray));
    header('Content-Type: application/json');
    echo json_encode($tasksArray);
}
