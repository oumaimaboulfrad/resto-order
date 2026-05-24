<h1>👑 Dashboard Admin</h1>

<a href="/products/create">➕ Ajouter Produit</a>

@foreach($products as $product)
    <div>
        <h3>{{ $product->name }}</h3>
        <a href="/products/{{ $product->id }}/edit">✏️</a>
        <a href="/products/{{ $product->id }}/delete">🗑️</a>
    </div>
@endforeach