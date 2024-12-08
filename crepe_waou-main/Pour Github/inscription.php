<!DOCTYPE html>
<html lang="fr-FR" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site E-commerce en HTML5 & CSS3 - Serveur Web</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="website-header">
        <a href="../index.php">
            <h1 class="header-logo">Website.</h1>
        </a>
        <nav>
            <a href="catalogue.php">Catalogue</a>
            <a href="inscription.php">Inscription</a>
            <a href="connexion.php">Connexion</a>
            <a href="panier.php">Panier</a>
        </nav>
    </header>

    <main class="registration-main">
        <article class="register-title">
            <h1>Inscription</h1>
        </article>
        <article class="registration-article">
            <form action="" class="registration-form" method="post">
                <label for="emails" hidden>Adresse e-mail :</label>
                <input type="email" name="emails" id="emails" maxlength="80" placeholder="E-mail.." required>
                <br>
                <label for="secret-password" hidden>Mot de passe :</label>
                <input type="password" name="secret-password" id="secret-password" placeholder="Mot de passe.."
                    maxlength="100" required>
                <br>
                <div>
                    <button type="submit">S'inscrire</button>
                </div>
            </form>
        </article>
    </main>

    <footer class="website-footer">
        &copy; <strong>Amâra-Noah - 2024</strong>
    </footer>
</body>

</html>