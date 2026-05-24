<form action="/products" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Nom produit">
    <input type="number" name="price" placeholder="Prix">
    <input type="text" name="category" placeholder="Catégorie">
    <input type="text" name="image" placeholder="Image URL">

    <button type="submit">Ajouter</button>
</form>