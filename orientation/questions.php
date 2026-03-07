<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Learning Preferences Form</title>
<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
    body {
        background-color: #f4f7fb;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: Arial, sans-serif;
    }
    form {
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.1);
        max-width: 500px;
        width: 100%;
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }
    p.info-text {
        font-size: 14px;
        color: #777;
        margin-top: 15px;
    }
    button {
        margin-top: 20px;
    }
</style>
</head>
<body>

<form method="post" action="save_inputs.php">
    <h2><i class="fa-solid fa-graduation-cap"></i> Your Learning Preferences</h2>

    <!-- Comfort with online learning -->
    <div class="mb-3">
        <p><i class="fa-solid fa-laptop"></i> How comfortable do you feel with online learning platforms?</p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="comfort_level[]" value="very_comfortable" id="comfort1">
            <label class="form-check-label" for="comfort1">Very comfortable</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="comfort_level[]" value="somewhat_comfortable" id="comfort2">
            <label class="form-check-label" for="comfort2">Somewhat comfortable</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="comfort_level[]" value="not_very_comfortable" id="comfort3">
            <label class="form-check-label" for="comfort3">Not very comfortable yet</label>
        </div>
    </div>

    <!-- How would you like to begin -->
    <div class="mb-3">
        <p><i class="fa-solid fa-compass"></i> How would you like to begin?</p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="learning_preference[]" value="guided" id="begin1">
            <label class="form-check-label" for="begin1">With some gentle guidance</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="learning_preference[]" value="explore" id="begin2">
            <label class="form-check-label" for="begin2">By exploring freely</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="learning_preference[]" value="just_looking" id="begin3">
            <label class="form-check-label" for="begin3">By just looking around for now</label>
        </div>
    </div>

    <!-- Clarity of learning goal -->
    <div class="mb-3">
        <p><i class="fa-solid fa-bullseye"></i> How clear is your learning goal?</p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="intent_clarity[]" value="very_clear" id="clarity1">
            <label class="form-check-label" for="clarity1">I’m very clear about it</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="intent_clarity[]" value="rough_idea" id="clarity2">
            <label class="form-check-label" for="clarity2">I have a rough idea</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="intent_clarity[]" value="figuring_out" id="clarity3">
            <label class="form-check-label" for="clarity3">I’m still figuring it out</label>
        </div>
    </div>

    <!-- Previous hands-on experience -->
    <div class="mb-3">
        <p><i class="fa-solid fa-hand-paper"></i> Do you have previous online learning platform hands-on experience?</p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="hands_on_experience[]" value="yes" id="hands1">
            <label class="form-check-label" for="hands1">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="hands_on_experience[]" value="no" id="hands2">
            <label class="form-check-label" for="hands2">No</label>
        </div>
    </div>

    <!-- New Question: Time spent online -->
    <div class="mb-3">
        <p><i class="fa-solid fa-clock"></i> How much time do you spend online?</p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="time_online[]" value="1-2" id="time1">
            <label class="form-check-label" for="time1">1-2hr/day</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="time_online[]" value="3-5" id="time2">
            <label class="form-check-label" for="time2">3-5hr/day</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="time_online[]" value="5-6" id="time3">
            <label class="form-check-label" for="time3">5-6hr/day</label>
        </div>
    </div>

    <p class="info-text"><i class="fa-solid fa-info-circle"></i> These answers are only used to suggest how you might want to start. They do not affect your access, progress, or evaluation.</p>

    <button type="submit" class="btn btn-success"><i class="fa-solid fa-arrow-right"></i> Show my starting suggestions</button>
</form>

<!-- Bootstrap 5 JS (optional, for interactive components) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>