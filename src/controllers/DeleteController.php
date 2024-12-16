<?php


class DeleteController extends Controller
{

    public function index()
    {
        try {

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                
                if (isset($_POST['delete'])) {
                    session_start();
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