<?php

class DbConfig
{
    private $host;
    private $user ;
    private $pass ;
    private $db;
    public function __construct()
    {
        $this->user = "root";
        $this->host = "localhost";
        $this->pass = "";
        $this->db = "hmis";
    }
    public function connect()
    {
        $link = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        return $link;
    }
}
