<?php

class Database {
    public  $conn = null;
    public  $_results = null;

    public function __construct(){
        $this->dbConnect();
    }

    function __destruct(){
        $this->conn->close();
    }

    public function dbConnect(){
        @$this->conn = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PW, MYSQL_DB);
        if($this->conn->connect_errno){
            $this->dbInstall();
        }
    }

    function sqlExec($sql)	{
        $this->_results = $this->_con->query($sql);
    }


    private function dbInstall() {
        $this->conn = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PW);

        $sql = "DROP DATABASE ". MYSQL_DB;
        $this->conn->query($sql);

        $sql = "CREATE DATABASE ".MYSQL_DB;
        $this->conn->query($sql);
        $this->conn->select_db(MYSQL_DB);

        $sql = "CREATE TABLE IF NOT EXISTS Admin (
            id int NOT NULL AUTO_INCREMENT,
            username VARCHAR(255),
            password VARCHAR(255),
            PRIMARY KEY (`id`)
        )";

        $this->conn->query($sql);
    }

}