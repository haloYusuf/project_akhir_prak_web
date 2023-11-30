<?php

class ForgotPass extends Controller
{
    private $template = ["css" => "style2.css", "title" => "Forgot Pass"];
    public function index()
    {
        if (isset($_SESSION['user'])) {
            header('Location: ' . BASE_URL . '/');
        } else {

            $this->view('template/header', $this->template);
            $this->view('login/forgotPass');
            $this->view('template/footer');
        }
    }

    public function onUpdatePass()
    {
        $result = mysqli_fetch_array($this->model('User_model')->checkAvailEmail($_POST['email']));
        if ($result != NULL) {
            $this->model('User_model')->updatePassUser($_POST['email'], $_POST['pass']);
            $result = mysqli_fetch_array($this->model('User_model')->getUser($_POST['email'], $_POST['pass']));
            $_SESSION['user'] = $_POST['email'];
            $_SESSION['user_id'] = $result['id_acc'];
            $_SESSION['access'] = $result['acc_access'];
            header('Location: ' . BASE_URL . '/');
        } else {
            header('Location: ' . BASE_URL . '/ForgotPass');
        }
        exit;
    }
}