<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<title>RestoOrder Delivery</title>

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">

<style>

body{
    margin:0;
    font-family:'Cairo',sans-serif;
    background:linear-gradient(135deg,#fff0f5,#ffe4b5);
    overflow-x:hidden;
}

/* 🌈 TITLE */
.title{
    text-align:center;
    margin-top:40px;
}

.title h1{

    font-size:55px;

    background:linear-gradient(
    90deg,
    red,
    orange,
    yellow,
    green,
    blue,
    pink);

    background-size:400%;

    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;

    animation:rainbow 5s linear infinite;
}

@keyframes rainbow{

    0%{
        background-position:0%;
    }

    100%{
        background-position:400%;
    }
}

.title p{
    font-size:22px;
    color:#ff4d6d;
}

/* 📦 ORDER NUMBER */
.order-number{

    text-align:center;

    font-size:28px;

    color:#444;

    margin-top:20px;
}

.order-number span{
    color:#ff4d6d;
    font-weight:bold;
}

/* ⏳ COUNTDOWN */
#countdown{

    text-align:center;

    color:#ff4d6d;

    font-size:40px;

    margin-top:20px;

    font-weight:bold;
}

/* 🚚 CONTAINER */
.progress-container{

    width:80%;

    margin:50px auto;
}

/* 🛵 MOTO */
.moto{

    font-size:80px;

    position:relative;

    animation:
    moveMoto 8s linear forwards,
    bounce 1s infinite;
}

@keyframes moveMoto{

    0%{
        left:-10%;
    }

    100%{
        left:85%;
    }
}

@keyframes bounce{

    0%,100%{
        transform:translateY(0);
    }

    50%{
        transform:translateY(-8px);
    }
}

/* 🌈 BAR */
.progress-bar{

    width:100%;

    height:20px;

    background:#ddd;

    border-radius:20px;

    overflow:hidden;
}

.progress{

    width:0%;

    height:100%;

    border-radius:20px;

    background:linear-gradient(
    90deg,
    red,
    orange,
    yellow,
    green,
    blue,
    pink);

    background-size:300%;

    animation:
    load 8s forwards,
    rainbow 4s linear infinite;
}

@keyframes load{

    0%{
        width:0%;
    }

    100%{
        width:100%;
    }
}

/* 📍 MAP */
.map{

    margin-top:35px;

    background:white;

    padding:20px;

    width:70%;

    margin-left:auto;
    margin-right:auto;

    border-radius:20px;

    text-align:center;

    font-size:22px;

    box-shadow:0 5px 20px rgba(0,0,0,0.1);

    animation:float 3s infinite;
}

/* 📦 STATUS */
.status{

    display:flex;

    justify-content:center;

    gap:25px;

    margin-top:40px;

    flex-wrap:wrap;
}

.box{

    background:white;

    padding:18px 25px;

    border-radius:20px;

    box-shadow:0 5px 20px rgba(0,0,0,0.15);

    font-size:20px;

    font-weight:bold;

    cursor:pointer;

    transition:0.3s;

    animation:float 3s ease-in-out infinite;
}

.box:hover{

    transform:scale(1.1);

    background:#fff0f5;
}

@keyframes float{

    0%,100%{
        transform:translateY(0);
    }

    50%{
        transform:translateY(-10px);
    }
}

/* 💖 MESSAGE */
.message{

    text-align:center;

    margin-top:70px;

    font-size:30px;

    color:#ff4d6d;

    font-weight:bold;
}

/* 🔔 POPUP */
#popup{

    position:fixed;

    bottom:30px;

    right:30px;

    background:white;

    padding:15px 25px;

    border-radius:20px;

    box-shadow:0 5px 20px rgba(0,0,0,0.2);

    font-size:18px;

    display:none;

    animation:pop 0.5s;
}

@keyframes pop{

    from{
        transform:scale(0.5);
        opacity:0;
    }

    to{
        transform:scale(1);
        opacity:1;
    }
}

/* 🏠 BUTTON */
.home-btn{

    display:block;

    width:250px;

    margin:40px auto;

    text-align:center;

    padding:15px;

    border-radius:30px;

    text-decoration:none;

    color:white;

    font-size:20px;

    font-weight:bold;

    background:linear-gradient(
    90deg,
    red,
    orange,
    yellow,
    green,
    blue,
    pink);

    background-size:300%;

    animation:rainbow 5s linear infinite;

    transition:0.3s;
}

.home-btn:hover{

    transform:scale(1.08);
}

</style>
</head>

<body>

<!-- 🌈 TITLE -->
<div class="title">

    <h1>
        🚚 تتبع الطلب
    </h1>

    <p>
        تابعي طلبك لحظة بلحظة مع
        RestoOrder 💖
    </p>

</div>

<!-- 📦 ORDER -->
<div class="order-number">

📦 رقم الطلب:
<span>#45892</span>

</div>

<!-- ⏳ COUNTDOWN -->
<h2 id="countdown">
⏳ 30:00
</h2>

<!-- 🚚 DELIVERY -->
<div class="progress-container">

    <!-- 🛵 -->
    <div class="moto">
        🛵
    </div>

    <!-- 🌈 BAR -->
    <div class="progress-bar">

        <div class="progress"></div>

    </div>

    <!-- 📍 MAP -->
    <div class="map">

        📍 الجزائر → مطعم
        RestoOrder → منزل الزبون 🏠

    </div>

    <!-- 📦 STATUS -->
    <div class="status">

        <div class="box"
        onclick="showMessage('🍳 الطلب راه قيد التحضير من طرف الشافة 👩‍🍳')">

            🍳 قيد التحضير

        </div>

        <div class="box"
        onclick="showMessage('🛵 الطلب خرج للتوصيل وهو قريب يوصلك!')">

            🛵 خرج للتوصيل

        </div>

        <div class="box"
        onclick="showMessage('✅ تم توصيل الطلب بنجاح، بالصحة والهنا 💖')">

            ✅ تم التوصيل

        </div>

    </div>

</div>

<!-- 💖 MESSAGE -->
<div class="message">

✨ نحن فريق المذاق نصنع السعادة في كل طلب ✨

<br><br>

👩‍🍳 أميمة & أسماء

</div>

<!-- 🏠 BUTTON -->
<a href="/" class="home-btn">

🏠 الرجوع للصفحة الرئيسية

</a>

<!-- 🔔 POPUP -->
<div id="popup"></div>

<!-- 🔔 SOUND -->
<audio id="notifSound">

<source
src="https://www.soundjay.com/buttons/sounds/button-3.mp3"
type="audio/mpeg">

</audio>

<script>

/* 🔔 POPUP */

function showMessage(text){

    let popup =
    document.getElementById("popup");

    popup.innerHTML = text;

    popup.style.display = "block";

    document
    .getElementById("notifSound")
    .play();

    setTimeout(()=>{

        popup.style.display = "none";

    },3000);
}

/* ⏳ COUNTDOWN */

let time = 1800;

let countdown =
document.getElementById("countdown");

setInterval(()=>{

    let minutes =
    Math.floor(time / 60);

    let seconds =
    time % 60;

    seconds =
    seconds < 10 ?
    "0"+seconds :
    seconds;

    countdown.innerHTML =
    "⏳ " + minutes + ":" + seconds;

    if(time > 0){

        time--;
    }

},1000);

</script>

</body>
</html>

