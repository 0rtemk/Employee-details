<?php
try {
    require("BDconnect.php");
    $Name = $_POST['Name'];
    $Department = $_POST['Department'];
    $Phone = $_POST['Phone'];

    $sql = "INSERT INTO employees (Name, Department, Phone) values ('$Name', '$Department', '$Phone')";
    $conn->query($sql);
} catch (Exception $e) {
    echo "<script>console.log({$e->getMessage()})</script>";
}
?>