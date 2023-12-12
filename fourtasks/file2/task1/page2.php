<!DOCTYPE html>
<html>
<head>
  <title>Action Page</title>
</head>
<body>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      echo "<h2>Data sent via POST method:</h2>";
      echo "Email: " . $_POST['email'] . "<br>";
      echo "Password: " . $_POST['password'];
    } elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
      echo "<h2>Data sent via GET method:</h2>";
      echo "Email: " . $_GET['email'] . "<br>";
      echo "Password: " . $_GET['password'];
    } else {
      echo "Invalid request method";
    }
  ?>
</body>
</html>
