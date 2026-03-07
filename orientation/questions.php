<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Learning Preferences Form</title>
<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f7fb;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    form {
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.1);
        max-width: 450px;
        width: 100%;
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }
    label {
        display: block;
        margin-top: 15px;
        font-weight: bold;
        color: #555;
    }
    select {
        width: 100%;
        padding: 10px 12px;
        margin-top: 5px;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 16px;
        appearance: none;
        background: url('data:image/svg+xml;utf8,<svg fill="%23777" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>') no-repeat right 12px center;
        background-color: #fff;
        background-size: 16px;
    }
    p {
        font-size: 14px;
        color: #777;
        margin-top: 15px;
    }
    button {
        margin-top: 20px;
        width: 100%;
        padding: 12px;
        background-color: #4CAF50;
        color: #fff;
        font-size: 18px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-weight: bold;
        transition: background 0.3s;
    }
    button:hover {
        background-color: #45a049;
    }
    .icon-label {
        display: flex;
        align-items: center;
        gap: 8px;
    }
</style>
</head>
<body>

<form method="post" action="save_inputs.php">
    <h2><i class="fa-solid fa-graduation-cap"></i> Your Learning Preferences</h2>

    <label class="icon-label"><i class="fa-solid fa-laptop"></i> How comfortable do you feel with online learning platforms?</label>
    <select name="comfort_level" required>
        <option value="">Select an option</option>
        <option value="very_comfortable">Very comfortable</option>
        <option value="somewhat_comfortable">Somewhat comfortable</option>
        <option value="not_very_comfortable">Not very comfortable yet</option>
    </select>

    <label class="icon-label"><i class="fa-solid fa-compass"></i> How would you like to begin?</label>
    <select name="learning_preference" required>
        <option value="">Select an option</option>
        <option value="guided">With some gentle guidance</option>
        <option value="explore">By exploring freely</option>
        <option value="just_looking">By just looking around for now</option>
    </select>

    <label class="icon-label"><i class="fa-solid fa-bullseye"></i> How clear is your learning goal?</label>
    <select name="intent_clarity" required>
        <option value="">Select an option</option>
        <option value="very_clear">I’m very clear about it</option>
        <option value="rough_idea">I have a rough idea</option>
        <option value="figuring_out">I’m still figuring it out</option>
    </select>

    <p><i class="fa-solid fa-info-circle"></i> These answers are only used to suggest how you might want to start. They do not affect your access, progress, or evaluation.</p>

    <button type="submit"><i class="fa-solid fa-arrow-right"></i> Show my starting suggestions</button>
</form>

</body>
</html>