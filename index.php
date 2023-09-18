<?php
require_once "./includes/config_sessions.inc.php";
require_once "./includes/tasks_view.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="./styles/main.css">
</head>

<body>
    <div class="container">
        <h1>To-Do List</h1>
        <form class="input-container" action="./includes/task_handler.inc.php" method="post">
            <input type="text" name="task_name" placeholder="Add a new task">
            <button id="addTask">Add</button>
        </form>

        <ul class="task-list">
            <?php
            render_tasks();
            ?>
        </ul>
    </div>
</body>

</html>