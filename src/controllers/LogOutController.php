<?php


class LogOutController extends Controller
{

    public function index()
    {AuthGuard::guard();
        try {

            if ($_SERVER['REQUEST_METHOD'] == "POST") {

                if (isset($_POST['deconnexion'])) {
                    session_start();
                    session_destroy();
                    $_SESSION = [];
                    include_once('../views/mainView.php');
                }
            }

        } catch (PDOException $e) {
            echo ($e->getMessage());
        }


    }
}