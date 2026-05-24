<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<title>RestoOrder</title>

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">

<style>
/* 🌸 LEFT GIRL */

.chef-left{

position:fixed;

left:20px;

top:220px;

font-size:90px;

z-index:999;

animation:floatLeft 4s ease-in-out infinite;

filter:drop-shadow(
0 0 10px pink
);

}

/* 🌸 RIGHT GIRL */

.chef-right{

position:fixed;

right:20px;

top:220px;

font-size:90px;

z-index:999;

animation:floatRight 4s ease-in-out infinite;

filter:drop-shadow(
0 0 10px #7b61ff
);

}

/* 🌈 FLOAT */

@keyframes floatLeft{

0%{

transform:
translateY(0)
rotate(-3deg);

}

50%{

transform:
translateY(-15px)
rotate(3deg);

}

100%{

transform:
translateY(0)
rotate(-3deg);

}

}

@keyframes floatRight{

0%{

transform:
translateY(0)
rotate(3deg);

}

50%{

transform:
translateY(-15px)
rotate(-3deg);

}

100%{

transform:
translateY(0)
rotate(3deg);

}

}

/* 💖 GLOW */

.chef-left:hover,
.chef-right:hover{

transform:scale(1.1);

transition:0.4s;

}


body {
    margin: 0;
    font-family: 'Cairo', sans-serif;
    overflow-x: hidden;
}

/* 🌈 خلفية */
body::before {
    content: "";
    position: fixed;
    width: 100%;
    height: 100%;
    background: linear-gradient(270deg, red, orange, yellow, green, blue, pink);
    background-size: 1000% 1000%;
    animation: rainbowBG 12s ease infinite;
    z-index: -1;
    opacity: 0.2;
}

@keyframes rainbowBG {
    0% {background-position: 0%}
    50% {background-position: 100%}
    100% {background-position: 0%}
}

/* 🔝 NAVBAR */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 50px;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    background: rgba(255,255,255,0.85);
    backdrop-filter: blur(12px);
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

.navbar h2 {
    background: linear-gradient(90deg, red, orange, pink);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: logoMove 4s linear infinite;
}

@keyframes logoMove {
    0% {background-position: 0%}
    100% {background-position: 200%}
}

.navbar a {
    margin: 0 12px;
    text-decoration: none;
    font-weight: bold;
    color: #333;
    position: relative;
    padding: 5px 8px;
}

/* خط متحرك */
.navbar a::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -5px;
    width: 0%;
    height: 3px;
    background: linear-gradient(90deg, red, orange, yellow, green, blue, pink);
    transition: 0.4s;
}

.navbar a:hover::after {
    width: 100%;
}

.navbar a:hover {
    color: #ff6b9d;
    transform: translateY(-2px);
}

/* HERO */
.hero {
    height: 100vh;
    padding-top: 80px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

/* 🌈 عنوان */
.hero h1 {
    font-size: 60px;
    font-weight: bold;
    background: linear-gradient(90deg, red, orange, yellow, green, blue, pink);
    background-size: 400%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: textMove 5s linear infinite;
}

@keyframes textMove {
    0% {background-position: 0%}
    100% {background-position: 400%}
}

.hero p {
    font-size: 22px;
}

/* زر */
.btn {
    padding: 12px 30px;
    border-radius: 30px;
    background: linear-gradient(45deg, pink, orange);
    color: white;
    text-decoration: none;
}

/* CARDS */
.section {
    padding: 60px;
    text-align: center;
}

.cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.card {
    width: 240px;
    border-radius: 15px;
    overflow: hidden;
    background: white;
    transition: 0.3s;
}

.card:hover {
    transform: scale(1.1);
}

.card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

/* فيديو */
.video iframe {
    width: 70%;
    height: 350px;
    border-radius: 15px;
    margin-top: 20px;
}

/* FOOTER */
footer {
    padding: 20px;
    text-align: center;
    background: linear-gradient(270deg, red, orange, yellow, green, blue, pink);
    background-size: 600%;
    animation: rainbowBG 10s infinite;
    color: white;
}

.settings-box{

background:white;

padding:40px;

border-radius:35px;

box-shadow:0 0 25px rgba(0,0,0,0.08);

background:
linear-gradient(135deg,
#fff,
#ffe6fa);

}

.settings-box h2{

color:#7b61ff;

font-weight:bold;

}

.form-control{

border-radius:15px;

padding:12px;

border:2px solid #ffd2f4;

}

.form-control:focus{

border-color:#ff4fd8;

box-shadow:0 0 10px #ffb3eb;

}

.btn-save{

background:
linear-gradient(45deg,
#ff4fd8,
#7b61ff);

border:none;

padding:12px 22px;

border-radius:15px;

color:white;

font-weight:bold;

transition:0.3s;

}

.btn-save:hover{

transform:scale(1.08);

}

.btn-reset{

background:#f1f1f1;

border:none;

padding:12px 22px;

border-radius:15px;

font-weight:bold;

transition:0.3s;

}

.btn-reset:hover{

transform:scale(1.08);

}

.result-box{

background:#fff0fb;

padding:20px;

border-radius:20px;

text-align:center;

margin-top:20px;

}


</style>
</head>

<body>
<!-- 🌸 CARTOON GIRLS -->

<div class="chef-left">

👩🏻‍🍳🍰

</div>

<div class="chef-right">

🍜👩🏻‍🍳

</div>

<!-- NAVBAR -->
<div class="navbar">

    <h2> RestoOrder 🍽️</h2>
<div>
    <a href="/home">الرئيسية</a>
    <a href="/products">قائمة الطعام</a>
    <a href="/cart">سلة طلبات</a>

    @guest
        <a href="/login">تسجيل الدخول</a>
        <a href="/register">انشاء حساب جديد</a>
    @endguest

    @auth
        <a href="/dashboard">لوحة التحكم</a>

        <form method="POST" action="/logout" style="display:inline;">
            @csrf
            <button type="submit">تسجيل الخروج</button>
        </form>
    @endauth

    <a href="/admin">مسؤول</a>
    <a href="/settings">⚙️ الاعدادات</a>
</div>

</div>

<!-- HERO -->
<div class="hero">
    <div>
        <h1>نظام ادارة المطاعم 🌈</h1>
        <p>من إبداع طاهيتان… نخلق تجربة لا تُنسى 👩‍🍳💖</p>
    </div>
</div>

<!-- FOOD -->
<div class="section">
    <h2>أطباق لذيذة 😍</h2>

    <div class="cards">
        <div class="card">
            <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd">
            <h3>برغر</h3>
        </div>

        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2eLgGHzxH9er_jWPM86vUutQNKOmEq0Vm8g&s">
            <h3>بيتزا</h3>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092">
            <h3>شاورما</h3>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1550547660-d9450f859349">
            <h3>دجاج مشوي</h3>
        </div>
    </div>
</div>

<!-- 🎥 فيديو -->
<div class="section video">
    <h2>مع شاف 👩‍🍳</h2>

    <iframe src="https://www.youtube.com/embed/4aZr5hZXP_s"></iframe>
    <iframe src="https://www.youtube.com/embed/1-SJGQ2HLp8"></iframe>
</div>

<a href="/delivery" class="btn">
🚚 تتبع الطلب
</a>

<!-- 💖 جملة -->
<div class="section">
    <h2>✨ نحن لمسة الاناقة في الطهي نصنع الجمال في كل طبق ✨</h2>
    <p>أميمة & أسماء 👩‍🍳💖</p>
</div>
<!-- CONTACT -->
<div class="contact">

<h2 style="color:#333;">📞 تواصل معنا</h2>

<a href="https://wa.me/0557414871">
💬 تواصل عبر واتساب
</a>

</div>

<!-- FOOTER -->
<footer>
    RestoOrder © 2026
</footer>

</body>
</html>

