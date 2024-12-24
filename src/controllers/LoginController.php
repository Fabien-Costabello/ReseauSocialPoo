<?php


class LoginController extends Controller
{

    public function index()
    {
        try {

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                if (isset($_POST['login'])) {
                    $mail = $_POST['mail'];
                    $password = $_POST['password'];
                    if(UserRepositories::getUserByEmail($mail)){
                    $user = UserRepositories::getUserByEmail($mail);
                    $newUser = new User( $user['pseudo'], $user['mail'], $user['password']);
                    if ($user && $newUser->getPassword() == $password) {
                        session_start();
                        $_SESSION['user_id'] = $user['ID'];
                        $_SESSION['pseudo'] = $newUser->getPseudo();
                        
                        include_once("../views/loggedView.php");
                    } }else {
                        include_once("../views/mainView.php");
                        echo "password ou mail incorrect";
                    }

                }
            }

        } catch (PDOException $e) {
            echo ($e->getMessage());
        }
       

    }
}