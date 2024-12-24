<?php


class EditController extends Controller
{

    public function index()
    
    {session_start();
        AuthGuard::guard();
        try {

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                
                if (isset($_POST['edit'])) {
                    include_once("../views/loggedView.php");
            
                    
                }
            }  if  (isset($_POST['update'])){
                $post = Post::getPostById($_POST['update']);
                $newPost = new Post($post['id'],$post['poster_id'],$_POST['titre'],$_POST['contenu'],$post['auteur'],$post['likes'],$post['dislikes']);
                Post::editPost($newPost);
                include_once("../views/loggedView.php");
                print_r($newPost);
            } if  (isset($_POST['cancel'])){
                include_once("../views/loggedView.php");

            }

        } catch (PDOException $e) {
            echo ($e->getMessage());
        }


    }
}