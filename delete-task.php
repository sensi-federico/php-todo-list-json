<?php
include __DIR__ . '/functions.php';

if (isset($_POST['post_index'])) {

    $tasks = read_data('tasks.json');
    array_splice($tasks, $_POST['post_index'], 1);

    echo rebuild_json($tasks);
}
