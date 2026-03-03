<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Connexion</h2>



<form method="POST" action="">
    @csrf

    <label>Email :</label>
    <input type="email" name="email" required>

    <br><br>

    <label>Mot de passe :</label>
    <input type="password" name="password" required>

    <br><br>

    <button type="submit">Se connecter</button>
</form>

</body>
</html>