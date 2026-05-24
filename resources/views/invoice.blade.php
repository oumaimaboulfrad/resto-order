<!DOCTYPE html>
<html>
<head>
<style>

body{
    font-family: Arial;
    padding:20px;
    background:#fff;
}

.container{
    border:3px solid #ff4da6;
    border-radius:20px;
    padding:25px;
}

/* HEADER */
.header{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.logo{
    font-size:22px;
    font-weight:bold;
    color:#ff4da6;
}

.qr{
    font-size:12px;
    color:#999;
}

/* TITLE */
h1{
    text-align:center;
    background: linear-gradient(90deg,#ff4da6,#6a5cff);
    -webkit-background-clip:text;
    color:transparent;
}

/* INFO */
.info{
    margin-top:20px;
    font-size:16px;
}

/* TABLE */
table{
    width:100%;
    margin-top:20px;
    border-collapse: collapse;
}

th{
    background:#ff4da6;
    color:white;
    padding:10px;
}

td{
    padding:10px;
    border-bottom:1px solid #ddd;
}

/* TOTAL */
.total{
    margin-top:20px;
    font-size:22px;
    color:#6a5cff;
    font-weight:bold;
    text-align:right;
}

/* STATUS */
.status{
    padding:5px 10px;
    border-radius:10px;
    color:white;
}

.pending{background:orange;}
.delivered{background:green;}
.shipping{background:blue;}

/* FOOTER */
.footer{
    margin-top:40px;
    text-align:center;
    color:#999;
    font-size:14px;
}

</style>
</head>

<body>

<div class="container">

<div class="header">
    <div class="logo">🍽️ RestoOrder</div>
    <div class="qr">Scan Me 📱</div>
</div>

<h1>🧾 Facture Premium</h1>

<div class="info">
<p>👤 Client: Client Demo</p>
<p>📦 Commande N°: {{ $order->id }}</p>
<p>📅 Date: {{ $order->created_at }}</p>

<p>
📌 Status:
<span class="status {{ $order->status }}">
    {{ $order->status }}
</span>
</p>
</div>

<table>
<tr>
    <th>Produit</th>
    <th>Prix</th>
</tr>

<tr>
    <td>Commande Restaurant</td>
    <td>{{ $order->total_price }} DA</td>
</tr>
</table>

<div class="total">
💰 Total: {{ $order->total_price }} DA
</div>

<div class="footer">
💖 Merci pour votre confiance 💖 <br>
✨ Designed by Omaima & Asma ✨ <br>
📞 Contact: 0557 41 48 71
</div>

</div>

</body>
</html>