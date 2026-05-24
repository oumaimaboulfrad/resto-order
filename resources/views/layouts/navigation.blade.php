<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>لوحة التحكم</title>

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">

<style>

/* RESET */
*{margin:0;padding:0;box-sizing:border-box;}

body{
font-family:'Cairo',sans-serif;
background:#fffaf7;
overflow-x:hidden;
}

/* 🌸 BACKGROUND */
body::before{
content:"";
position:fixed;
width:100%;
height:100%;
background:linear-gradient(270deg,#ffe0f0,#fff1c9,#ffe9f7,#fff7df);
background-size:600% 600%;
animation:bgMove 15s ease infinite;
z-index:-1;
opacity:0.6;
}

@keyframes bgMove{
0%{background-position:0% 50%;}
50%{background-position:100% 50%;}
100%{background-position:0% 50%;}
}

/* 🌺 FLOWERS */
.flower{
position:fixed;
font-size:28px;
opacity:0.3;
animation:float 8s infinite;
}

.flower:nth-child(1){left:10%;top:20%;}
.flower:nth-child(2){left:80%;top:30%;}
.flower:nth-child(3){left:50%;top:70%;}

@keyframes float{
0%{transform:translateY(0);}
50%{transform:translateY(-25px);}
100%{transform:translateY(0);}
}

/* 🌟 NAVBAR */
nav{
display:flex;
justify-content:space-between;
align-items:center;
padding:18px 40px;
background:rgba(255,255,255,0.85);
backdrop-filter:blur(10px);
box-shadow:0 4px 20px rgba(0,0,0,0.08);
border-bottom:2px solid gold;
position:sticky;
top:0;
z-index:999;
}

.logo{
font-size:30px;
font-weight:bold;
background:linear-gradient(90deg,#d4af37,#ff69b4,#ffb347);
-webkit-background-clip:text;
-webkit-text-fill-color:transparent;
}

/* HERO */
.hero{
text-align:center;
padding:70px 20px;
}

.hero h1{
font-size:60px;
background:linear-gradient(90deg,#ff69b4,#d4af37,#ff8fab);
-webkit-background-clip:text;
-webkit-text-fill-color:transparent;
animation:textMove 6s infinite linear;
}

@keyframes textMove{
0%{background-position:0%;}
100%{background-position:300%;}
}

.hero p{
font-size:20px;
color:#666;
}

/* STATS */
.stats{
display:flex;
justify-content:center;
flex-wrap:wrap;
gap:20px;
padding:30px;
}

.card{
width:220px;
padding:25px;
border-radius:25px;
background:white;
box-shadow:0 8px 20px rgba(0,0,0,0.08);
text-align:center;
transition:0.3s;
}

.card:hover{
transform:translateY(-10px) scale(1.05);
}

.card h2{
font-size:40px;
color:#ff69b4;
}

/* TABLE */
table{
width:90%;
margin:auto;
background:white;
border-radius:20px;
overflow:hidden;
box-shadow:0 8px 20px rgba(0,0,0,0.08);
}

th{
background:linear-gradient(45deg,#ff69b4,#d4af37);
color:white;
padding:15px;
}

td{
padding:15px;
text-align:center;
}

/* STATUS */
.status{
padding:8px 15px;
border-radius:20px;
color:white;
font-weight:bold;
display:inline-block;
animation:pulse 2s infinite;
}

@keyframes pulse{
0%{transform:scale(1);}
50%{transform:scale(1.08);}
100%{transform:scale(1);}
}

.preparing{background:#ff9800;}
.paid{background:#2196f3;}
.delivered{background:#4caf50;}

/* BUTTON */
.btn{
padding:8px 14px;
border:none;
border-radius:20px;
cursor:pointer;
background:linear-gradient(45deg,#ff69b4,#d4af37);
color:white;
font-weight:bold;
transition:0.3s;
}

.btn:hover{
transform:scale(1.1);
}

/* QUOTE */
.quote{
margin:60px auto;
max-width:800px;
padding:30px;
background:rgba(255,255,255,0.85);
border-radius:25px;
text-align:center;
box-shadow:0 8px 20px rgba(0,0,0,0.08);
}

footer{
margin-top:40px;
padding:20px;
text-align:center;
color:white;
background:linear-gradient(90deg,#ff69b4,#d4af37,#ff8fab);
}

</style>
</head>

<body>

<!-- 🌺 FLOWERS -->
<div class="flower">🌸</div>
<div class="flower">🌹</div>
<div class="flower">🌷</div>

<!-- 🌟 NAVBAR -->
<nav>
<div class="logo">لوحة التحكم 👑</div>
</nav>

<!-- 💖 HERO -->
<section class="hero">
<h1>لوحة تحكم مطعم فاخر 🍽️</h1>
<p>كل شيء هنا يتحرك ويتفاعل 💖✨</p>
</section>

<!-- 📊 STATS -->
<section class="stats">

<div class="card"><h2>120</h2><p>الطلبات</p></div>
<div class="card"><h2>85</h2><p>الزبائن</p></div>
<div class="card"><h2>40</h2><p>الأطباق</p></div>
<div class="card"><h2>15K</h2><p>الأرباح</p></div>

</section>

<!-- 🧾 ORDERS -->
<h2 style="text-align:center;margin:30px;">آخر الطلبات ✨</h2>

<table>

<tr>
<th>الزبون</th>
<th>الطبق</th>
<th>السعر</th>
<th>الحالة</th>
<th>تغيير</th>
</tr>

<tr>
<td>شيماء</td>
<td>بيتزا 🍕</td>
<td>1200 DA</td>
<td><span id="s1" class="status preparing">قيد التحضير</span></td>
<td><button class="btn" onclick="next('s1')">تغيير</button></td>
</tr>

<tr>
<td>هبة</td>
<td>برغر 🍔</td>
<td>900 DA</td>
<td><span id="s2" class="status paid">تم الدفع</span></td>
<td><button class="btn" onclick="next('s2')">تغيير</button></td>
</tr>

<tr>
<td>فاطمة</td>
<td>شاورما 🌯</td>
<td>700 DA</td>
<td><span id="s3" class="status delivered">تم التوصيل</span></td>
<td><button class="btn" onclick="next('s3')">تغيير</button></td>
</tr>

</table>

<!-- 💌 QUOTE -->
<div class="quote">

<h2>✨ إبداع أميمة & أسماء 💖</h2>
<p>
هذا مشروع مطعم فاخر مليء بالأنوثة، الجمال، والحركة 🌸✨
</p>

</div>

<footer>
RestoOrder © 2026 💖
</footer>

<script>
function next(id){
let el=document.getElementById(id);

if(el.classList.contains('preparing')){
el.classList.remove('preparing');
el.classList.add('paid');
el.innerText="تم الدفع 💳";
}
else if(el.classList.contains('paid')){
el.classList.remove('paid');
el.classList.add('delivered');
el.innerText="تم التوصيل ✅";
}
else{
el.classList.remove('delivered');
el.classList.add('preparing');
el.innerText="قيد التحضير 🔥";
}
}
</script>

</body>
</html>
