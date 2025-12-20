<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Formulaie du Patient</p>
    <form action="{{ route('cabinet.patient') }}" method="POST">
    @csrf

    <label>id :</label><br>
    <input type="text" name="I" required><br><br>

    <label>Nom</label><br>
    <input type="text"  name="N" required><br>

    <label>Cin</label><br>
    <input type="text"  name="C" required><br>
    <p>Contact</p>

    <label>numero de telephone </label><br>
    <input type="number"  name="A" required><br>

    <label>Email</label><br>
    <input type="text" name="E" required><br><br>

    <input type="submit" value="Envoyer">
</form>

</body>
</html>
