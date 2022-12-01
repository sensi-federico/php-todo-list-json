<?php

function read_data($file): array
{
    $tasks_json = file_get_contents($file);
    $tasks_array = json_decode($tasks_json, true);

    return $tasks_array;
}

function rebuild_json($tasks)
{
    $json_tasks = json_encode($tasks);
    file_put_contents('tasks.json', $json_tasks);

    return $json_tasks;
}
