<?php
require_once 'Fruit.php';
require_once 'Panier.php';
session_start();

// Protection de la page
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

// Initialisation du panier si inexistant
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = new Panier();
}

$panier = $_SESSION['panier'];

// Liste fictive de fruits (Normalement issue d'une BDD)
$catalogue = [
    new Fruit(1, "Pomme Gala", 2.50, "pomme.jpg"),
    new Fruit(2, "Banane Bio", 1.80, "banane.jpg"),
    new Fruit(3, "Poire Conférence", 3.20, "poire.jpg")
];

// Traitement Ajout
if (isset($_POST['add'])) {
    $id = $_POST['id'];
    $qte = $_POST['quantite'];
    $f = $catalogue[$id - 1]; 
    $panier->ajouter($f, $qte);
}

// Traitement Suppression
if (isset($_GET['del'])) {
    $panier->supprimer($_GET['del']);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Store | Boutique</title>
    <style>
        :root { --primary: #27ae60; --dark: #2c3e50; --light: #ecf0f1; }
        body { font-family: 'Segoe UI', sans-serif; margin: 0; background: #f4f7f6; }
        .container { max-width: 1100px; margin: auto; padding: 20px; }
        
        /* Header */
        header { background: white; padding: 1rem 0; box-shadow: 0 2px 5px rgba(0,0,0,0.1); sticky; top: 0; z-index: 100; }
        nav { display: flex; justify-content: space-between; align-items: center; }
        .logo { color: var(--primary); font-size: 1.5rem; font-weight: bold; }
        .cart-link { text-decoration: none; color: var(--dark); font-weight: bold; }
        .badge { background: var(--primary); color: white; padding: 2px 8px; border-radius: 10px; font-size: 0.8rem; }

        /* Grille de produits */
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; margin-top: 30px; }
        .card { background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.05); transition: 0.3s; border: 1px solid #eee; }
        .card:hover { transform: translateY(-5px); }
        .card img { width: 100%; height: 180px; object-fit: cover; }
        .card-body { padding: 15px; text-align: center; }
        
        /* Formulaire */
        input[type="number"] { width: 50px; padding: 5px; border: 1px solid #ddd; border-radius: 4px; }
        .btn { background: var(--primary); color: white; border: none; padding: 8px 15px; border-radius: 5px; cursor: pointer; }
        .btn-del { color: #e74c3c; text-decoration: none; font-size: 0.9rem; }

        /* Panier */
        .cart-section { margin-top: 50px; background: white; padding: 20px; border-radius: 12px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 12px; border-bottom: 1px solid #eee; text-align: left; }
        
        @media (max-width: 600px) {
            .nav-links { font-size: 0.8rem; }
            .grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <nav>
            <div class="logo">🍎 FruitStore</div>
            <div>
                <a href="#panier" class="cart-link">🛒 Panier <span class="badge"><?= $panier->getCompte() ?></span></a>
                <a href="logout.php" style="margin-left:15px; color: grey;">Déconnexion</a>
            </div>
        </nav>
    </div>
</header>

<div class="container">
    <h2>Nos Produits</h2>
    <div class="grid">
        <?php foreach ($catalogue as $f): ?>
        <div class="card">
            <img src="images/<?= $f->getImage() ?>" alt="<?= $f->getNom() ?>">
            <div class="card-body">
                <h3><?= $f->getNom() ?></h3>
                <p><?= number_format($f->getPrix(), 2) ?> €</p>
                <form method="POST">
                    <input type="hidden" name="id" value="<?= $f->getId() ?>">
                    <input type="number" name="quantite" value="1" min="1">
                    <button type="submit" name="add" class="btn">Ajouter</button>
                </form>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div id="panier" class="cart-section">
        <h2>Mon Panier</h2>
        <table>
            <thead>
                <tr>
                    <th>Fruit</th>
                    <th>Prix</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($panier->getItems() as $index => $item): ?>
                <tr>
                    <td><?= $item->getNom() ?></td>
                    <td><?= number_format($item->getPrix(), 2) ?> €</td>
                    <td><a href="?del=<?= $index ?>" class="btn-del">Supprimer</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h3 style="text-align: right;">Total : <?= number_format($panier->getTotal(), 2) ?> €</h3>
    </div>
</div>

</body>
</html>