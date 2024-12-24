<?php



class LikeRepositories extends Db {
    private static function request(string $request){
        $result = self::getInstance()->query($request); // on recupere l'instance de la bdd, qui execute la requette.
        self::disconnect(); // je deco la bdd.
        return $result; // je retourne le resultat de ma requette
    }

    static public function addLikeDb( $id,$poster_id){
        return self::request("INSERT INTO likes (post_id,user_id) VALUES ('$id','$poster_id') ");
        
    }

    static public function checkedLikedPost( $id,$poster_id){
        return self::request("SELECT *  FROM  likes WHERE post_id='$id' AND user_id='$poster_id' ")->fetchColumn() > 0;;
        
    }

    static public function removeLikedPost( $id,$poster_id){
        return self::request("DELETE  FROM  likes WHERE post_id='$id' AND user_id='$poster_id' ")->fetchColumn() > 0;;
        
    }
}
