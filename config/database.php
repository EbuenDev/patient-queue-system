<?php

class Database
{
    private $host = "localhost";
    private $dbname = "patient_queue_db";
    private $username = "root";
    private $password = "";

    public function connect()
    {
        try {
            return new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4",
                $this->username,
                $this->password
            );
        } catch (PDOException $e) {
            die("Database Connection Failed: " . $e->getMessage());
        }
    }
}