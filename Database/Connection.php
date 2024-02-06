<?php

class Connection
{
    private $host = 'serwer2466727.home.pl';
    private $db_name = '38150510_emsi';
    private $username = '38150510_emsi';
    private $pass = '$w7sa3NMCxk';

    private $conn;

    public function connect()
    {
        try {
            $this->conn = new PDO('pgsql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $exception) {
            echo 'Problem z połączeniem' . $exception->getMessage();
        }

        return $this->conn;
    }
}
