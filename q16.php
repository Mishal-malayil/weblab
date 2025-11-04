<html>
<head>
    <title>Odd or Even Checker</title>
</head>
<body>
<h2>Check Whether a Number is Odd or Even</h2>

<form method="GET" action="">
    Enter a number: <input type="number" name="number" required>
    <input type="submit" value="Check">
</form>

<?php
if (isset($_GET['number'])) {
    $num = $_GET['number'];

    if ($num % 2 == 0) {
        echo "<h3>The number $num is Even.</h3>";
    } else {
        echo "<h3>The number $num is Odd.</h3>";
    }
}
?>
</body>
</html>

