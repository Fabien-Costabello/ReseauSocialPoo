<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Connexion/Inscription</h1>
    <section>
        <article>
            <h2>Inscription</h2>
            <form action="/register" method="POST">
                <label for="pseudo">Pseudo</label>
                <input type="text" id="pseudo" name="pseudo">
                <label for="mail">Mail</label>
                <input type="text" id="mail" name="mail">
                <label for="mail">Password</label>
                <input type="text" id="password" name="password">
                <button type="submit" name="creationCompte">Création du compte</button>
            </form>
        </article>
        <h2>Connexion</h2>
        <form action="/login" method="POST">
            <label for="mail">Mail</label>
            <input type="text" id="mail" name="mail">
            <label for="mail">Password</label>
            <input type="text" id="password" name="password">
            <button type="submit" name="login">Connexion
            </button>
        </form>
    </section>
</body>

</html>