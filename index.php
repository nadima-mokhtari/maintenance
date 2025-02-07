<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Maintenance</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Page de maintenance</h1>

        <div class="header">
            <h3 class="subtitle">Sous-titre</h3>
        </div>

        <div class="content">
            <p class="description">
                Nous travaillons actuellement à résoudre un problème technique. 
                Le site sera de nouveau en ligne dans les plus brefs délais. Merci de votre patience.
            </p>
            <img src="https://img.freepik.com/premium-vector/cartoon-character-fixing-website-issues_778176-526.jpg" alt="Illustration" class="image">
        </div>

        <form action="process_form.php" method="POST" class="form">
            <label for="email" class="label">Votre email</label>
            <input type="email" id="email" name="email" required class="input" placeholder="email@email.com">
            
            <label for="captcha" class="label">Question anti-robot : 5 + 2</label>
            <input type="text" id="captcha" name="captcha" required class="input">

            <button type="submit" class="button">Envoyer</button>
        </form>

        <footer class="footer">FOOTER - Tout droits réservés DWWM 2025</footer>
    </div>
</body>
</html>
