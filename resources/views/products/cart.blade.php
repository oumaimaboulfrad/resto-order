<h2>🛒 Votre panier</h2>

@foreach($cart as $item)
    <div>
        <form action="/order" method="POST">
    @csrf
</form>
        <h3>{{ $item['name'] }}</h3>
        <p>{{ $item['price'] }} DA</p>
        <p>Quantité: {{ $item['quantity'] }}</p>
        <a href="/checkout">
    ✅ Confirmer la commande
</a>
    </div>
@endforeach