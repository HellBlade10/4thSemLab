<?php
// Multidimensional array to store student mark data
$students = [
    ['SN' => 1, 'Name' => 'Rajesh', 'Roll' => 25, 'Web Tech II' => 56, 'DBMS' => 89, 'Economics' => 57, 'DSA' => 64, 'Account' => 98, 'Total' => 364, 'Result' => 'pass'],
    ['SN' => 2, 'Name' => 'hari', 'Roll' => 5, 'Web Tech II' => 56, 'DBMS' => 89, 'Economics' => 57, 'DSA' => 64, 'Account' => 98, 'Total' => 364, 'Result' => 'pass'],
    ['SN' => 3, 'Name' => 'Shyam', 'Roll' => 6, 'Web Tech II' => 54, 'DBMS' => 79, 'Economics' => 57, 'DSA' => 69, 'Account' => 98, 'Total' => 357, 'Result' => 'pass'],
    ['SN' => 4, 'Name' => 'Rita', 'Roll' => 10, 'Web Tech II' => 16, 'DBMS' => 89, 'Economics' => 56, 'DSA' => 64, 'Account' => 98, 'Total' => 323, 'Result' => 'fail'],
    ['SN' => 5, 'Name' => 'Gita', 'Roll' => 4, 'Web Tech II' => 56, 'DBMS' => 89, 'Economics' => 57, 'DSA' => 69, 'Account' => 98, 'Total' => 369, 'Result' => 'pass'],
    ['SN' => 6, 'Name' => 'Sita', 'Roll' => 24, 'Web Tech II' => 56, 'DBMS' => 99, 'Economics' => 57, 'DSA' => 24, 'Account' => 98, 'Total' => 334, 'Result' => 'fail'],
    ['SN' => 7, 'Name' => 'Sita', 'Roll' => 24, 'Web Tech II' => 56, 'DBMS' => 99, 'Economics' => 57, 'DSA' => 24, 'Account' => 98, 'Total' => 334, 'Result' => 'fail'],
    ['SN' => 8, 'Name' => 'Sita', 'Roll' => 24, 'Web Tech II' => 56, 'DBMS' => 99, 'Economics' => 57, 'DSA' => 24, 'Account' => 98, 'Total' => 334, 'Result' => 'fail']
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mark Ledger</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: black;
        }
        tr:nth-child(odd) {
            background-color: black;
            color: white;
        }
        tr:nth-child(even) {
            background-color: white;
            color: black;
        }
    </style>
</head>
<body>
    <h2>Mark Ledger</h2>
    <table>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Web Tech II</th>
            <th>DBMS</th>
            <th>Economics</th>
            <th>DSA</th>
            <th>Account</th>
            <th>Total</th>
            <th>Result</th>
        </tr>
        <?php
        foreach ($students as $student) {
            echo "<tr class='{$student['Result']}'>";
            echo "<td>" . $student['SN'] . "</td>";
            echo "<td>" . $student['Name'] . "</td>";
            echo "<td>" . $student['Roll'] . "</td>";
            echo "<td>" . $student['Web Tech II'] . "</td>";
            echo "<td>" . $student['DBMS'] . "</td>";
            echo "<td>" . $student['Economics'] . "</td>";
            echo "<td>" . $student['DSA'] . "</td>";
            echo "<td>" . $student['Account'] . "</td>";
            echo "<td>" . $student['Total'] . "</td>";
            echo "<td>" . $student['Result'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>