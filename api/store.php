<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header("Location: index.php");
    exit();
}

if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}

if (isset($_POST['add_to_cart'])) {
    $produit = [
        'nom' => $_POST['nom'],
        'prix' => $_POST['prix'],
        'image' => $_POST['image']
    ];
    $_SESSION['panier'][] = $produit;
    header('Location: panier.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fleurs de Saison - Signature Collection</title>
    <style>
        /* التنسيق العام */
        body { 
            font-family: 'Segoe UI', sans-serif; 
            margin: 0; 
            padding: 0; 
            background-color: #ffffff; 
            color: #1a1a1a; 
        }

        /* الهيدر العصري */
        header { 
            background-color: rgba(255, 255, 255, 0.95); 
            padding: 1.5rem 8%; 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            box-shadow: 0 2px 20px rgba(0,0,0,0.03); 
            position: sticky; 
            top: 0; 
            z-index: 1000;
            backdrop-filter: blur(10px);
        }

        .logo { 
            font-size: 1.5rem; 
            font-weight: 300; 
            letter-spacing: 5px; 
            text-transform: uppercase; 
        }

        nav a { 
            margin-left: 25px; 
            text-decoration: none; 
            color: #1a1a1a; 
            font-size: 0.85rem; 
            text-transform: uppercase; 
            letter-spacing: 1px; 
            font-weight: 500;
            transition: 0.3s;
        }

        nav a:hover { color: #d4af37; }

        .cart-count {
            background: #d4af37;
            color: white;
            padding: 2px 8px;
            border-radius: 50%;
            font-size: 0.7rem;
            vertical-align: top;
            margin-left: 3px;
        }

        /* عنوان القسم */
        .section-title {
            text-align: center;
            padding: 60px 0 20px;
        }

        .section-title h2 {
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 4px;
            font-size: 2rem;
        }

        /* شبكة المنتجات */
        .product-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
            gap: 40px; 
            padding: 2rem 8%; 
        }

        /* بطاقة المنتج */
        .card { 
            background: white; 
            padding: 0; 
            text-align: center; 
            border-radius: 0; 
            overflow: hidden;
            transition: all 0.4s ease;
        }

        .image-container {
            position: relative;
            overflow: hidden;
            background: #f9f9f9;
            height: 400px;
        }

        .card img { 
            width: 100%; 
            height: 100%; 
            object-fit: cover; 
            transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .card:hover img { 
            transform: scale(1.08); 
        }

        .card h3 { 
            font-size: 1rem; 
            font-weight: 400; 
            margin: 20px 0 10px; 
            text-transform: capitalize;
            letter-spacing: 0.5px;
        }

        .card p { 
            color: #d4af37; 
            font-weight: 600; 
            font-size: 1.1rem; 
            margin-bottom: 20px;
        }

        /* زر الإضافة للسلة */
        .card button { 
            background-color: #1a1a1a; 
            color: white; 
            border: none; 
            padding: 15px; 
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.8rem;
            cursor: pointer; 
            width: 100%; 
            transition: all 0.3s;
        }

        .card button:hover { 
            background-color: #d4af37; 
            letter-spacing: 3px;
        }

        /* زر الخروج */
        .logout-btn {
            border: 1px solid #1a1a1a;
            padding: 8px 15px !important;
            border-radius: 4px;
        }

        .logout-btn:hover {
            background: #1a1a1a;
            color: #fff !important;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">Éclat de Rose</div>
        <nav>
            <a href="#">Accueil</a>
            <a href="#products">Produits</a>
            <a href="panier.php">Panier <span class="cart-count"><?= count($_SESSION['panier']) ?></span></a>
            <a href="index.php" class="logout-btn">Déconnexion</a>
        </nav>
    </header>

    <div class="section-title">
        <h2>Nouvelle Collection</h2>
        <p style="color: #888; font-style: italic;">Découvrez l'élégance à chaque pas</p>
    </div>

    <main id="products">
        <div class="product-grid">
           
            <!-- المنتج الأول -->
            <div class="card">
                <div class="image-container">
                    <img src="images/tulip rose.jpg" alt="Tulip Rose">
                </div>
                <h3>Fleurs de Saison - Signature Collection</h3>
                <p>150.00 DH</p>
             
                <form method="POST">
                    <input type="hidden" name="nom" value="Fleurs de Saison - Signature Collection">
                    <input type="hidden" name="prix" value="250">
                    <input type="hidden" name="image" value="images/tulip rose.jpg">
                    <button type="submit" name="add_to_cart">Ajouter au panier</button>
                </form>
            </div>

             <!-- المنتج الأول -->
            <div class="card">
                <div class="image-container">
                    <img src="images\tulip vert.jpg" alt="Tulip Vert">
                </div>
                <h3>Éclat Floral - Prestige Gold Edition</h3>
                <p>200.00 DH</p>
             
                <form method="POST">
                    <input type="hidden" name="nom" value="Éclat Floral - Prestige Gold Edition">
                    <input type="hidden" name="prix" value="250">
                    <input type="hidden" name="image" value="images\tulip vert.jpg">
                    <button type="submit" name="add_to_cart">Ajouter au panier</button>
                </form>
            </div>
             <!-- المنتج الأول -->
            <div class="card">
                <div class="image-container">
                    <img src="images\tulip noir.jpg" alt="Tulip noire">
                </div>
                <h3>L’Essentiel Floral - Minimal Edition</h3>
                <p>150.00 DH</p>
             
                <form method="POST">
                    <input type="hidden" name="nom" value="L’Essentiel Floral - Minimal Edition">
                    <input type="hidden" name="prix" value="250">
                    <input type="hidden" name="image" value="images\tulip noir.jpg">
                    <button type="submit" name="add_to_cart">Ajouter au panier</button>
                </form>
            </div>
           <!-- المنتج الأول -->
            <div class="card">
                <div class="image-container">
                    <img src="images\tulip bleu.jpg" alt="Tulip bleu">
                </div>
                <h3>L’Essentiel Floral - Minimal Edition</h3>
                <p>150.00 DH</p>
             
                <form method="POST">
                    <input type="hidden" name="nom" value="L’Essentiel Floral - Minimal Edition">
                    <input type="hidden" name="prix" value="250">
                    <input type="hidden" name="image" value="images\tulip bleu.jpg">
                    <button type="submit" name="add_to_cart">Ajouter au panier</button>
                </form>
            </div>
            <!-- المنتج الأول -->
            <div class="card">
                <div class="image-container">
                    <img src="images\tulip jeune.jpg" alt="Tulip jeune">
                </div>
                <h3>L’Essentiel Floral - Minimal Edition</h3>
                <p>150.00 DH</p>
             
                <form method="POST">
                    <input type="hidden" name="nom" value="L’Essentiel Floral - Minimal Edition">
                    <input type="hidden" name="prix" value="250">
                    <input type="hidden" name="image" value="images\tulip jeune.jpg">
                    <button type="submit" name="add_to_cart">Ajouter au panier</button>
                </form>
            </div>
            <!-- المنتج الأول -->
            <div class="card">
                <div class="image-container">
                    <img src="images\tulip blanche.jpg" alt="Tulip blanche">
                </div>
                <h3>L’Essentiel Floral - Minimal Edition</h3>
                <p>150.00 DH</p>
             
                <form method="POST">
                    <input type="hidden" name="nom" value="L’Essentiel Floral - Minimal Edition">
                    <input type="hidden" name="prix" value="250">
                    <input type="hidden" name="image" value="images\tulip blanche.jpg">
                    <button type="submit" name="add_to_cart">Ajouter au panier</button>
                </form>
            </div>
            
            <!-- المنتج الثاني -->
            <div class="card">
                <div class="image-container">
                    <img src="images/tulip rouge.jpg" alt="Tulip rouge">
                </div>
                <h3>L’Essentiel Floral - Minimal Edition</h3>
                <p>100.00 DH</p>
               
                <form method="POST">
                    <input type="hidden" name="nom" value="L’Essentiel Floral - Minimal Edition">
                    <input type="hidden" name="prix" value="320">
                    <input type="hidden" name="image" value="images/tulip rouge.jpg">
                    <button type="submit" name="add_to_cart">Ajouter au panier</button>
                </form>
            </div>

        </div>
    </main>

</body>
</html>