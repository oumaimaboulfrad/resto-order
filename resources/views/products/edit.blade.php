<form action="/products/{{ $product->id }}/update" method="POST">
    @csrf

    <input type="text" name="name" value="{{ $product->name }}">
    <input type="number" name="price" value="{{ $product->price }}">
    <input type="text" name="category" value="{{ $product->category }}">
    <input type="text" name="image" value="{{ $product->image }}">

    <button type="submit">Modifier</button>
</form>