<?php

class Login extends Controller
{
    private $template = ["css" => "style2.css", "title" => "Login"];
    public function index()
    {
        if (isset($_SESSION['user'])) {
            header('Location: ' . BASE_URL . '/');
        } else {
            $this->view('template/header', $this->template);
            $this->view('login/index');
            $this->view('template/footer');
        }
    }

    public function onLogin()
    {
        $result = mysqli_fetch_array($this->model('User_model')->getUser($_POST['email'], $_POST['pass']));
        if ($result != NULL) {
            $_SESSION['user'] = $_POST['email'];
            $_SESSION['user_id'] = $result['id_acc'];
            $_SESSION['access'] = $result['acc_access'];
            header('Location: ' . BASE_URL . '/');
        } else {
            header('Location: ' . BASE_URL . '/login');
        }
        exit;
    }
}