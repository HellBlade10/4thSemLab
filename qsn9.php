<?php 
$wins = 3;
$draws = 1;
$losses = 0;

function total_points($wins, $draws, $losses){
    return ($wins * 3) + ($draws * 1) + ($losses * 0);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Points</title>
</head>
<body>
    <h1>Total Points Calculator</h1>
    <form method="post">
        <label for="wins">Wins: </label><input type="number" name="wins" placeholder="Number of Wins"/><br><br>
        <label for="draws">Draws: </label><input type="number" name="draws" placeholder="Number of Draws"/><br><br>
        <label for="losses">Losses: </label><input type="number" name="losses" placeholder="Number of Losses"/><br><br>
        <button type="submit">Calculate</button>
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $wins = $_POST['wins'];
    $draws = $_POST['draws'];
    $losses = $_POST['losses'];

    echo "Total Points: " . total_points($wins, $draws, $losses);
}
?>
