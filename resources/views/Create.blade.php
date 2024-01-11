<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Formulaire de Produit</title>
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
        .custom-form {
            border: 1px solid #ced4da;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            background-color: #fff;
        }
        .custom-form label {
            margin-bottom: 5px;
        }
        .custom-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        .custom-form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: 1px solid #007bff;
            border-radius: 4px;
            cursor: pointer;
        }
        .custom-form button:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="{{ route('products.store') }}" method="POST" class="custom-form">
            @csrf
            <h2 class="mb-4">Ajouter un Produit</h2>

            <div class="form-group">
                <label for="libelle">Libellé:</label>
                <input type="text" class="form-control" name="libelle" required>
            </div>

            <div class="form-group">
                <label for="marque">Marque:</label>
                <input type="text" class="form-control" name="marque" required>
            </div>

            <div class="form-group">
                <label for="prix">Prix:</label>
                <input type="number" class="form-control" name="prix" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="stock">Stock:</label>
                <input type="number" class="form-control" name="stock" required>
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control" name="image">
            </div>

            <button type="submit">Enregistrer</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


