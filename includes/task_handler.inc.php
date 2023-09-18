<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $task_name = $_POST["task_name"];
    require_once "./tasks_contr.inc.php";
    $errors = [];
    if (is_task_empty($task_name)) {
        $errors["task_is_empty"] = "There is no name for task";
    }
    if ($errors) {
        header("Location: ../index.html");
        die();
    }
} else {
    header("Location: ../index.php");
}
