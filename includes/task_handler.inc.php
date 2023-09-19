<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $task_name = $_POST["task_name"];
    require_once "./config_sessions.inc.php";
    require_once "./dbh.ini.php";
    require_once "./tasks_contr.inc.php";
    require_once "./tasks_model.inc.php";
    // ERROR check
    try {
        $errors = [];
        if (is_task_empty($task_name)) {
            $errors["task_is_empty"] = "There is no name for task $task_name";
        }
        if ($errors) {
            $_SESSION["error_list"] = $errors;
            header("Location: ../index.php");
            die();
        }
    } catch (PDOException $e) {
        die("Query failed: {$e->getMessage()}");
    }
    // DB update
    add_task($pdo, $task_name);
    header("Location: ../index.php");
} else {
    header("Location: ../index.php");
    die();
}
