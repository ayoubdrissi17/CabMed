<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement des informations de la secrétaire</title>
</head>
<body>
    <h1>Bienvenue,Secrétaire </h1>
    <form action="/secretaire" method="post">
        <input type="text" name="Nom" placeholder="Nom complet" required><br>
        <input type="text" name="mot de passe" placeholder="Mot de passe" required><br>
        <button type="submit">Se connecter</button>
</form>
</body>
</html>