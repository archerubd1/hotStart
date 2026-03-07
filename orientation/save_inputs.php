<?php
// save_inputs.php

// Show errors while debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// -----------------------------
// 1. Database Connection
// -----------------------------
$host = "localhost";
$user = "root";
$password = "root";
$dbname = "coldstart";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}


// -----------------------------
// 2. Ensure request is POST
// -----------------------------
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Invalid request method.");
}


// -----------------------------
// 3. Learner ID
// (later replace with session)
// -----------------------------
$learner_id = 1;


// -----------------------------
// 4. Read form values safely
// -----------------------------
$comfort_level = isset($_POST['comfort_level'])
    ? implode(",", (array)$_POST['comfort_level'])
    : NULL;

$learning_preference = isset($_POST['learning_preference'])
    ? implode(",", (array)$_POST['learning_preference'])
    : NULL;

$intent_clarity = isset($_POST['intent_clarity'])
    ? implode(",", (array)$_POST['intent_clarity'])
    : NULL;

$hands_on_experience = isset($_POST['hands_on_experience'])
    ? implode(",", (array)$_POST['hands_on_experience'])
    : NULL;

$time_online = isset($_POST['time_online'])
    ? implode(",", (array)$_POST['time_online'])
    : NULL;


// -----------------------------
// 5. Prepare SQL
// -----------------------------
$sql = "INSERT INTO learning_preferences
(learner_id, comfort_level, learning_preference, intent_clarity, hands_on_experience, time_online)
VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("SQL Prepare Failed: " . $conn->error);
}


// -----------------------------
// 6. Bind parameters
// -----------------------------
$stmt->bind_param(
    "isssss",
    $learner_id,
    $comfort_level,
    $learning_preference,
    $intent_clarity,
    $hands_on_experience,
    $time_online
);


// -----------------------------
// 7. Execute query
// -----------------------------
if ($stmt->execute()) {

    header("Location: complete.php");
    exit();

} else {

    echo "Insert Error: " . $stmt->error;

}


// -----------------------------
// 8. Close connection
// -----------------------------
$stmt->close();
$conn->close();

?>
