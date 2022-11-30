<?php
// $tasks = [
//     "Learn PHP",
//     "Learn Vue",
//     "Read a book"
// ];

$tasks_string = file_get_contents('tasks.json');
$tasks_list = json_decode($tasks_string);

header('Content-Type: application/json');
echo json_encode($tasks_list);

if (!empty($_POST['task'])) {

    $task = $_POST['task'];

    array_push($tasks_list, $task);

    $json_tasks = json_encode($tasks_list);

    file_put_contents('tasks.json', $json_tasks);
}
