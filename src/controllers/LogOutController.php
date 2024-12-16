<?php


class LogOutController extends Controller
{

    public function index()
    {
        try {

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                if (isset($_POST['deconnexion'])) {
                    include_once('../views/mainView.php');
                    echo "caca";
                }
            }

        } catch (PDOException $e) {
            echo ($e->getMessage());
        }
       

    }
}