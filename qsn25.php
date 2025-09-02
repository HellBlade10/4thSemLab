<?php
$info = [
    'Name' => 'Ram Bahadur',
    'Address' => 'Lalitpur',
    'Email' => 'info@ram.com',
    'Phone' => '98454545',
    'Website' => 'www.ram.com'
];

echo "<table border='1' cellpadding='8' cellspacing='0'>";
foreach ($info as $key => $value) {
    echo "<tr>";
    echo "<td><b>$key</b></td>";
    if ($key == "Email") {
        echo "<td><a href='mailto:$value'>$value</a></td>";
    } elseif ($key == "Website") {
        echo "<td><a href='http://$value' target='_blank'>$value</a></td>";
    } else {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
