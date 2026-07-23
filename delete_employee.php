<?php
require "db_connect.php";

// Example: delete a specific emp_id (hardcoded for testing)
$empId = 5; // <-- change to the ID you want to delete

$stmt = $conn->prepare("DELETE FROM employees WHERE emp_id = ?");
$stmt->bind_param("i", $empId);

if ($stmt->execute()) {
    echo "Rows affected: " . $stmt->affected_rows;
    if ($stmt->affected_rows === 1) {
        echo " — Delete successful.";
    } elseif ($stmt->affected_rows === 0) {
        echo " — No matching row found (check emp_id).";
    }
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
