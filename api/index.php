<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fleurs de Saison - Signature Collection</title>
    
    <style>
        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: radial-gradient(circle at top right, #758225, #ece8da);
            color: #2d2d2d;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-container {
            background: rgba(255, 255, 255, 0.95);
            max-width: 420px;
            width: 90%;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
            border: 1px solid rgba(255,255,255,0.18);
            transition: transform 0.3s ease;
        }

        .auth-container:hover {
            transform: translateY(-5px);
        }

        h2 {
            font-weight: 300;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 30px;
            color: #1a1a1a;
            position: relative;
        }

        h2::after {
            content: '';
            display: block;
            width: 40px;
            height: 2px;
            background: #d4af37; /* لون ذهبي خفيف */
            margin: 10px auto;
        }

        
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 0.85rem;
            text-transform: uppercase;
            margin-bottom: 8px;
            color: #666;
            letter-spacing: 1px;
            font-weight: 600;
        }

        input {
            margin-bottom: 25px;
            padding: 15px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            background: #fcfcfc;
            transition: all 0.3s ease;
            outline: none;
        }

        input:focus {
            border-color: #1a1a1a;
            background: #fff;
            box-shadow: 0 0 0 4px rgba(0,0,0,0.02);
        }

        
        .submit-btn {
            background: #1a1a1a;
            color: #fff;
            padding: 16px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .submit-btn:hover {
            background: #d4af37; 
            box-shadow: 0 6px 20px rgba(212, 175, 55, 0.3);
            transform: translateY(-2px);
        }

        .footer-links {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9rem;
        }

        .footer-links a {
            color: #888;
            text-decoration: none;
            transition: color 0.2s;
        }

        .footer-links a:hover {
            color: #1a1a1a;
        }

    </style>
</head>
<body>

    <section id="login" class="section">
        <div class="auth-container">
            <h2>Connexion</h2>
            
            <form method="POST" action="check.php">
                <label>Identifiant </label>
                <input type="text" placeholder="Saisir votre ID" required name="id">
                
                <label>Mot de passe</label>
                <input type="password" placeholder="Saisir le mot de passe" required name="password">
                
                <button type="submit" class="submit-btn">Se Connecter</button>
            </form>

            <div class="footer-links">
                <a href="#">Mot de passe oublié ?</a>
            </div>
        </div>
    </section>

</body>
</html>