<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header("Location: index.php");
    exit();
}

if (isset($_GET['del'])) {
    $index = $_GET['del'];
    unset($_SESSION['panier'][$index]);
    $_SESSION['panier'] = array_values($_SESSION['panier']);
    header('Location: panier.php');
    exit;
}

$total = 0;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Panier | BAG STORE</title>
    <style>
        /* إعدادات الفخامة العامة */
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #fcfcfc;
            color: #1a1a1a;
            margin: 0;
            padding: 40px 5%;
        }

        h1 {
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 4px;
            text-align: center;
            margin-bottom: 50px;
        }

        /* زر الرجوع */
        .back {
            display: inline-block;
            text-decoration: none;
            color: #1a1a1a;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 30px;
            border-bottom: 1px solid #d4af37;
            padding-bottom: 5px;
            transition: 0.3s;
        }

        .back:hover {
            color: #d4af37;
            padding-left: 5px;
        }

        /* حاوية السلة */
        .cart-container {
            max-width: 900px;
            margin: 0 auto;
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
        }

        /* تصميم صفوف المنتجات (بدل الجدول) */
        .cart-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 0;
            border-bottom: 1px solid #eee;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .item-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .item-info img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 10px;
            background: #f9f9f9;
        }

        .item-details h3 {
            margin: 0;
            font-size: 1.1rem;
            font-weight: 500;
        }

        .item-price {
            color: #d4af37;
            font-weight: 600;
            margin-top: 5px;
        }

        /* زر الحذف الأنيق */
        .delete {
            color: #a0a0a0;
            text-decoration: none;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: 1px solid #eee;
            padding: 8px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .delete:hover {
            background: #ff4d4d;
            color: #fff;
            border-color: #ff4d4d;
        }

        /* القسم السفلي (المجموع) */
        .cart-footer {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 2px solid #1a1a1a;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .total-label {
            font-size: 1.2rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .total-amount {
            font-size: 1.8rem;
            font-weight: 300;
            color: #1a1a1a;
        }

        .checkout-btn {
            display: block;
            width: 100%;
            text-align: center;
            background: #1a1a1a;
            color: white;
            padding: 18px;
            margin-top: 30px;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 2px;
            border-radius: 8px;
            transition: 0.3s;
        }

        .checkout-btn:hover {
            background: #d4af37;
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.2);
        }

        .empty-msg {
            text-align: center;
            padding: 50px;
            color: #888;
        }
    </style>
</head>
<body>

    <a href="store.php" class="back">← Retour au Store</a>
    
    <h1>Votre Panier</h1>

    <div class="cart-container">
        <?php if (empty($_SESSION['panier'])): ?>
            <div class="empty-msg">
                <p>Votre panier est actuellement vide.</p>
                <a href="store.php" style="color:#d4af37; text-decoration:none;">Commencer vos achats</a>
            </div>
        <?php else: ?>
            
            <?php foreach ($_SESSION['panier'] as $index => $item): 
                $total += $item['prix'];
            ?>
            <div class="cart-item">
                <div class="item-info">
                    <img src="<?= $item['image'] ?>" alt="<?= $item['nom'] ?>">
                    <div class="item-details">
                        <h3><?= $item['nom'] ?></h3>
                        <div class="item-price"><?= number_format($item['prix'], 2) ?> DHS</div>
                    </div>
                </div>
                <a href="panier.php?del=<?= $index ?>" class="delete">Supprimer</a>
            </div>
            <?php endforeach; ?>

            <div class="cart-footer">
                <div class="total-label">Total</div>
                <div class="total-amount"><?= number_format($total, 2) ?> DHS</div>
            </div>

            <a href="checkout.php" class="checkout-btn">Passer à la caisse</a>
        <?php endif; ?>
    </div>

</body>
</html>