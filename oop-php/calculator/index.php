<?php
    declare(strict_types = 1);
    include 'includes/autoloader.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Calculator </h1>

    <form action="includes/calc.inc.php" method="post">
    <p> My own calculator </p>
    <input type="number" name="num1" placeholder="first number">
    <select name="oper">
    <option value="add"> + </option>
    <option value ="sub"> - </option>
    <option value ="mul"> * </option>
    <option value ="div"> / </option>
    <option value ="gcd"> GCD </option>
    <option value ="lcm"> LCM </option>
    </select>
    <input type="number" name="num2" placeholder="second number">
    <button type="submit" name="submit">Calculate</button>
    </form>
</body>
</html>