<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to Astraal</title>
<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f7fb;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }
    .container {
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.1);
        max-width: 500px;
        width: 100%;
        text-align: center;
    }
    h1 {
        color: #333;
        margin-bottom: 15px;
    }
    p {
        color: #555;
        font-size: 16px;
        line-height: 1.5;
    }
    .info-box {
        background: #f5f5f5;
        padding: 15px;
        border-radius: 8px;
        margin: 20px 0;
        text-align: left;
        font-size: 14px;
        color: #555;
    }
    .info-box i {
        margin-right: 8px;
        color: #888;
    }
    button {
        width: 100%;
        padding: 12px;
        margin: 10px 0;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.3s;
    }
    .btn-primary {
        background-color: #4CAF50;
        color: #fff;
    }
    .btn-primary:hover {
        background-color: #45a049;
    }
    .btn-secondary {
        background-color: #ccc;
        color: #333;
    }
    .btn-secondary:hover {
        background-color: #bbb;
    }
</style>
</head>
<body>

<div class="container">
    <h1><i class="fa-solid fa-rocket"></i> Welcome to Astraal</h1>

    <p>
        Everyone starts differently.<br>
        Before you begin, we’d like to understand how you want to start — not to judge, track, or lock anything in.
    </p>

    <div class="info-box">
        <p><i class="fa-solid fa-lock"></i> Nothing here is permanent.</p>
        <p><i class="fa-solid fa-compass"></i> Nothing will be decided for you.</p>
        <p><i class="fa-solid fa-hand-paper"></i> You can skip this or change your mind anytime.</p>
    </div>

    <!-- Form with submission -->
    <form method="post" action="questions.php">
        <button type="submit" class="btn-primary"><i class="fa-solid fa-arrow-right"></i> Show me my starting options</button>
    </form>

    <!-- Skip button -->
    <form method="get" action="../dashboard.php">
        <button type="submit" class="btn-secondary"><i class="fa-solid fa-forward"></i> Skip for now</button>
    </form>
</div>

</body>
</html>