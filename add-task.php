<?php
require __DIR__ . '/functions.php';
if (isset($_POST['title'])) {

    $task = [
        'title' => $_POST['title'],
        'done' => false,
    ];

    $tasks_array = read_data('tasks.json');
    array_unshift($tasks_array, $task);

    $json_tasks = json_encode($tasks_array);
    file_put_contents('tasks.json', $json_tasks);

    header('Content-Type: application/json');
    echo file_get_contents('tasks.json');
}
