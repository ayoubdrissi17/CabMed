<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>medecin</title>
</head>
<body>
    <h1>Bienvenue,Médecin </h1>
    <p>Ceci est la page dédiée aux médecins.</p>
    <form action="/medecin" method="POST">
        <input type="text" name="name" placeholder="Nom complet" required><br>
        <input type="number" name="id" placeholder="id" required><br>
        <input type="text" name="specialite" placeholder="Spécialité" required><br>
        <button type="submit">Enregistrer</button>
</form>   
</body>
</html>