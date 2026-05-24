<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>
⚙️ الإعدادات
</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<style>

body{

font-family:Tahoma;

height:100vh;

display:flex;

justify-content:center;

align-items:center;

background:linear-gradient(
-45deg,
#ff4fd8,
#7b61ff,
#00c2ff,
#ff9966
);

background-size:400% 400%;

animation:bgMove 10s ease infinite;

}

@keyframes bgMove{

0%{
background-position:0% 50%;
}

50%{
background-position:100% 50%;
}

100%{
background-position:0% 50%;
}

}

.settings-box{

background:white;

padding:40px;

width:500px;

border-radius:35px;

box-shadow:0 0 25px rgba(0,0,0,0.15);

animation:fade 1s;

}

@keyframes fade{

from{

transform:translateY(30px);

opacity:0;

}

to{

transform:translateY(0);

opacity:1;

}

}

h1{

text-align:center;

margin-bottom:30px;

color:#7b61ff;

font-weight:bold;

}

.form-control{

border-radius:15px;

padding:12px;

margin-top:8px;

}

.btn-save{

width:100%;

padding:14px;

border:none;

border-radius:15px;

font-size:18px;

font-weight:bold;

color:white;

background:linear-gradient(
45deg,
#ff4fd8,
#7b61ff
);

transition:0.4s;

}

.btn-save:hover{

transform:scale(1.05);

}

.toast-box{

position:fixed;

bottom:20px;
left:20px;

background:white;

padding:15px 25px;

border-radius:15px;

display:none;

box-shadow:0 0 15px rgba(0,0,0,0.2);

font-weight:bold;

color:#7b61ff;

}

</style>

</head>

<body>

<div class="settings-box">

<h1>
⚙️ إعدادات المطعم
</h1>

<div class="mb-3">

<label>
اسم المطعم
</label>

<input type="text"
id="restaurantName"
class="form-control"
value="Veloura Restaurant">

</div>

<div class="mb-3">

<label>
البريد الإلكتروني
</label>

<input type="email"
id="restaurantEmail"
class="form-control"
value="veloura@gmail.com">

</div>

<div class="mb-3">

<label>
رقم الهاتف
</label>

<input type="text"
id="restaurantPhone"
class="form-control"
value="0550000000">

</div>

<button class="btn-save"
onclick="saveSettings()">

💾 حفظ التعديلات

</button>

</div>

<div id="toastBox"
class="toast-box">

✅ تم حفظ التعديلات

</div>

<script>

function saveSettings(){

let name =
document.getElementById(
"restaurantName"
).value;

let email =
document.getElementById(
"restaurantEmail"
).value;

let phone =
document.getElementById(
"restaurantPhone"
).value;

/* SAVE */

localStorage.setItem(
"name",
name
);

localStorage.setItem(
"email",
email
);

localStorage.setItem(
"phone",
phone
);

/* TOAST */

let toast =
document.getElementById(
"toastBox"
);

toast.style.display =
"block";

setTimeout(()=>{

toast.style.display =
"none";

},2000);

}

/* LOAD */

document.getElementById(
"restaurantName"
).value =
localStorage.getItem(
"name"
) || "Veloura Restaurant";

document.getElementById(
"restaurantEmail"
).value =
localStorage.getItem(
"email"
) || "veloura@gmail.com";

document.getElementById(
"restaurantPhone"
).value =
localStorage.getItem(
"phone"
) || "0550000000";

</script>

</body>

</html>
