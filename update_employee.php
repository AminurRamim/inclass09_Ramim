<?php
require "db_connect.php";

// Example: update salary for a specific emp_id (hardcoded for testing)
$empId     = 1;         // <-- change to the ID you want to update
$newSalary = 76000.00;  // <-- new salary value

$stmt = $conn->prepare("UPDATE employees SET salary = ? WHERE emp_id = ?");
$stmt->bind_param("di", $newSalary, $empId);

if ($stmt->execute()) {
    echo "Rows affected: " . $stmt->affected_rows;
    if ($stmt->affected_rows === 1) {
        echo " — Update successful.";
    } elseif ($stmt->affected_rows === 0) {
        echo " — No matching row found (check emp_id).";
    }
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
