<?php

class User_model
{
    private $table = 'akun';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser($user, $pass)
    {
        return $this->db->runQuery("SELECT * FROM $this->table WHERE acc_email = '$user' && acc_pass = '$pass'");
    }

    public function checkAvailEmail($user)
    {
        return $this->db->runQuery("SELECT * FROM $this->table WHERE acc_email = '$user'");
    }

    public function createUser($user, $pass)
    {
        $this->db->runQuery("INSERT INTO $this->table (acc_email, acc_pass, acc_access) VALUES ('$user', '$pass', 0)");
    }

    public function updatePassUser($user, $pass)
    {
        $this->db->runQuery("UPDATE $this->table set acc_pass = '$pass' WHERE acc_email = '$user'");
    }
}