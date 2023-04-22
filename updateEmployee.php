<?php
try {
    require("BDconnect.php");

    if ($_SERVER['REQUEST_METHOD'] === "GET") {
        $ID = $_GET['ID'];

        $sql = "SELECT * FROM employees where ID = $ID";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "{$row['ID']},{$row['Name']},{$row['Department']},{$row['Phone']}";
    }

    if ($_SERVER['REQUEST_METHOD'] === "PUT") {
        parse_str(file_get_contents('php://input'), $_PUT);

        $sql = "UPDATE employees SET Name = '{$_PUT['Name']}', 
                                    Department = '{$_PUT['Department']}', 
                                    Phone = '{$_PUT['Phone']}' 
                WHERE ID = {$_PUT['ID']}";
        $result = $conn->query($sql);
    }

} catch (Exception $e) {
    echo "<script>console.log({$e->getMessage()})</script>";
}
?>