<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Astraal | Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{
background:#f4f7fb;
font-family:Arial;
}

.navbar{
background:#1e293b;
}

.navbar-brand{
color:#fff;
font-weight:600;
}

.card{
border:none;
border-radius:12px;
box-shadow:0 4px 14px rgba(0,0,0,0.08);
}

.section-title{
font-size:18px;
font-weight:600;
margin-bottom:15px;
}

.action-card{
text-align:center;
padding:25px;
transition:0.3s;
}

.action-card:hover{
transform:translateY(-5px);
}

.icon{
font-size:28px;
margin-bottom:10px;
color:#198754;
}

</style>
</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-dark">
<div class="container-fluid">
<span class="navbar-brand">
<i class="fa-solid fa-brain"></i> Astraal Learning Experience
</span>
</div>
</nav>


<div class="container mt-4">

<!-- WELCOME -->

<div class="card p-4 mb-4">

<h4>Welcome to Astraal</h4>

<p class="text-muted">
You have completed your orientation.  
Based on your responses we will guide you to a comfortable starting point.
</p>

</div>


<!-- STARTING SUGGESTIONS -->

<div class="row mb-4">

<div class="col-md-4">
<div class="card action-card">
<div class="icon">
<i class="fa-solid fa-compass"></i>
</div>

<h5>Guided Path</h5>

<p class="text-muted">
Start with a recommended structured learning journey.
</p>

<button class="btn btn-success">
Start Guided Journey
</button>

</div>
</div>


<div class="col-md-4">
<div class="card action-card">

<div class="icon">
<i class="fa-solid fa-magnifying-glass"></i>
</div>

<h5>Explore Topics</h5>

<p class="text-muted">
Browse courses and explore areas of interest.
</p>

<button class="btn btn-outline-success">
Explore Learning
</button>

</div>
</div>


<div class="col-md-4">
<div class="card action-card">

<div class="icon">
<i class="fa-solid fa-lightbulb"></i>
</div>

<h5>Discover Skills</h5>

<p class="text-muted">
Find out what skills you can build next.
</p>

<button class="btn btn-outline-success">
View Skill Map
</button>

</div>
</div>

</div>


<!-- LEARNING AREAS -->

<div class="card p-4 mb-4">

<div class="section-title">
Popular Learning Areas
</div>

<div class="row">

<div class="col-md-3">
<button class="btn btn-light w-100 mb-2">
AI & Machine Learning
</button>
</div>

<div class="col-md-3">
<button class="btn btn-light w-100 mb-2">
Cybersecurity
</button>
</div>

<div class="col-md-3">
<button class="btn btn-light w-100 mb-2">
Blockchain
</button>
</div>

<div class="col-md-3">
<button class="btn btn-light w-100 mb-2">
Data Science
</button>
</div>

</div>

</div>


<!-- PROGRESS -->

<div class="card p-4">

<div class="section-title">
Your Learning Journey
</div>

<div class="progress mb-2">
<div class="progress-bar bg-success" style="width:0%">
0%
</div>
</div>

<p class="text-muted">
Your learning journey will begin once you start your first module.
</p>

</div>


</div>

</body>
</html>