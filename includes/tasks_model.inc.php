<?php

declare(strict_types=1);

function add_task(object $pdo, string $task_name)
{
    $sql = "INSERT INTO tasks (task_name) VALUES (:task_name);";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':task_name', $task_name);
    $stmt->execute();
}
