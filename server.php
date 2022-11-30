<?php
$tasks = [
    "Learn PHP",
    "Learn Vue",
    "Read a book"
];


header('Content-type: application/json');
echo json_encode($tasks);
