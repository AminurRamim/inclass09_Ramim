<?php
require "db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Inclass-09 — Employees CRUD</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body class="demo-page">
<div class="demo-shell">
  <div class="demo-card">
    <h1 class="demo-title">Inclass-09 · Employees CRUD</h1>
    <p class="demo-subtitle">
      Connection status:
      <?php echo $conn->connect_error ? "Failed" : "Connected successfully | Server: " . $conn->server_info; ?>
    </p>
    <div class="demo-actions">
      <a class="demo-link" href="employee_demo.php">Add Employee (Form)</a>
      <a class="demo-link" href="read_employees.php">View All Employees</a>
      <a class="demo-link" href="create_employee.php">Create (script)</a>
      <a class="demo-link" href="update_employee.php">Update (script)</a>
      <a class="demo-link" href="delete_employee.php">Delete (script)</a>
    </div>
  </div>
</div>
</body>
</html>
<?php $conn->close(); ?>
