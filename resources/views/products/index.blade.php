<h1 style="text-align:center;">🍽️ Menu RestoOrder</h1>

<div style="display:flex; flex-wrap:wrap; gap:20px; justify-content:center;">
<form method="GET" action="/products">
    <input type="text" name="search" placeholder="🔍 ابحث عن أكلة..."
    style="padding:10px; width:250px; border-radius:20px; border:1px solid #ccc;">
    <div class="rating">
    <style>
    .rating a{
    text-decoration:none;
    font-size:18px;
    margin:5px;
    padding:6px 10px;
    border-radius:10px;
    background: linear-gradient(45deg,#ff4da6,#6a5cff);
    color:white;
    transition:0.3s;
}

.rating a:hover{
    transform:scale(1.2);
    background: linear-gradient(45deg,#ff69b4,#00c2ff);
}
</style>
</div>
    <button type="submit" style="padding:10px; border-radius:20px;">بحث</button>
</form>
@foreach($products as $product)
    <div style="
        border:1px solid #ddd;
        border-radius:15px;
        padding:15px;
        width:250px;
        text-align:center;
        box-shadow:0 4px 10px rgba(0,0,0,0.1);
        background:#fff0f5;
    ">
    
        <img src="{{ $product->image }}" width="100%" style="border-radius:10px;">

       <h3>{{ $product->name }}</h3>
<p>{{ $product->price }} DA</p>

<p>
@for ($i = 0; $i < 5; $i++)
    @if($i < $product->rating)
        ⭐
    @else
        ☆
    @endif
@endfor
</p>

<div>
    <a href="/rate/{{ $product->id }}/5">⭐ 5</a>
    <a href="/rate/{{ $product->id }}/4">⭐ 4</a>
    <a href="/rate/{{ $product->id }}/3">⭐ 3</a>
</div>
</p>

        <p style="color:#ff69b4; font-weight:bold;">
            {{ $product->price }} DA
        </p>

        <p>{{ $product->category }}</p>

        <button style="
            background:#ff69b4;
            color:white;
            border:none;
            padding:10px;
            border-radius:10px;
            cursor:pointer;
        ">
            <a href="/add-to-cart/{{ $product->id }}">
    🛒 Ajouter au panier
</a>
        </button>
        <a href="/products/{{ $product->id }}/edit">✏️ Edit</a>
<a href="/products/{{ $product->id }}/delete">🗑️ Delete</a>
    </div>
@endforeach

</div>
