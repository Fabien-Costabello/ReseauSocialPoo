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
    <h2>Vos posts :</h2>
    <?php
    $editId = $_POST['edit'] ?? null;
    foreach (Post::getAllPostById($_SESSION['user_id']) as $post): 
        $isLiked = Like::checkedLikedPost($post['id'], $_SESSION['user_id']);
        $isDisliked = Dislike::checkedDislikedPost($post['id'], $_SESSION['user_id']);
    ?>
        <article class="post" style="display: flex; flex-direction: column; border: solid;">
            <?php if ($editId == $post['id']): ?>
                <form action="/edit" method="POST">
                    <label>Titre :
                        <input type="text" name="titre" value="<?= htmlspecialchars($post['titre']) ?>">
                    </label>
                    <label>Contenu :
                        <textarea name="contenu"><?= htmlspecialchars($post['contenu']) ?></textarea>
                    </label>
                    <button type="submit" name="update" value="<?= $post['id'] ?>">Enregistrer</button>
                    <button type="submit" name="cancel">Annuler</button>
                </form>
            <?php else: ?>
                <h3>Titre : <?= htmlspecialchars($post['titre']) ?></h3>
                <h4><?= htmlspecialchars($post['contenu']) ?></h4>
                <h4>Auteur : <?= htmlspecialchars($post['auteur']) ?></h4>
                <h4>Like : <?= $post['likes'] ?></h4>
          
                <?php if ($isLiked): ?>
                    <p>Vous avez aimé ce post.</p>
                <?php else: ?>
                    <form action="/like" method="POST">
                        <button type="submit" name="like" value='<?= $post['id'] ?>'>Liker</button>
                    </form>
                <?php endif; ?>
                <?php if ($isLiked): ?>
                    <form action="/dislike" method="POST">
                        <button type="submit" name="dislike" value='<?= $post['id'] ?>'>Disliker</button>
                    </form>
                <?php else: ?>
                    
                <?php endif; ?>

                <form action="/delete" method="POST">
                    <button type="submit" name="delete" value='<?= $post['id'] ?>'>Supprimer</button>
                </form>
                <form action="/edit" method="POST">
                    <button type="submit" name="edit" value='<?= $post['id'] ?>'>Modifier</button>
                </form>
            <?php endif; ?>
        </article>
    <?php endforeach; ?>
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