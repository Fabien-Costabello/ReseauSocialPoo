<?php


class DislikeController extends Controller
{

    public function index()
    {
        session_start();
        AuthGuard::guard();
        try {
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                if (isset($_POST['dislike'])) {
                    Like::removeLikedPost($_POST['dislike'], $_SESSION['user_id']);
                    Post::dislikePOst($_POST['dislike'], $_SESSION['user_id']);
                    include_once("../views/loggedView.php");
                }
            }

        } catch (PDOException $e) {
            echo ($e->getMessage());
        }


    }
}