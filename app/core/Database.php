<?php

class Database
{

    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $name = DB_NAME;

    private $conn;
    private $query;
    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->name);
        if ($this->conn->connect_error) {
            die("Koneksi Gagal: " . $this->conn->connect_error);
        }
    }

    public function runQuery(string $s)
    {
        $this->query = mysqli_query(
            $this->conn,
            $s
        ) or die(mysqli_error($this->conn));

        return $this->query;
    }

}