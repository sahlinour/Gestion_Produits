<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Détails du produit</title>
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
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .card-body {
            text-align: center;
        }
        .btn-back {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="mb-4">Détails du produit</h1>
                <p class="mb-2"><strong>Libellé:</strong> {{$product['libelle']}}</p>
                <p class="mb-2"><strong>Marque:</strong> {{ $product['marque'] }}</p>
                <p class="mb-2"><strong>Prix:</strong> {{ $product['prix'] }}</p>
                <p class="mb-3"><strong>Stock:</strong> {{ $product['stock'] }}</p>
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-back">Retour à la liste des produits</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
