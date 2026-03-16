<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Astraal | You're All Set</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{
font-family:"Segoe UI",sans-serif;
background:linear-gradient(135deg,#6aa9ff,#8fd3f4);
height:100vh;
display:flex;
align-items:center;
justify-content:center;
}

.success-card{
background:white;
padding:50px;
border-radius:18px;
width:520px;
text-align:center;
box-shadow:0 18px 45px rgba(0,0,0,0.18);
animation:fadeIn .7s ease;
}

/* Icon */

.success-icon{
font-size:60px;
color:#4CAF50;
margin-bottom:20px;
animation:pop .6s ease;
}

/* Heading */

h2{
font-weight:600;
margin-bottom:15px;
}

/* Text */

p{
color:#666;
font-size:15px;
margin-bottom:30px;
line-height:1.6;
}

/* Button */

.enter-btn{
background:#4CAF50;
border:none;
padding:14px 28px;
font-size:16px;
font-weight:600;
border-radius:8px;
color:white;
transition:.25s;
}

.enter-btn:hover{
background:#43a047;
transform:translateY(-2px);
}

/* Animations */

@keyframes fadeIn{
from{opacity:0; transform:translateY(20px);}
to{opacity:1; transform:translateY(0);}
}

@keyframes pop{
0%{transform:scale(0.5);}
100%{transform:scale(1);}
}

</style>

</head>

<body>

<div class="success-card">

<div class="success-icon">
<i class="fa-solid fa-circle-check"></i>
</div>

<h2>You’re All Set!</h2>

<p>
There’s no right or wrong way to begin your journey.  
You can follow one of the suggested learning paths, explore topics freely, or come back to these options anytime.
</p>

<a href="../dashboard.php">
<button class="enter-btn">
<i class="fa-solid fa-arrow-right"></i> Enter Astraal
</button>
</a>

</div>

</body>
</html>
