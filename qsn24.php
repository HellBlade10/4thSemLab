<?php
function upperLastThree($str) {
    if (strlen($str) < 3) {
        return strtoupper($str);
    }
    $front = substr($str, 0, -3);
    $last = strtoupper(substr($str, -3));
    return $front . $last;
}

echo upperLastThree("Nepal") . "<br>";
echo upperLastThree("Npl") . "<br>";
echo upperLastThree("Bca") . "<br>";
echo upperLastThree("Bachelor") . "<br>";
?>