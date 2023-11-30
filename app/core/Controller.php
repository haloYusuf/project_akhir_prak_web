<?php

class Controller{
    public function view($view, $data = [])
    {
        require_once 'app/view/' . $view . '.php';
    }

    public function model($data)
    {
        require_once 'app/model/' . $data . '.php';
        return new $data;
    }
}