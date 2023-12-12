<!DOCTYPE html>
<html>
<head>
  <title>Simple Search Engine</title>
</head>
<body>
  <h1>Simple Search Engine</h1>
  <form action="#" method="get">
    Enter URL: <input type="text" name="url"><br><br>
    <input type="submit" value="GO">
  </form>
</body>
</html>
<?php
if (isset($_GET['url']) && !empty($_GET['url'])) {
    $url = $_GET['url'];
    header("Location: $url");
    exit();
} else {
    echo "Please enter a valid URL.";
}
?>
