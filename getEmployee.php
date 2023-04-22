<?php
require("BDconnect.php");
try {
    $sql = "SELECT * FROM employees";
    $result = $conn->query($sql);

    echo "<table class='employee-table'>
        <tr>
        <th>Name</th>
        <th>Department</th>
        <th>Phone</th>
        <th>Actions</th>
        </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td> {$row['Name']} </td>";
        echo "<td> {$row['Department']} </td>";
        echo "<td> {$row['Phone']} </td>";
        echo "<td> ... </td>";
        echo "</tr>";
    }

    echo "</table>";
} catch (Exception $e) {
    echo "<script>console.log({$e->getMessage()})</script>";
}
