<?php

class AuthGuard {
    public static function guard() {
        if (!isset($_SESSION["user_id"])) {
            header("Location: /");
            exit;
        }else{
            if (empty(User::getUserById($_SESSION["user_id"]))) {
                header("Location: /");
                exit;
            }
        }
    }
}