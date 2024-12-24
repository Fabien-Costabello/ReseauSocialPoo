<?php



class DislikesRepositories extends Db {
    private static function request(string $request){
        $result = self::getInstance()->query($request); // on recupere l'instance de la bdd, qui execute la requette.
        self::disconnect(); // je deco la bdd.
        return $result; // je retourne le resultat de ma requette
    }

    static public function addDislikeDb( $id,$poster_id){
        return self::request("INSERT INTO dislikes (post_id,user_id) VALUES ('$id','$poster_id') ");
        
    }

    static public function removeDislikeDb( $id,$poster_id){
        return self::request("DELETE FROM dislikes WHERE post_id='$id' AND user_id='$poster_id'");
        
    }

    static public function checkedDislikedPost( $id,$poster_id){
        return self::request("SELECT * FROM  dislikes WHERE post_id='$id' AND user_id='$poster_id' ")->fetchColumn() > 0;;
        
    }
}
