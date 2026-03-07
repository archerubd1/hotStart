<?php
// dashboard.php

$host = "localhost";
$user = "root";
$password = "root";
$dbname = "coldstart";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$learner_id = 1;

$sql = "SELECT * FROM learning_preferences 
        WHERE learner_id=? 
        ORDER BY id DESC LIMIT 1";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i",$learner_id);
$stmt->execute();
$result = $stmt->get_result();

$data = array();

if($result->num_rows > 0){
    $data = $result->fetch_assoc();
}

$learning_intent = isset($data['learning_preference']) ? $data['learning_preference'] : "NOT SET";
$skill_gap = isset($data['hands_on_experience']) ? $data['hands_on_experience'] : "NOT SET";
$learning_direction = isset($data['intent_clarity']) ? $data['intent_clarity'] : "PENDING";

?>

<!DOCTYPE html>

<html>
<head>

<title>Astraal Dashboard</title>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<style>

body{
background:#f5f7fb;
font-family:Arial;
}

.card{
border-radius:10px;
box-shadow:0 4px 12px rgba(0,0,0,0.08);
}

.card-title{
font-weight:bold;
}

.status{
font-size:13px;
color:#777;
}

.section-title{
font-size:20px;
margin-bottom:20px;
font-weight:bold;
}

</style>

</head>

<body>

<div class="container mt-5">

<div class="section-title">
Learning Journey Orchestration
</div>

<div class="row g-4">

<div class="col-md-4">
<div class="card p-3">
<div class="card-title">Learning Intent</div>
<div class="status">Defined goal or motivation</div>
<br>
<span class="badge bg-secondary">
<?php echo $learning_intent; ?>
</span>
</div>
</div>

<div class="col-md-4">
<div class="card p-3">
<div class="card-title">Skill Gap</div>
<div class="status">Estimated competency gap</div>
<br>
<span class="badge bg-secondary">
<?php echo $skill_gap; ?>
</span>
</div>
</div>

<div class="col-md-4">
<div class="card p-3">
<div class="card-title">Learning Direction</div>
<div class="status">Declared pathway direction</div>
<br>
<span class="badge bg-warning text-dark">
<?php echo $learning_direction; ?>
</span>
</div>
</div>

<div class="col-md-4">
<div class="card p-3">
<div class="card-title">Milestones</div>
<div class="status">Learning checkpoints</div>
<br>
<span class="badge bg-dark">
LOCKED
</span>
</div>
</div>

<div class="col-md-4">
<div class="card p-3">
<div class="card-title">Guided Pathways</div>
<div class="status">Recommended structured learning</div>
<br>
<span class="badge bg-primary">
ADAPTIVE
</span>
</div>
</div>

<div class="col-md-4">
<div class="card p-3">
<div class="card-title">Learning Status</div>
<div class="status">Overall journey state</div>
<br>
<span class="badge bg-success">
TRACKING ON
</span>
</div>
</div>

</div>

<br><br>

<a href="orientation/welcome.php" class="btn btn-outline-secondary">
Redo Orientation
</a>

</div>

</body>
</html>
