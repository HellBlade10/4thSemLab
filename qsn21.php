<?php
function addLastFrontBack($str) {
    $last = substr($str, -1);
    return $last . $str . $last;
}

echo addLastFrontBack("Red") . "<br>";
echo addLastFrontBack("Green") . "<br>";
echo addLastFrontBack("1") . "<br>";
?>
