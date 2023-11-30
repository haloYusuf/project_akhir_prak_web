<?php

class History extends Controller
{
    private $template = ["css" => "style.css", "title" => "History"];
    public function index()
    {
        if (isset($_SESSION['access']) && $_SESSION['access'] != 1) {
            $id = $_SESSION['user_id'];
            $data = $this->model('Order_model')->getHistoryPemesanan($id);
            $this->view('template/header', $this->template);
            $this->view('history/index', $data);
            $this->view('template/footer');
        } else {
            header('Location: ' . BASE_URL . '/');
        }
    }
}