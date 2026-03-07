<?php
include("../public_html/config/db.php");

$conn->query("
DELETE FROM orientation_inputs
WHERE created_on < NOW() - INTERVAL 30 DAY
");

$conn->query("
DELETE FROM orientation_suggestions
WHERE generated_on < NOW() - INTERVAL 30 DAY
");
?>
