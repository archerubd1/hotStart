<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Astraal | Interactive Learning</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:"Segoe UI", Arial, sans-serif;
}

body{
background:linear-gradient(135deg,#eef2ff,#f4f7fb);
display:flex;
justify-content:center;
padding:40px;
}

/* Main Container */

.container{
background:white;
padding:30px;
border-radius:14px;
box-shadow:0 10px 30px rgba(0,0,0,0.12);
max-width:1100px;
width:100%;
}

/* Header */

.header{
text-align:center;
margin-bottom:20px;
}

.header i{
font-size:32px;
color:#4CAF50;
margin-bottom:10px;
}

.header h2{
color:#333;
margin-bottom:5px;
}

.subtitle{
color:#666;
font-size:14px;
}

/* Progress */

.progress-container{
margin:20px 0;
}

.progress-text{
font-size:13px;
color:#777;
margin-bottom:6px;
}

.progress{
height:6px;
background:#eee;
border-radius:10px;
overflow:hidden;
}

.progress-bar{
height:100%;
width:66%;
background:#4CAF50;
}

/* Activity Box */

.activity-box{
margin-top:20px;
border:1px solid #eee;
border-radius:12px;
overflow:hidden;
box-shadow:0 4px 10px rgba(0,0,0,0.05);
}

/* Button */

button{
margin-top:25px;
width:100%;
padding:14px;
border:none;
background:#4CAF50;
color:white;
border-radius:8px;
font-size:16px;
font-weight:600;
cursor:pointer;
transition:0.2s;
}

button:hover{
background:#43a047;
transform:scale(1.02);
}

/* Footer */

.footer{
text-align:center;
font-size:12px;
color:#888;
margin-top:15px;
}

</style>
</head>

<body>

<div class="container">

<div class="header">

<i class="fa-solid fa-book-open"></i>

<h2>Interactive Learning Book</h2>

<p class="subtitle">
Explore the interactive content below to begin your learning experience
</p>

</div>

<div class="progress-container">
<div class="progress-text">Step 2 of 3 • Interactive Activity</div>

<div class="progress">
<div class="progress-bar"></div>
</div>

</div>

<form action="submit.php" method="post">

<div class="activity-box">

<iframe 
src="https://h5p.org/h5p/embed/439596"
width="100%" 
height="600"
frameborder="0"
allowfullscreen="allowfullscreen"
allow="geolocation *; microphone *; camera *; midi *; encrypted-media *"
title="Interactive Book">
</iframe>

</div>

<script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js"></script>

<button type="submit">
<i class="fa-solid fa-arrow-right"></i> Continue to Next Step
</button>

</form>

<div class="footer">
Your activity helps Astraal understand how you approach learning.
</div>

</div>

</body>
</html>