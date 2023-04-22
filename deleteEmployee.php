<?php
try {
    require("BDconnect.php");

    if ($_SERVER['REQUEST_METHOD'] === "DELETE") {
        parse_str(file_get_contents('php://input'), $_DELETE);
        $ID = $_DELETE['ID'];

        $sql = "DELETE FROM employees where ID=$ID";
        $result = $conn->query($sql);
    }
} catch (Exception $e) {
    echo "<script>console.log({$e->getMessage()})</script>";
}
?>