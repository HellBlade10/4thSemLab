<?php

$chicken_legs = 2;
$cow_legs = 4;
$pig_legs = 4;

function calculate_total_legs($chicken, $cow, $pig) {
    global $chicken_legs, $cow_legs, $pig_legs;
    return ($chicken * $chicken_legs) + ($cow * $cow_legs) + ($pig * $pig_legs);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leg Calculator</title>
</head>
<body>
    <h1>Leg Calculator</h1>
    <form method="post">
        <label for="chicken">Chickens: </label>
        <input type="number" name="chicken" placeholder="Number of Chickens"/><br><br>

        <label for="cow">Cows: </label>
        <input type="number" name="cow" placeholder="Number of Cows"/><br><br>

        <label for="pig">Pigs: </label>
        <input type="number" name="pig" placeholder="Number of Pigs"/><br><br>

        <button type="submit">Calculate</button>
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $chicken = $_POST['chicken'];
    $cow = $_POST['cow'];
    $pig = $_POST['pig'];

    echo "Total Legs: " . calculate_total_legs($chicken, $cow, $pig);
}
?>
