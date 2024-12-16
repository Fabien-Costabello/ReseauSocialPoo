<?php



class PostRepositories extends Db {

    private static function request(string $request){
        $result = self::getInstance()->query($request); // on recupere l'instance de la bdd, qui execute la requette.
        self::disconnect(); // je deco la bdd.
        return $result; // je retourne le resultat de ma requette
    }

    static public function getAllPostById($id){

        return self::request("SELECT * FROM post WHERE poster_id =$id ")->fetchAll(PDO::FETCH_ASSOC);

    }

    static public function getPostById($id){

        return self::request("SELECT * FROM post WHERE $id =$id ")->fetch(PDO::FETCH_ASSOC);

    }

    static public function deletePost(Post $post){

        return self::request("DELETE FROM post WHERE id =".$post->getId());

    }

    static public function createPost(Post $post)
    {
        $poster_id = $post->getPosterId();
        $titre = $post->getTitre();
        $contenu = $post->getContenu();
        $auteur = $post->getAuteur();
    
        return self::request("INSERT INTO post(poster_id, titre, contenu, auteur) VALUES ($poster_id, '$titre', '$contenu', '$auteur')");
    }
    
}