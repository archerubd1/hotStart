<?php
// save_inputs.php

// 1. Connect to MySQL
$host = "localhost";
$user = "root";  // your DB username
$password = "";  // your DB password
$dbname = "your_database_name"; // replace with your DB name

$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Get form data
$learner_id = 1; // Replace with session ID if logged in

$comfort_level = isset($_POST['comfort_level']) ? implode(",", $_POST['comfort_level']) : null;
$learning_preference = isset($_POST['learning_preference']) ? implode(",", $_POST['learning_preference']) : null;
$intent_clarity = isset($_POST['intent_clarity']) ? implode(",", $_POST['intent_clarity']) : null;
$hands_on_experience = isset($_POST['hands_on_experience']) ? implode(",", $_POST['hands_on_experience']) : null;
$time_online = isset($_POST['time_online']) ? implode(",", $_POST['time_online']) : null;

// 3. Prepare and execute SQL
$sql = "INSERT INTO learning_preferences 
        (learner_id, comfort_level, learning_preference, intent_clarity, hands_on_experience, time_online) 
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "isssss", 
    $learner_id, 
    $comfort_level, 
    $learning_preference, 
    $intent_clarity, 
    $hands_on_experience, 
    $time_online
);

if ($stmt->execute()) {
    echo "Preferences saved successfully!";
    // Redirect to dashboard or next page
    // header("Location: dashboard.php");
    // exit;
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>