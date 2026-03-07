<?php
include("../config/db.php");
session_start();

$learner_id = isset($_SESSION['learner_id']) ? $_SESSION['learner_id'] : 1;

$stmt = $conn->prepare("
INSERT INTO orientation_inputs
VALUES (?, ?, ?, ?, NOW())
");

$stmt->bind_param(
    "isss",
    $learner_id,
    $_POST['comfort_level'],
    $_POST['learning_preference'],
    $_POST['intent_clarity']
);

$stmt->execute();

exec("python3 /home/username/python/orientation_engine.py $learner_id");

header("Location: generating.php");
?>
