<?php

declare(strict_types=1);

function is_task_empty(string $task_name): bool
{
    return empty($task_name);
}
