<?php
$visitorsFile = "test.txt";

if (file_exists($visitorsFile)) {
    $visitorsCount = file_get_contents($visitorsFile);
    $visitorsCount++;
} else {
    $visitorsCount = 1;
}

file_put_contents($visitorsFile, $visitorsCount);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Visitor Counter</title>
</head>

<body>
    <h1>Welcome to the Website</h1>
    <p>You are visitor number <?php echo $visitorsCount; ?> to this site.</p>
</body>

</html>