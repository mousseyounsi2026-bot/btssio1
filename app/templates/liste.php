<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catalogue</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="entete">
    <div class="conteneur entete-contenu">
        <a href="index.php" class="marque">Catalogue</a>
    </div>
</header>
<main class="conteneur">
    <h1>Produits</h1>
    <div class="tableau-conteneur">
        <table>
            <thead>
            <tr>
                <th>N°</th>
                <th>Nom</th>
                <th>Description</th>
                <th class="num">Prix</th>
                <th class="num">Stock</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($produits as $produit): ?>
                <tr>
                    <td class="id"><?= $produit->getId() ?></td>
                    <td class="nom"><?= htmlspecialchars($produit->getNom()) ?></td>
                    <td class="description"><?= htmlspecialchars($produit->getDescription()) ?></td>
                    <td class="num"><?= number_format($produit->getPrix(), 2, ',', ' ') ?> €</td>
                    <td class="num"><?= $produit->getStock() ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
</body>
</html>
