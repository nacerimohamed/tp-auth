<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>Inscription</h2>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif

<form method="POST" action="{{ route('register') }}">
    @csrf

    <label>Nom :</label>
    <input type="text" name="name" required>

    <br><br>

    <label>Email :</label>
    <input type="email" name="email" required>

    <br><br>

    <label>Mot de passe :</label>
    <input type="password" name="password" required>

    <br><br>

    <label>Confirmer mot de passe :</label>
    <input type="password" name="password_confirmation" required>

    <br><br>

    <button type="submit">S'inscrire</button>
</form>

</body>
</html>