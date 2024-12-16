<?php



class UserRepositories extends Db {

    private static function request(string $request){
        $result = self::getInstance()->query($request); // on recupere l'instance de la bdd, qui execute la requette.
        self::disconnect(); // je deco la bdd.
        return $result; // je retourne le resultat de ma requette
    }

    static public function addUser(User $user){
        $pseudo = $user->getPseudo();
        $mail = $user->getMail();
        $password = $user->getPassword();
        
        return self::request("INSERT INTO users (pseudo, mail,password) VALUES ('$pseudo', '$mail','$password') ");

    }

    static public function getUserByEmail($mail){
        return self::request("SELECT * FROM users WHERE mail = '$mail' ")->fetch(PDO::FETCH_ASSOC);

    }
}