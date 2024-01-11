<!DOCTYPE html>
<html>
<head>
    <title>Votre Vue</title>
</head>
<body>
    <h1>Tableau d'utilisateurs</h1>
    <table border=2 width='100%'>
        <thead>
            <tr>
            <th>Libellé</th>
            <th>Marque</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product['libelle'] }}</td>
            <td>{{ $product['marque'] }}</td>
            <td>{{ $product['prix']}}</td>
            <td>{{ $product['stock'] }}</td>
            <td>
                <a href="{{ route('products.show' , $product['id'])}}">Détails</a>
                <a href="{{ route('products.edit' , $product['id'])}}">Modifier</a>
                <form action="{{ route('products.destroy' , $product['id'])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>
