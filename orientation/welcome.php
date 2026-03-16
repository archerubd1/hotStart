<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Astraal | Welcome</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:"Segoe UI",Arial,sans-serif;
}

body{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:linear-gradient(135deg,#eef2ff,#f6f9ff,#e6fff4);
}

.wrapper{
display:flex;
max-width:950px;
width:100%;
background:white;
border-radius:16px;
overflow:hidden;
box-shadow:0 15px 40px rgba(0,0,0,0.15);
}

/* LEFT SIDE */

.left{
flex:1;
background:linear-gradient(135deg,#4CAF50,#66bb6a);
color:white;
padding:40px;
display:flex;
flex-direction:column;
justify-content:center;
}

.logo{
font-size:24px;
font-weight:bold;
margin-bottom:25px;
}

.logo i{
margin-right:8px;
}

.illustration{
font-size:70px;
margin-bottom:20px;
opacity:0.9;
}

.left h2{
font-size:26px;
margin-bottom:15px;
}

.left p{
line-height:1.6;
font-size:15px;
opacity:0.9;
}

/* RIGHT SIDE */

.right{
flex:1.2;
padding:40px;
}

.header{
text-align:center;
margin-bottom:20px;
}

.header h1{
font-size:26px;
color:#333;
}

.subtitle{
color:#666;
font-size:14px;
margin-top:5px;
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
width:33%;
background:#4CAF50;
}

/* Info */

.info-box{
background:#f7f9fc;
padding:16px;
border-radius:10px;
margin:20px 0;
}

.info-box p{
font-size:14px;
margin:6px 0;
color:#555;
}

.info-box i{
color:#4CAF50;
margin-right:6px;
}

/* Features */

.features{
margin:20px 0;
}

.feature{
display:flex;
align-items:center;
margin-bottom:10px;
font-size:14px;
color:#444;
}

.feature i{
color:#4CAF50;
margin-right:8px;
}

/* Buttons */

button{
width:100%;
padding:13px;
border:none;
border-radius:8px;
font-size:15px;
font-weight:600;
cursor:pointer;
margin-top:10px;
transition:0.2s;
}

.btn-primary{
background:#4CAF50;
color:white;
}

.btn-primary:hover{
background:#43a047;
transform:scale(1.02);
}

.btn-secondary{
background:#e5e5e5;
}

.btn-secondary:hover{
background:#d6d6d6;
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

<div class="wrapper">

<!-- LEFT PANEL -->

<div class="left">

<div class="logo">
<i class="fa-solid fa-star"></i> Astraal
</div>

<div class="illustration">
<i class="fa-solid fa-rocket"></i>
</div>

<h2>Your learning journey begins here</h2>

<p>
Astraal helps you explore learning paths designed around your interests and pace. 
Before we begin, let us understand how you would like to start.
</p>

</div>

<!-- RIGHT PANEL -->

<div class="right">

<div class="header">
<h1>Welcome to Astraal</h1>
<p class="subtitle">Let's personalize your starting experience</p>
</div>

<div class="progress-container">
<div class="progress-text">Step 1 of 3 • Orientation</div>
<div class="progress">
<div class="progress-bar"></div>
</div>
</div>

<div class="info-box">
<p><i class="fa-solid fa-lock"></i> Your answers remain private.</p>
<p><i class="fa-solid fa-compass"></i> Nothing will be decided automatically.</p>
<p><i class="fa-solid fa-hand-paper"></i> You can skip anytime.</p>
</div>

<div class="features">

<div class="feature">
<i class="fa-solid fa-circle-check"></i>
Answer a few quick orientation questions
</div>

<div class="feature">
<i class="fa-solid fa-circle-check"></i>
Try a short interactive activity
</div>

<div class="feature">
<i class="fa-solid fa-circle-check"></i>
Receive personalized learning suggestions
</div>

</div>

<form method="get" action="activity.php">
<button class="btn-primary">
<i class="fa-solid fa-arrow-right"></i> Show my starting options
</button>
</form>

<form method="get" action="../dashboard.php">
<button class="btn-secondary">
<i class="fa-solid fa-forward"></i> Skip for now
</button>
</form>

<div class="footer">
You are always in control of your learning experience.
</div>

</div>

</div>

</body>
</html>