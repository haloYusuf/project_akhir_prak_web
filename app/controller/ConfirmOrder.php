<?php

class ConfirmOrder extends Controller
{
    private $template = ["css" => "style.css", "title" => "Confirmation"];
    public function index()
    {
        if (isset($_SESSION['access']) && $_SESSION['access'] == 1) {
            $data = $this->model('Order_model')->getAllPemesanan();
            $this->view('template/header', $this->template);
            $this->view('confirmOrder/index', $data);
            $this->view('template/footer');
        } else {
            header('Location: ' . BASE_URL . '/');
        }
    }

    public function confirm($id)
    {
        if (isset($_SESSION['access']) && $_SESSION['access'] == 1) {
            $this->model('Order_model')->confirmPemesanan($id);
            header('Location: ' . BASE_URL . '/confirmorder');
        } else {
            header('Location: ' . BASE_URL . '/menu');
        }
    }

    public function cancel($id)
    {
        if (isset($_SESSION['access']) && $_SESSION['access'] == 1) {
            $this->model('Order_model')->cancelPemesanan($id);
            header('Location: ' . BASE_URL . '/confirmorder');
        } else {
            header('Location: ' . BASE_URL . '/menu');
        }
    }
}