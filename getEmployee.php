<?php
try {
    require("BDconnect.php");
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
        echo "<td>
                <button class='btn-update' value={$row['ID']} onclick = 'Update(this.value)'>Update</button>
                <button class='btn-delete' value={$row['ID']} onclick = 'Delete(this.value)'>Delete</button>
            </td>";
        echo "</tr>";
    }

    echo "</table>";
} catch (Exception $e) {
    echo "<script>console.log({$e->getMessage()})</script>";
}

?>
