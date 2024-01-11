<!DOCTYPE html>
<html>
<head>
    <title>Votre Vue</title>
</head>
    <body>
    <h1>Modifier le produit</h1>
    <form action="" method="POST" >
        @csrf
        @method('PUT')

        <label for="libelle">Libellé:</label>
        <input type="text" name="libelle" value="{{ $product['libelle']}}" required><br>

        <label for="marque">Marque:</label>
        <input type="text" name="marque" value="{{ $product['marque'] }}" required><br>

        <label for="prix">Prix:</label>
        <input type="number" name="prix" value="{{ $product['prix'] }}" step="0.01" required><br>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" value="{{ $product['stock'] }}" required><br>

        <label for="image">Image:</label>
        <input type="file" name="image"><br>

        <button type="submit">Enregistrer les modifications</button>
    </form>

    <a href="{{ route('products.index') }}">Retour à la liste des produits</a>


   
</body>
</html>