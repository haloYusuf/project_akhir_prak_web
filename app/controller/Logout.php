<?php

class Logout extends Controller
{
    public function index()
    {
        if (isset($_SESSION['user'])) {
            session_destroy();
            session_start();
            header('Location: ' . BASE_URL . '/login');
        } else {
            header('Location: ' . BASE_URL . '/');
        }
    }

}