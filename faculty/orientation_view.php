<?php
include("../config/db.php");

$learner_id = isset($_GET['learner_id']) ? $_GET['learner_id'] : 1;

$data = $conn->query("
SELECT * FROM orientation_inputs WHERE learner_id=$learner_id
")->fetch_assoc();

$suggestions = $conn->query("
SELECT * FROM orientation_suggestions WHERE learner_id=$learner_id
");
?>

<h2>Learner Orientation Snapshot</h2>

<p>
This information is shared voluntarily by the learner.
It is not an assessment.
</p>

<ul>
<li>Comfort: <?php echo $data['comfort_level']; ?></li>
<li>Preference: <?php echo $data['learning_preference']; ?></li>
<li>Goal clarity: <?php echo $data['intent_clarity']; ?></li>
</ul>

<h3>Suggestions Shown</h3>

<?php while($s=$suggestions->fetch_assoc()): ?>
<p><b><?php echo $s['suggestion_text']; ?></b></p>
<?php endwhile; ?>
