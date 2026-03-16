<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Astraal | Learning Preferences</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{
font-family:"Segoe UI",sans-serif;
background:linear-gradient(135deg,#6aa9ff,#8fd3f4);
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

.container-box{
background:white;
width:700px;
padding:40px;
border-radius:16px;
box-shadow:0 15px 40px rgba(0,0,0,0.2);
}

/* header */

.header{
text-align:center;
margin-bottom:30px;
}

.header i{
font-size:32px;
color:#4CAF50;
}

.header h2{
margin-top:10px;
}

/* progress */

.progress{
height:8px;
margin-bottom:30px;
}

.progress-bar{
transition:width .4s ease;
}

/* question step */

.step{
display:none;
animation:fade .4s ease;
}

.step.active{
display:block;
}

@keyframes fade{
from{opacity:0;transform:translateX(20px);}
to{opacity:1;transform:translateX(0);}
}

/* option cards */

.option-grid{
display:grid;
grid-template-columns:1fr 1fr;
gap:12px;
margin-top:15px;
}

.option-card{
border:2px solid #eee;
border-radius:10px;
padding:15px;
cursor:pointer;
transition:0.25s;
background:#fafafa;
}

.option-card:hover{
transform:translateY(-3px);
box-shadow:0 6px 14px rgba(0,0,0,0.1);
}

.option-card.selected{
border-color:#4CAF50;
background:#eafaf1;
}

.option-card input{
display:none;
}

/* buttons */

.btn-next{
margin-top:25px;
width:100%;
padding:12px;
font-weight:600;
}

</style>

</head>

<body>

<div class="container-box">

<div class="header">
<i class="fa-solid fa-graduation-cap"></i>
<h2>Your Learning Preferences</h2>
</div>

<div class="progress">
<div id="progressBar" class="progress-bar bg-success" style="width:20%"></div>
</div>

<form method="post" action="save_inputs.php">

<!-- STEP 1 -->

<div class="step active">

<h5><i class="fa-solid fa-laptop"></i> How comfortable are you with online learning?</h5>

<div class="option-grid">

<label class="option-card">
<input type="radio" name="comfort_level" value="very_comfortable">
Very comfortable
</label>

<label class="option-card">
<input type="radio" name="comfort_level" value="somewhat_comfortable">
Somewhat comfortable
</label>

<label class="option-card">
<input type="radio" name="comfort_level" value="not_very_comfortable">
Not very comfortable
</label>

</div>

<button type="button" class="btn btn-success btn-next" onclick="nextStep()">Next</button>

</div>


<!-- STEP 2 -->

<div class="step">

<h5><i class="fa-solid fa-compass"></i> How would you like to begin?</h5>

<div class="option-grid">

<label class="option-card">
<input type="radio" name="learning_preference" value="guided">
Guided learning
</label>

<label class="option-card">
<input type="radio" name="learning_preference" value="explore">
Explore freely
</label>

<label class="option-card">
<input type="radio" name="learning_preference" value="just_looking">
Just looking
</label>

</div>

<button type="button" class="btn btn-success btn-next" onclick="nextStep()">Next</button>

</div>


<!-- STEP 3 -->

<div class="step">

<h5><i class="fa-solid fa-bullseye"></i> How clear is your learning goal?</h5>

<div class="option-grid">

<label class="option-card">
<input type="radio" name="intent_clarity" value="very_clear">
Very clear
</label>

<label class="option-card">
<input type="radio" name="intent_clarity" value="rough_idea">
Rough idea
</label>

<label class="option-card">
<input type="radio" name="intent_clarity" value="figuring_out">
Still figuring out
</label>

</div>

<button type="button" class="btn btn-success btn-next" onclick="nextStep()">Next</button>

</div>


<!-- STEP 4 -->

<div class="step">

<h5><i class="fa-solid fa-hand-paper"></i> Previous online learning experience?</h5>

<div class="option-grid">

<label class="option-card">
<input type="radio" name="hands_on_experience" value="yes">
Yes
</label>

<label class="option-card">
<input type="radio" name="hands_on_experience" value="no">
No
</label>

</div>

<button type="button" class="btn btn-success btn-next" onclick="nextStep()">Next</button>

</div>


<!-- STEP 5 -->

<div class="step">

<h5><i class="fa-solid fa-clock"></i> Time spent online daily?</h5>

<div class="option-grid">

<label class="option-card">
<input type="radio" name="time_online" value="1-2">
1–2 hrs
</label>

<label class="option-card">
<input type="radio" name="time_online" value="3-5">
3–5 hrs
</label>

<label class="option-card">
<input type="radio" name="time_online" value="5-6">
5–6 hrs
</label>

</div>

<button type="submit" class="btn btn-success btn-next">
Show My Suggestions
</button>

</div>

</form>

</div>

<script>

let currentStep=0;
const steps=document.querySelectorAll(".step");
const progress=document.getElementById("progressBar");

function nextStep(){

steps[currentStep].classList.remove("active");

currentStep++;

steps[currentStep].classList.add("active");

let percent=((currentStep+1)/steps.length)*100;

progress.style.width=percent+"%";

}

/* card selection */

document.querySelectorAll(".option-card").forEach(card=>{
card.addEventListener("click",()=>{

let name=card.querySelector("input").name;

document.querySelectorAll(`input[name="${name}"]`).forEach(el=>{
el.parentElement.classList.remove("selected");
});

card.classList.add("selected");
card.querySelector("input").checked=true;

});
});

</script>

</body>
</html>