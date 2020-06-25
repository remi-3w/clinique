<?php

class DB
{
    public $host = "localhost";
    public $database = "clinique";
    public $username = "root";
    public $pswd = '';
    public $db;

    public function __construct($host = null, $database = null, $username = null, $pswd = null)
    {
        if ($host = null) {
            $this->host = $host;
            $this->database = $database;
            $this->username = $username;
            $this->pswd = $pswd;
        }
        try {
            $this->db = new PDO('mysql:host=' . $this->host . ';database=' . $this->database, $this->username, $this->pswd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        } catch (PDOException $e) {
            die('<h1>impossible de se log<h1>');
        }
    }
}
