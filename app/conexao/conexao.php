<?php

 abstract class Conexao {
    private $servDB= 'mysql:host=localhost;dbname=unicar';
    private $user = 'root';
    private $pass = '';

    protected function connect() {
        try {
            $conn = new PDO($this->servDB, $this->user, $this->pass);
            $conn->exec("set names utf8");
            return $conn;

        } catch(PDOException $error) {
            echo $error->getMessage();
        }
    }
}
