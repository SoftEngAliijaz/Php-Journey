<?php
session_start();

$errorTitle = $errorContent = "";
$task_title = $task_description = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $task_title = $_POST['title'];
    $task_description = $_POST['description'];

    if (empty($task_title)) {
        $errorTitle = "Task Title Should Not Be Empty";
    }

    if (empty($task_description)) {
        $errorTitle = "Task Description Should Not Be Empty";
    }

    if (empty($errorTitle) && empty($errorContent)) {
        $_SESSION['tasks'][] = [
            'title' => htmlspecialchars($task_title),
            'description' => htmlspecialchars($task_description)
        ];
    }
    echo "<h2>Your Task Details are: </h2>";
    echo "Your Task Title is: " . $task_title;
    echo "<br>";
    echo "Your Task Title is: " . $task_description;

    $task_title = "";
    $task_description = "";
}
if (!empty($errorTitle)) {
    echo $errorTitle . "<br>";
}
if (!empty($errorContent)) {
    echo $errorContent . "<br>";
}