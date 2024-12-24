<?php


class LikeController extends Controller
{

    public function index()
    {session_start();
        AuthGuard::guard();
        try {

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                if (isset($_POST['like']) && Dislike::checkedDislikedPost($_POST['like'],$_SESSION['user_id'])) { 
                    Post::likePOst($_POST['like'],$_SESSION['user_id']);
                    Like::addLikeDb($_POST['like'],$_SESSION['user_id']);
                    include_once("../views/loggedView.php");
                    echo "kouloukoukou stash stash";
                }
            }

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                if (isset($_POST['like'])) { 
                    Post::likePOst($_POST['like'],$_SESSION['user_id']);
                    Like::addLikeDb($_POST['like'],$_SESSION['user_id']);
                    include_once("../views/loggedView.php");
                    echo $_POST['like'];
                }
            }

        } catch (PDOException $e) {
            echo ($e->getMessage());
        }


    }
}