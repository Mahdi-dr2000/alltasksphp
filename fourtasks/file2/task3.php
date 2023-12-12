<!DOCTYPE html>
<html>
<head>
  <title>Simple PHP Calculator</title>
</head>
<body>
  <h2>Simple PHP Calculator</h2>
  <form method="post" action="">
    <input type="number" name="num1" placeholder="Enter number 1" required><br><br>
    <input type="number" name="num2" placeholder="Enter number 2" required><br><br>
    <select name="operation">
      <option value="add">Addition (+)</option>
      <option value="subtract">Subtraction (-)</option>
      <option value="multiply">Multiplication (*)</option>
      <option value="divide">Division (/)</option>
    </select><br><br>
    <input type="submit" name="calculate" value="Calculate">
  </form>

  <?php
  if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch ($operation) {
      case 'add':
        $result = $num1 + $num2;
        echo "Result: $num1 + $num2 = $result";
        break;
      case 'subtract':
        $result = $num1 - $num2;
        echo "Result: $num1 - $num2 = $result";
        break;
      case 'multiply':
        $result = $num1 * $num2;
        echo "Result: $num1 * $num2 = $result";
        break;
      case 'divide':
        if ($num2 == 0) {
          echo "Division by zero is not allowed";
        } else {
          $result = $num1 / $num2;
          echo "Result: $num1 / $num2 = $result";
        }
        break;
      default:
        echo "Invalid operation";
        break;
    }
  }
  ?>
</body>
</html>
