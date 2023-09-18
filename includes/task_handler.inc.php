<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $task_name = $_POST["task_name"];

    require_once "./config_sessions.inc.php";
    require_once "./dbh.ini.php";
    require_once "./tasks_contr.inc.php";
    require_once "./tasks_model.inc.php";

    // ERROR check
    $errors = [];
    if (is_task_empty($task_name)) {
        $errors["task_is_empty"] = "There is no name for task $task_name";
    }
    if ($errors) {
        foreach ($errors as $error) {
            echo "<div class=\"error-container\">$error </div>";
        }
        unset($errors);
        die();
    }

    // DB update
    add_task($pdo, $task_name);

    header("Location: ../index.php");
    die();
} else {
    header("Location: ../index.php");
    die();
}
