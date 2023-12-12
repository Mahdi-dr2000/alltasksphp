<!DOCTYPE html>
<html>
<head>
  <title>To-Do List</title>
  <style>
    /* Basic styling for the to-do list */
    body {
      font-family: Arial, sans-serif;
    }
    .todo-container {
      width: 300px;
      margin: 50px auto;
    }
    ul {
      list-style-type: none;
      padding: 0;
    }
    li {
      margin-bottom: 10px;
      cursor: pointer;
    }
    .completed {
      text-decoration: line-through;
    }
  </style>
</head>
<body>
  <div class="todo-container">
    <h2>To-Do List</h2>
    <form method="post" action="">
      <input type="text" name="task" placeholder="Enter a task">
      <button type="submit" name="addTask">Add</button>
    </form>
    <ul>
      <?php
      session_start();

      if (!isset($_SESSION['tasks'])) {
        $_SESSION['tasks'] = array();
      }

      if (isset($_POST['addTask'])) {
        $task = $_POST['task'];
        if (!empty($task)) {
          array_push($_SESSION['tasks'], $task);
        }
      }

      if (isset($_GET['delete'])) {
        $index = $_GET['delete'];
        unset($_SESSION['tasks'][$index]);
        $_SESSION['tasks'] = array_values($_SESSION['tasks']);
      }

      if (!empty($_SESSION['tasks'])) {
        foreach ($_SESSION['tasks'] as $key => $task) {
          echo "<li><a href='todo.php?delete=$key'>❌</a> $task</li>";
        }
      } else {
        echo "<li>No tasks yet</li>";
      }
      ?>
    </ul>
  </div>
</body>
</html>
