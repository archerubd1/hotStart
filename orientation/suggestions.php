<?php
include("../config/db.php");
$learner_id = 1;

$result = $conn->query("
SELECT * FROM orientation_suggestions
WHERE learner_id=$learner_id
");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your Starting Suggestions</title>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f7fb;
        padding: 20px;
    }
    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 25px;
    }
    .suggestion-card {
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }
    .suggestion-card b {
        font-size: 18px;
        color: #2c3e50;
        display: block;
        margin-bottom: 8px;
    }
    .suggestion-card p {
        color: #555;
        font-size: 15px;
        margin-bottom: 15px;
    }
    .buttons {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }
    .buttons button {
        flex: 1;
        padding: 12px;
        font-size: 16px;
        font-weight: bold;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }
    .btn-try {
        background-color: #4CAF50;
        color: #fff;
    }
    .btn-try:hover {
        background-color: #45a049;
    }
    .btn-ignore {
        background-color: #ccc;
        color: #333;
    }
    .btn-ignore:hover {
        background-color: #bbb;
    }
    hr {
        margin: 30px 0;
        border: 0;
        border-top: 1px solid #ddd;
    }
    .note {
        text-align: center;
        color: #777;
        font-size: 14px;
    }
</style>
</head>
<body>

<h2><i class="fa-solid fa-lightbulb"></i> Your Starting Suggestions</h2>

<?php while($row=$result->fetch_assoc()): ?>
<div class="suggestion-card">
    <b><i class="fa-solid fa-star"></i> <?php echo htmlspecialchars($row['suggestion_text']); ?></b>
    <p><i class="fa-solid fa-info-circle"></i> <?php echo htmlspecialchars($row['rationale']); ?></p>

    <div class="buttons">
        <form method="post" action="complete.php">
            <input type="hidden" name="action" value="accept">
            <input type="hidden" name="suggestion_id" value="<?php echo $row['id']; ?>">
            <button type="submit" class="btn-try"><i class="fa-solid fa-check"></i> Try this</button>
        </form>

        <form method="post" action="complete.php">
            <input type="hidden" name="action" value="ignore">
            <input type="hidden" name="suggestion_id" value="<?php echo $row['id']; ?>">
            <button type="submit" class="btn-ignore"><i class="fa-solid fa-times"></i> Ignore for now</button>
        </form>
    </div>
</div>
<?php endwhile; ?>

<hr>

<p class="note">
    <i class="fa-solid fa-info-circle"></i> These are only starting suggestions. You are always free to explore, skip, or change direction.
</p>

</body>
</html>