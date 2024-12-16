<?php


class AddController extends Controller
{

    public function index()
    {
        try {

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                session_start();
                if (isset($_POST['addPost'])) {
                    $post =  new Post(0, $_SESSION['user_id'],$_POST['titre'],$_POST['contenu'],$_SESSION['pseudo'],0,0);
                   Post::createPost($post);
                    include_once("../views/loggedView.php");
                    print_r($post);
                }
            }

        } catch (PDOException $e) {
            echo ($e->getMessage());
        }


    }
}