<?php


class DeleteController extends Controller
{

    public function index()
    {session_start();
        AuthGuard::guard();
        try {

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                
                if (isset($_POST['delete'])) {
                 
                    $post = Post::getPostById($_POST['delete']);
                    $newPost = new Post($post['id'],$post['poster_id'],$post['titre'],$post['contenu'],$post['auteur'],$post['likes'],$post['dislikes']);
                    Post::deletePost($newPost);
include_once("../views/loggedView.php");   
                }
            }

        } catch (PDOException $e) {
            echo ($e->getMessage());
        }


    }
}