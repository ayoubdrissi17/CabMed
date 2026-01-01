<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
</head>
<body>
     <form action="/inscription" method="POST">
        <input type="text" name="name" placeholder="Nom complet" required><br>
        <input type="text" name="C"  placeholder="CIN"required><br>
        <input type="number" name="N" placeholder="Telephone" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Mot de passe" required><br>
        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>