<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Liste des Produits</h2>
<a href="/produits/create">
<button style="background:green;color:white;padding:8px;border:none;">
    Ajouter Produit
</button>
</a>

<br><br>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Quantité</th>
        <th>desc</th>
        <th>Actions</th>
    </tr>

    @foreach($produits as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->nom_p }}</td>
        <td>{{ $p->prix }}</td>
        <td>{{ $p->quantite }}</td>
        <td>{{ $p->description }}</td>
            <td>
        <a href="/produits/edit/{{ $p->id }}"> Modifier</a> 
        <a href="/produits/delete/{{ $p->id }}">
           Supprimer
        </a>
    </td>
    </tr>
    @endforeach
</table>

</body>
</html>