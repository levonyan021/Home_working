<?php


class Database
{
    protected $conn;
    public function connect()
    {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        try {
            $this->conn = new PDO(
                'mysql:host=localhost;dbname=library',
                'root',
                '',
                $options);
            return $this->conn;
        } catch(PDOException $error) {
            echo 'Fail! ' . $error->getMessage();
        }
    }
}