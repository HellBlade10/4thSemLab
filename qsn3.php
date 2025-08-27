<?php
function to_seconds($minutes){
    return $minutes*60;
}
$minutes = 1;

echo "$minutes minutes = ".to_seconds($minutes)." seconds";

?>