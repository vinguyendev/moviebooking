<?php
    include '../lib/session.php';
    include '../lib/database.php';
    include '../helpers/format.php';
?>

<?php

class Admin {
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function login($username, $password)
    {
        $username = $this->fm->validation($username);
        $password = $this->fm->validation($password);

        $username = mysqli_real_escape_string($this->db->link, $username);
        $password = mysqli_real_escape_string($this->db->link, $password);

        if (empty($username) || empty($password)) {
            return "Username and Password must be not empty";
        } else {
            $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

            $result = $this->db->select($query);

            if ($result!=false) {
                $value = $result->fetch_assoc();
                $session = new Session();
                $session->set("username", $value['username']);

                header('Location: /admin');
            } else {
                return "Username and Password not match";
            }

        }
    }

}