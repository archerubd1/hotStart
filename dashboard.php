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

// Fetch latest learning preferences
$sql = "SELECT * FROM learning_preferences WHERE learner_id=? ORDER BY id DESC LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $learner_id);
$stmt->execute();
$result = $stmt->get_result();

$data = array();
if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
}

$learning_intent = isset($data['learning_preference']) ? $data['learning_preference'] : "NOT SET";
$skill_gap = isset($data['hands_on_experience']) ? $data['hands_on_experience'] : "NOT SET";
$learning_direction = isset($data['intent_clarity']) ? $data['intent_clarity'] : "PENDING";

// Default radar values
$programming = 40;
$problem_solving = 50;
$projects = 30;
$communication = 55;
$teamwork = 50;

// Adjust values based on learner responses
if ($learning_intent == "Career Growth") {
    $programming = 70;
    $problem_solving = 65;
}

if ($skill_gap == "Beginner") {
    $projects = 20;
} elseif ($skill_gap == "Intermediate") {
    $projects = 50;
} elseif ($skill_gap == "Advanced") {
    $projects = 70;
}

if ($learning_direction == "Clear") {
    $problem_solving += 10;
    $communication += 5;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Astraal Dashboard</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css"/>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            background: linear-gradient(135deg, #eef2ff, #f8fafc);
            font-family: 'Segoe UI';
        }
        .navbar {
            background: #4f46e5;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 22px;
        }
        .header-box {
            background: white;
            border-radius: 14px;
            padding: 25px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
        }
        .dashboard-card {
            border-radius: 14px;
            padding: 20px;
            background: white;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            transition: .3s;
        }
        .dashboard-card:hover {
            transform: translateY(-5px);
        }
        .card-icon {
            font-size: 32px;
            color: #4f46e5;
            margin-bottom: 10px;
        }
        .badge {
            padding: 8px 14px;
            border-radius: 20px;
        }
        .section-title {
            font-size: 22px;
            font-weight: bold;
            margin-top: 40px;
            margin-bottom: 20px;
        }
        .timeline {
            list-style: none;
            padding: 0;
        }
        .timeline li {
            display: flex;
            margin-bottom: 20px;
        }
        .timeline-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 15px;
        }
        .timeline-content {
            background: white;
            padding: 12px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            width: 100%;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-dark">
    <div class="container">
        <a class="navbar-brand">
            <i class="fa-solid fa-star"></i> Astraal
        </a>
        <span class="text-white">
            <i class="fa-solid fa-user"></i> Learner
        </span>
    </div>
</nav>

<div class="container mt-4">

    <div class="header-box" data-aos="fade-down">
        <h3><i class="fa-solid fa-compass"></i> Learning Journey Orchestration</h3>
        <p>Track your learning goals, skill progress, and personalized pathways.</p>
    </div>

    <div class="row g-4">

        <div class="col-md-4" data-aos="zoom-in">
            <div class="dashboard-card">
                <div class="card-icon"><i class="fa-solid fa-bullseye"></i></div>
                <h5>Learning Intent</h5>
                <p class="text-muted">Defined goal or motivation</p>
                <span class="badge bg-secondary"><?php echo $learning_intent; ?></span>
            </div>
        </div>

        <div class="col-md-4" data-aos="zoom-in">
            <div class="dashboard-card">
                <div class="card-icon"><i class="fa-solid fa-chart-line"></i></div>
                <h5>Skill Gap</h5>
                <p class="text-muted">Estimated competency gap</p>
                <span class="badge bg-secondary"><?php echo $skill_gap; ?></span>
            </div>
        </div>

        <div class="col-md-4" data-aos="zoom-in">
            <div class="dashboard-card">
                <div class="card-icon"><i class="fa-solid fa-route"></i></div>
                <h5>Learning Direction</h5>
                <p class="text-muted">Declared pathway direction</p>
                <span class="badge bg-warning text-dark"><?php echo $learning_direction; ?></span>
            </div>
        </div>

        <div class="col-md-4">
            <div class="dashboard-card">
                <h5>Milestones</h5>
                <p class="text-muted">Learning checkpoints</p>
                <span class="badge bg-dark">LOCKED</span>
            </div>
        </div>

        <div class="col-md-4">
            <div class="dashboard-card">
                <h5>Guided Pathways</h5>
                <p class="text-muted">Recommended structured learning</p>
                <span class="badge bg-primary">ADAPTIVE</span>
            </div>
        </div>

        <div class="col-md-4">
            <div class="dashboard-card">
                <h5>Learning Status</h5>
                <p class="text-muted">Overall journey state</p>
                <span class="badge bg-success">TRACKING ON</span>
            </div>
        </div>

    </div>

    <!-- Improved Milestones -->
    <div class="section-title">Learning Milestones</div>

    <ul class="timeline">
        <li>
            <span class="timeline-icon bg-success">
                <i class="fa fa-check"></i>
            </span>
            <div class="timeline-content">
                <b>Orientation Completed</b><br>
                You successfully completed the Astraal onboarding assessment.
                Your learning preferences, experience level, and goals were captured
                to personalize your learning journey.
            </div>
        </li>

        <li>
            <span class="timeline-icon bg-primary">
                <i class="fa fa-book"></i>
            </span>
            <div class="timeline-content">
                <b>Learning Path Selected</b><br>
                Based on your responses, Astraal suggested an adaptive learning path
                aligned with your interests and current skill level.
                You can follow guided pathways or explore skills independently.
            </div>
        </li>

        <li>
            <span class="timeline-icon bg-warning">
                <i class="fa fa-rocket"></i>
            </span>
            <div class="timeline-content">
                <b>First Skill Module</b><br>
                Your first recommended skill module is ready.
                Start building foundational knowledge and practical experience
                through interactive lessons and exercises.
            </div>
        </li>
    </ul>

    <!-- Skill Radar -->
    <div class="section-title">Skill Radar</div>
    <canvas id="skillChart"></canvas>

    <br>

    <!-- Redo Orientation -->
    <div class="mt-4 text-center">
        <div class="dashboard-card">
            <h5><i class="fa-solid fa-rotate"></i> Revisit Your Orientation</h5>
            <p class="text-muted">
                You can update your learning preferences anytime to get better recommendations.
            </p>
            <a href="orientation/welcome.php" class="btn btn-primary">Redo Orientation</a>
        </div>
    </div>

</div>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
AOS.init();

// Radar Chart
const ctx = document.getElementById('skillChart');
new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ['Programming', 'Problem Solving', 'Practical Projects', 'Communication', 'Collaboration'],
        datasets: [{
            label: 'Your Current Skill Profile',
            data: [
                <?php echo $programming; ?>,
                <?php echo $problem_solving; ?>,
                <?php echo $projects; ?>,
                <?php echo $communication; ?>,
                <?php echo $teamwork; ?>
            ],
            backgroundColor: 'rgba(79,70,229,0.2)',
            borderColor: '#4f46e5',
            borderWidth: 2,
            pointBackgroundColor: '#4f46e5'
        }]
    },
    options: {
        scales: {
            r: {
                beginAtZero: true,
                max: 100,
                ticks: {
                    stepSize: 20
                }
            }
        }
    }
});
</script>

</body>
</html>