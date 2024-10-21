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
    session_start(); // Start session to store tasks

    $errorTitle = $errorContent = "";
    $task_title = $task_content = "";
    $task_index = -1; // To track which task is being edited

    // Initialize tasks array if not already set
    if (!isset($_SESSION['tasks'])) {
        $_SESSION['tasks'] = [];
    }

    // Handle form submission for adding/updating tasks
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['edit_index'])) {
            // Update task
            $task_index = $_POST['edit_index'];
            $_SESSION['tasks'][$task_index]['title'] = htmlspecialchars($_POST['task-title']);
            $_SESSION['tasks'][$task_index]['content'] = htmlspecialchars($_POST['task-content']);
        } else {
            // Add new task
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
    }

    // Handle task deletion
    if (isset($_GET['delete_index'])) {
        $delete_index = $_GET['delete_index'];
        unset($_SESSION['tasks'][$delete_index]);
        $_SESSION['tasks'] = array_values($_SESSION['tasks']); // Re-index array
    }
    ?>

        <div class="main-div">
            <div class="content-div">
                <h1>Welcome to PHP Journey</h1>
                <h2>Please Create Your Task</h2>
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

                    <?php if ($task_index >= 0): ?>
                    <input type="hidden" name="edit_index" value="<?php echo $task_index; ?>">
                    <?php endif; ?>

                    <div class="button">
                        <button class="action-button"
                            type="submit"><?php echo ($task_index >= 0) ? 'Update' : 'Submit'; ?></button>
                    </div>
                </form>

                <h2>Task List</h2>
                <ul>
                    <?php
                foreach ($_SESSION['tasks'] as $index => $task) {
                    echo "<li>
                            <strong>Task Title:</strong> " . $task['title'] . "<br>
                            <strong>Task Content:</strong> " . $task['content'] . "<br>
                            <form action='' method='post' style='display:inline;'>
                                <input type='hidden' name='task-title' value='" . htmlspecialchars($task['title']) . "'>
                                <input type='hidden' name='task-content' value='" . htmlspecialchars($task['content']) . "'>
                                <input type='hidden' name='edit_index' value='$index'>
                                <button type='submit'>Edit</button>
                            </form>
                            <a href='?delete_index=$index' onclick='return confirm(\"Are you sure you want to delete this task?\");'>Delete</a>
                          </li>";
                }
                ?>
                </ul>
            </div>
        </div>
    </body>

</html>