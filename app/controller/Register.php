<?php

class Register extends Controller
{
    private $template = ["css" => "style2.css", "title" => "Register"];
    public function index()
    {
        if (isset($_SESSION['user'])) {
            header('Location: ' . BASE_URL . '/');
        } else {
            $this->view('template/header', $this->template);
            $this->view('login/register');
        }
    }

    public function onRegist()
    {
        $result = mysqli_fetch_array($this->model('User_model')->checkAvailEmail($_POST['email']));
        if ($result == NULL) {
            $this->model('User_model')->createUser($_POST['email'], $_POST['pass']);
            $result = mysqli_fetch_array($this->model('User_model')->getUser($_POST['email'], $_POST['pass']));
            $_SESSION['user'] = $_POST['email'];
            $_SESSION['user_id'] = $result['id_acc'];
            $_SESSION['access'] = 0;
            header('Location: ' . BASE_URL . '/');
        } else {
            header('Location: ' . BASE_URL . '/register');
        }
        exit;
    }
}