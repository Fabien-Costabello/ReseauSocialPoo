<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
<h2>Home</h2>
Bonjour vous êtes connecté en tant que   <?php echo $user['pseudo']   ?><br>

<form action="/logOut" method="POST">
<button type="submit" name="deconnexion">Déconnexion</button>

</form>
    </section>
    
</body>
</html>