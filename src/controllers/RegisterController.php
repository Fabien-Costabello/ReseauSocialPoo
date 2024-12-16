<?php

class RegisterController extends Controller
{

    //methode index ...
    public function index()
    {
        // ma logique d'envoi en BDD
        try {

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                if (isset($_POST['creationCompte'])) {
                    $newUser = new User($_POST['pseudo'], $_POST['mail'], $_POST['password']);
                    User::addUser($newUser);
                }
            }

        } catch (PDOException $e) {
            echo ($e->getMessage());
        }
        header('Location: /'); // redirige vers la route '/' n'oubliez pas le 
    }
}
