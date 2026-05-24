<!DOCTYPE html>
<form action="{{ route('menu.search') }}" method="GET">
    <input type="text" name="search" placeholder="ابحث عن مأكولة...">
    <button type="submit">بحث</button>
</form>

<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>

body{
    background: linear-gradient(
    135deg,
    #ffe0ec,
    #ffd6f6,
    #f8d9ff,
    #ffe5ec
    );

    background-size: 400% 400%;
    animation: bgMove 10s ease infinite;
}

/* حركة الخلفية */
@keyframes bgMove{
    0%{
        background-position: 0% 50%;
    }

    50%{
        background-position: 100% 50%;
    }

    100%{
        background-position: 0% 50%;
    }
}

/* خلفية القائمة */
.menu-box{
    background: rgba(255,255,255,0.25);
    backdrop-filter: blur(10px);

    border-radius: 25px;

    padding: 25px;

    box-shadow: 0 0 25px rgba(255,105,180,0.4);
}

</style>


<style>

body{
background:#f5f7fb;
padding:40px;
font-family:Arial;
}

.card{
border:none;
border-radius:20px;
transition:0.3s;
}

.card:hover{
transform:scale(1.05);
}

img{
height:220px;
object-fit:cover;
border-radius:20px 20px 0 0;
}

.btn{
border-radius:12px;
}

</style>

</head>

<body>

<h1 class="mb-4 text-center">
🍔 Restaurant Menu
</h1>
<div class="container menu-box">

<div class="row">

<div class="col-md-4">

<div class="card shadow">

<img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?q=80&w=800">

<div class="card-body">

<h3>Pizza</h3>

<p>
Délicieuse pizza fromage
</p>

<h4 class="text-primary">
1200 DA
</h4>

<button class="btn btn-success w-100">
Ajouter au panier
</button>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card shadow">

<img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?q=80&w=800">

<div class="card-body">

<h3>Burger</h3>

<p>
Burger royal délicieux
</p>

<h4 class="text-danger">
900 DA
</h4>

<button class="btn btn-warning w-100">
Ajouter au panier
</button>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card shadow">

<img src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?q=80&w=800">

<div class="card-body">

<h3>Tacos</h3>

<p>
Tacos sauce fromage
</p>

<h4 class="text-success">
1000 DA
</h4>

<button class="btn btn-primary w-100">
Ajouter au panier
</button>

</div>

</div>

</div>

</div>

</body>
</html>