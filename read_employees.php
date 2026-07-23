<?php
require "db_connect.php";

$result = $conn->query("SELECT emp_id, emp_name, job_name, salary, hire_date, department_name FROM employees ORDER BY emp_id ASC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Employees — Read</title>
<link rel="stylesheet" href="css/style.css">
<style>
table.emp-table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
table.emp-table th, table.emp-table td {
  border: 1px solid var(--demo-border, #444);
  padding: .5rem .75rem;
  text-align: left;
}
table.emp-table th { background: rgba(255,255,255,0.08); }
</style>
</head>
<body class="demo-page">
<div class="demo-shell">
  <div class="demo-card">
    <h1 class="demo-title">All Employees</h1>
    <p class="demo-subtitle">Rows found: <?php echo $result ? $result->num_rows : 0; ?></p>

    <table class="emp-table">
      <tr>
        <th>ID</th><th>Name</th><th>Job</th><th>Salary</th><th>Hire Date</th><th>Department</th>
      </tr>
      <?php if ($result && $result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?php echo htmlspecialchars($row['emp_id']); ?></td>
          <td><?php echo htmlspecialchars($row['emp_name']); ?></td>
          <td><?php echo htmlspecialchars($row['job_name']); ?></td>
          <td><?php echo htmlspecialchars(number_format($row['salary'], 2)); ?></td>
          <td><?php echo htmlspecialchars($row['hire_date']); ?></td>
          <td><?php echo htmlspecialchars($row['department_name']); ?></td>
        </tr>
        <?php endwhile; ?>
      <?php else: ?>
        <tr><td colspan="6">No employees found.</td></tr>
      <?php endif; ?>
    </table>

    <div class="demo-actions">
      <a class="demo-link" href="index.php">Back Home</a>
      <a class="demo-link" href="employee_demo.php">Add Another Employee</a>
    </div>
  </div>
</div>
</body>
</html>
<?php $conn->close(); ?>
