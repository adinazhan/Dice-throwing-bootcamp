<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="num">Choose number of dice:</label><br>
        <input type="text" id="num" name="num" value="3" required><br>
        <label for="cars">Choose number of sides:</label>
        <select name="numside" id="numside">
            <option value="4">4 Sides</option>
            <option value="6">6 Sides</option>
            <option value="10">10 Sides</option>
            <option value="20">20 Sides</option>
        </select>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
require_once 'Dice.php';
$num_dice = $_POST['num'];
$num_sides = $_POST['numside'];


if ($num_dice > 0) {
    for ($i = 0; $i < $num_dice; $i++) {
        $myDice = new Dice($num_sides);
        echo $myDice;
        echo "<br>";
    }
}
