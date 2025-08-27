<?php
function carsNeeded($n) {
    return ceil($n / 5);
}
$people = 17;
echo "Cars needed for $people people: " . carsNeeded($people);
?>
