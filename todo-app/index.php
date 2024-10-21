<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task Manager</title>
        <link rel="stylesheet" href="styles.css" type="text/css">
    </head>

    <body>
        <?php

    $errorTitle = $errorContent = "";
    $task_title = $task_content = "";

    if (!isset($_SESSION['tasks'])) {
        $_SESSION['tasks'] = [];
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $task_title = $_POST['task-title'];
        $task_content = $_POST['task-content'];

        if (empty($task_title)) {
            $errorTitle = "Task Title should not be empty";
        }

        if (empty($task_content)) {
            $errorContent = "Task Content should not be empty";
        }

        if (empty($errorTitle) && empty($errorContent)) {
            $_SESSION['tasks'][] = ['title' => htmlspecialchars($task_title), 'content' => htmlspecialchars($task_content)];
            $task_title = "";
            $task_content = "";
        }
    }
    ?>
        <div class="main-div">
            <div class="content-div">
                <h1>Create a Task</h1>
                <form action="" method="post">
                    <label for="task-title">Task Title:</label>
                    <input class="input" type="text" name="task-title"
                        value="<?php echo htmlspecialchars($task_title); ?>">
                    <span class="error"><?php echo $errorTitle; ?></span>
                    <br><br>

                    <label for="task-content">Task Content:</label>
                    <input class="input" type="text" name="task-content"
                        value="<?php echo htmlspecialchars($task_content); ?>">
                    <span class="error"><?php echo $errorContent; ?></span>
                    <br><br>

                    <div class="button">
                        <button class="action-button" type="submit">Submit</button>
                    </div>
                </form>

                <h2>Task List</h2>
                <ul>
                    <?php
                foreach ($_SESSION['tasks'] as $task) {
                    echo "<li><strong>Task Title:</strong> " . $task['title'] . "<br><strong>Task Content:</strong> " . $task['content'] . "</li>";
                }
                ?>
                </ul>
            </div>
        </div>


    </body>

</html>