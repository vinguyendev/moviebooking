<?php

include_once("../config/config.php");

class Database {
    public  $conn = null;
    public  $_results = null;

    public $host = DB_HOST;
    public $user = DB_USER;
    public $pass = DB_PASS;
    public $dbname = DB_NAME;

    public $link;
    public $error;

    public function __construct(){
        $this->connectDB();
    }

    public function connectDB() {
        $this->link = new mysqli($this->host,$this->user,$this->pass, $this->dbname);

        if(!$this->link) {
            $this->error = "Connection fail".$this->link->connect_error;
            return false;
        }

    }

    public function select($query) {
        $result = $this->link->query($query);

        if($result->num_rows>0) {
            return $result;
        }
        else {
            return false;
        }
    }

    public function update($query) {
        $update_row = $this->link->query($query) or die($this->link->error.__LINE__);

        if($update_row) {
            return $update_row;
        }
        else {
            return false;
        }
    }

    public function delete($query) {
        $delete_row = $this->link->query($query) or die($this->link->error.__LINE__);

        if($delete_row) {
            return $delete_row;
        }
        else {
            return false;
        }
    }


    public function dbConnect(){
        @$this->conn = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PW, MYSQL_DB);
        if($this->conn->connect_errno){
            $this->dbInstall();
        }
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