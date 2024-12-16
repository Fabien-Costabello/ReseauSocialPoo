<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <h2>Home</h2>
        Bonjour vous êtes connecté en tant que <?php echo $_SESSION['pseudo'] ?><br>
        <form action="/logOut" method="POST">
            <button type="submit" name="deconnexion">Déconnexion</button>
        </form>
    </section>

    <section>
        <h2>Vos posts : </h2>
        <?php foreach (Post::getAllPostById($_SESSION['user_id']) as $post): ?>
            <article class=post style="display:flex;flex-direction: column;border:solid;">
                <h3>Titre :<?= $post['titre'] ?></h3>
                <h4><?= $post['contenu'] ?></h4>
                <h4>Auteur <?= $post['auteur'] ?></h4>
                <h4>Like : <?= $post['likes'] ?></h4>
                <h4>Dislikes : <?= $post['dislikes'] ?></h4>
                <form action="/delete" method="POST">
                    <button type="submit" name="delete" value='<?= $post['id'] ?>'>Supprimer</button>
                </form>
            </article>
        <?php endforeach ?>
    </section>
    
    <section>
        <h2>Créer un post : </h2>
        <form action="/add" method="POST">
        <label for="titre">Titre</label>
        <input type="text" id="titre" name="titre">
        <label for="contenu">Contenu</label>
        <textarea id="contenu" name="contenu"> </textarea>
        <button type="submit" name="addPost">Créer le post</button>
    </form>
    </section>

</body>

</html>