<?php
require 'db_config.php';
echo "<h2>Database Connectivity Test</h2>";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    echo "<p style='color:red;'>❌ Connection failed: " . $conn->connect_error . "</p>";
} else {
    echo "<p style='color:green;'>✅ Successfully connected to MySQL database '<b>" . $db_name . "</b>' on host '<b>" . $db_host . "</b>'</p>";
}

$conn->close();
?>
