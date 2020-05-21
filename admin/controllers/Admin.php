<?php
    include '../lib/Format.php';
?>

<?php

class Admin extends Controller {
    private $db;
    private $fm;
    private $admin;

    public function __construct()
    {
        $this->fm = new Format();
        $this->db = new Database();
        $this->admin = $this->model('AdminModel');
    }

    public function index()
    {
        $this->view('admin/index');
    }

    public function login()
    {
        $this->view('admin/login');
    }

    public function loginAdmin($username, $password)
    {
        $username = $this->fm->validation($username);
        $password = $this->fm->validation($password);

        if (empty($username) || empty($password)) {
            return "Username and Password must be not empty";
        } else {
            $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";

            $this->db->query($sql);
            $this->db->bind(":username",$username);
            $this->db->bind(":password",$password);
            $this->db->execute();

            if ($this->db->rowCount()>0) {
                $session = new Session();
                $session->set("username", $username);

                header('Location: /admin');
            }
            return  "Username and Password not match";

        }
    }

}