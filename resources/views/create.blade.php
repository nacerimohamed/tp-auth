<h2>Ajouter Produit</h2>

<form action="/produits/store" method="POST">
    @csrf

    <label>Nom produit</label><br>
    <input type="text" name="nom_p"><br><br>

    <label>Prix</label><br>
    <input type="number" step="0.01" name="prix"><br><br>

    <label>Quantité</label><br>
    <input type="number" name="quantite"><br><br>

    <label>Description</label><br>
    <textarea name="description"></textarea><br><br>

    <button type="submit">Ajouter</button>
</form>
