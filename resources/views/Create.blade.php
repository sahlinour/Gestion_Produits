<!DOCTYPE html>
<html>
<head>
    <title>Votre Vue</title>
</head>
<body>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label for="libelle">Libellé:</label>
    <input type="text" name="libelle" required><br>

    <label for="marque">Marque:</label>
    <input type="text" name="marque" required><br>

    <label for="prix">Prix:</label>
    <input type="number" name="prix" step="0.01" required><br>

    <label for="stock">Stock:</label>
    <input type="number" name="stock" required><br>

    <label for="image">Image:</label>
    <input type="file" name="image"><br>

    <button type="submit">Enregistrer</button>
</form>


</body>
</html>
