<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Modifier le produit</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .form-container {
            border: 1px solid #dee2e6;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            background-color: #fff;
        }
        .form-container label {
            margin-bottom: 5px;
        }
        .form-container input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: 1px solid #007bff;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1 class="mb-4">Modifier le produit</h1>
            <form action="{{ route('products.update', $product['id']) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <label for="libelle">Libellé:</label>
                <input type="text" class="form-control" name="libelle" value="{{ $product['libelle'] }}" required>

                <label for="marque">Marque:</label>
                <input type="text" class="form-control" name="marque" value="{{ $product['marque'] }}" required>

                <label for="prix">Prix:</label>
                <input type="number" class="form-control" name="prix" value="{{ $product['prix'] }}" step="0.01" required>

                <label for="stock">Stock:</label>
                <input type="number" class="form-control" name="stock" value="{{ $product['stock'] }}" required>

                <label for="image">Image:</label>
                <input type="file" class="form-control" name="image">

                <button type="submit" class="btn btn-primary mt-3">Enregistrer les modifications</button>
            </form>

            <a href="{{ route('products.index') }}">Retour à la liste des produits</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
