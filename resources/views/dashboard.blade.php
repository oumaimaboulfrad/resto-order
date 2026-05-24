<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>RestoOrder Luxury</title>

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
font-family:'Cairo',sans-serif;
overflow-x:hidden;
background:linear-gradient(135deg,#fff0f7,#fff8e7,#ffe0f5);
min-height:100vh;
position:relative;
}

/* 🌸 خلفية */
body::before{
content:"";
position:fixed;
width:100%;
height:100%;
background:
radial-gradient(circle,#ff69b433 2px,transparent 2px);
background-size:40px 40px;
animation:bgMove 15s linear infinite;
z-index:-2;
}

@keyframes bgMove{
0%{
transform:translateY(0);
}
100%{
transform:translateY(-300px);
}
}

/* ⭐ نجوم */
.star{
position:fixed;
font-size:25px;
color:#ffd700;
animation:twinkle 3s infinite;
opacity:0.8;
}

@keyframes twinkle{
0%{
transform:scale(1);
opacity:0.5;
}
50%{
transform:scale(1.5);
opacity:1;
}
100%{
transform:scale(1);
opacity:0.5;
}
}

/* 💖 قلوب */
.heart{
position:fixed;
font-size:24px;
animation:float 6s infinite ease-in-out;
opacity:0.5;
}

@keyframes float{
0%{
transform:translateY(0);
}
50%{
transform:translateY(-20px);
}
100%{
transform:translateY(0);
}
}

/* 🌸 ورود */
.flower{
position:fixed;
font-size:28px;
animation:flowerMove 8s infinite ease-in-out;
opacity:0.5;
}

@keyframes flowerMove{
0%{
transform:rotate(0deg);
}
50%{
transform:rotate(20deg);
}
100%{
transform:rotate(0deg);
}
}

/* ✨ NAVBAR */
.navbar{
display:flex;
justify-content:space-between;
align-items:center;
padding:20px 45px;
background:rgba(255,255,255,0.82);
backdrop-filter:blur(14px);
position:fixed;
top:0;
width:100%;
z-index:999;
border-bottom:3px solid #ffd700;
box-shadow:0 5px 20px rgba(0,0,0,0.08);
}

.logo{
font-size:34px;
font-weight:bold;
background:linear-gradient(90deg,#ff69b4,#ffd700,#ff8c00);
-webkit-background-clip:text;
-webkit-text-fill-color:transparent;
animation:logoGlow 5s infinite linear;
}

@keyframes logoGlow{
0%{
filter:hue-rotate(0deg);
}
100%{
filter:hue-rotate(360deg);
}
}

.nav-links{
display:flex;
align-items:center;
gap:15px;
}

.nav-links a{
text-decoration:none;
padding:12px 22px;
border-radius:35px;
font-weight:bold;
background:white;
color:#444;
transition:0.4s;
box-shadow:0 3px 10px rgba(0,0,0,0.08);
}

.nav-links a:hover{
transform:translateY(-5px) scale(1.08);
background:linear-gradient(45deg,#ff69b4,#ffd700);
color:white;
box-shadow:0 5px 20px rgba(255,105,180,0.4);
}

/* 🔥 Logout Button */
.logout-btn{
border:none;
padding:12px 22px;
border-radius:35px;
background:linear-gradient(45deg,#ff69b4,#ffd700);
color:white;
font-weight:bold;
cursor:pointer;
transition:0.4s;
}

.logout-btn:hover{
transform:scale(1.08);
}

/* ✨ HERO */
.hero{
padding-top:150px;
text-align:center;
}

.hero h1{
font-size:60px;
background:linear-gradient(90deg,#ff69b4,#ffd700,#00c6ff);
-webkit-background-clip:text;
-webkit-text-fill-color:transparent;
margin-bottom:15px;
}

.hero p{
font-size:24px;
color:#555;
}

/* 👩‍🍳 CHEFS */
.chefs{
display:flex;
justify-content:center;
gap:40px;
flex-wrap:wrap;
margin-top:50px;
}

.chef-card{
background:white;
padding:25px;
border-radius:30px;
width:280px;
text-align:center;
box-shadow:0 5px 25px rgba(0,0,0,0.1);
transition:0.4s;
position:relative;
overflow:hidden;
}

.chef-card:hover{
transform:translateY(-10px) scale(1.05);
}

.chef-card::before{
content:"💖";
position:absolute;
font-size:60px;
top:-10px;
right:15px;
opacity:0.2;
}

.chef-card img{
width:150px;
height:150px;
border-radius:50%;
object-fit:cover;
border:6px solid #ffd700;
margin-bottom:15px;
box-shadow:0 0 25px #ff69b4;
}

.chef-card h2{
color:#ff69b4;
margin-bottom:10px;
}

/* 📦 CARDS */
.cards{
display:flex;
justify-content:center;
gap:20px;
flex-wrap:wrap;
padding:30px;
margin-top:50px;
}

.card{
background:white;
padding:25px;
width:220px;
border-radius:30px;
text-align:center;
box-shadow:0 5px 20px rgba(0,0,0,0.1);
transition:0.4s;
cursor:pointer;
position:relative;
overflow:hidden;
}

.card:hover{
transform:scale(1.08);
}

.card::after{
content:"✨";
position:absolute;
font-size:60px;
opacity:0.1;
bottom:-10px;
right:10px;
}

.card h2{
font-size:38px;
margin-bottom:10px;
}

/* 👑 CLIENTS */
.clients{
margin-top:50px;
text-align:center;
padding:20px;
}

.clients h1{
color:#ff69b4;
margin-bottom:20px;
}

.client-list{
display:flex;
justify-content:center;
gap:15px;
flex-wrap:wrap;
}

.client{
background:white;
padding:14px 24px;
border-radius:35px;
font-weight:bold;
box-shadow:0 3px 10px rgba(0,0,0,0.08);
transition:0.3s;
}

.client:hover{
background:linear-gradient(45deg,#ff69b4,#ffd700);
color:white;
transform:scale(1.08);
}

/* 🌟 FOOTER */
footer{
margin-top:60px;
padding:25px;
text-align:center;
background:linear-gradient(90deg,#ff69b4,#ffd700,#00c6ff);
color:white;
font-weight:bold;
font-size:18px;
}

</style>
</head>

<body>

<!-- ⭐ -->
<div class="star" style="top:100px;left:10%;">⭐</div>
<div class="star" style="top:300px;right:15%;">✨</div>

<!-- 💖 -->
<div class="heart" style="top:180px;left:5%;">💖</div>
<div class="heart" style="top:500px;right:8%;">💕</div>

<!-- 🌸 -->
<div class="flower" style="top:120px;right:25%;">🌸</div>
<div class="flower" style="top:550px;left:30%;">🌺</div>

<!-- NAVBAR -->
<div class="navbar">

<div class="logo">
🍽️ RestoOrder
</div>

<div class="nav-links">

@guest
<a href="{{ route('login') }}">✨ Login</a>
<a href="{{ route('register') }}">💖 Register</a>
@endguest

@auth

<form method="POST" action="{{ route('logout') }}">
@csrf

<button type="submit" class="logout-btn">
🚪 Logout
</button>

</form>

@endauth

</div>

</div>

<!-- HERO -->
<div class="hero">

<h1>
✨ لوحة التحكم الفاخرة ✨
</h1>

<p>
من إبداع أميمة و أسماء 👩‍🍳💖  
نصنع الذوق والفخامة في كل طبق
</p>

</div>

<!-- 👩‍🍳 CHEFS -->
<div class="chefs">

<div class="chef-card">

<img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330">

<h2>👩‍🍳 أميمة</h2>

<p>
ملكة الإبداع والذوق الراقي ✨
</p>

</div>

<div class="chef-card">

<img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80">

<h2>👩‍🍳 أسماء</h2>

<p>
شيف راقية تعشق الجمال والفخامة 💖
</p>

</div>

</div>

<!-- 📦 STATS -->
<div class="cards">

<div class="card">
<h2>📦</h2>
<h3>125</h3>
<p>الطلبات</p>
</div>

<div class="card">
<h2>💰</h2>
<h3>45.000 DA</h3>
<p>الأرباح</p>
</div>

<div class="card">
<h2>🍔</h2>
<h3>58</h3>
<p>الأطباق</p>
</div>

<div class="card">
<h2>🚚</h2>
<h3>32</h3>
<p>تم التوصيل</p>
</div>

</div>

<!-- 👑 CLIENTS -->
<div class="clients">

<h1>
💖 زبائننا المميزون 💖
</h1>

<div class="client-list">

<div class="client">فاطمة</div>
<div class="client">شيماء</div>
<div class="client">هبة</div>
<div class="client">كنزة</div>
<div class="client">حنين</div>
<div class="client">دلال</div>
<div class="client">خولة</div>
<div class="client">الأستاذة كعواش نصيرة 🌸</div>

</div>

</div>

<footer>
🌸 RestoOrder © 2026 | لوحة تحكم فاخرة وراقية 🌸
</footer>

</body>
</html>
