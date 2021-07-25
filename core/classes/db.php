<?php

class db
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "db_penilaian-sidangta";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
}
