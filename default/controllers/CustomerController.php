<?php
require_once('../helpers/slug.php');
include '../lib/Format.php';
?>

<?php

class CustomerController extends DefaultController
{
    private $customer;
    private $fm;
    private $db;

    public function __construct()
    {
        $this->fm = new Format();
        $this->db = new Database();
        $this->customer = $this->model('CustomerModel');
    }

    public function login()
    {
        $this->view('customers/login');
    }

    public function logout()
    {

        $this->view('customers/logout');
    }

    public function account()
    {
        $this->view('customers/account');
    }

    public function loginCustomer($mobile, $password)
    {
        $mobile = $this->fm->validation($mobile);
        $password = $this->fm->validation($password);

        if (empty($mobile) || empty($password)) {
            return "Mobile and Password must be not empty";
        } else {
            $sql = "SELECT * FROM customers WHERE mobile = :mobile AND password = :password";

            $this->db->query($sql);
            $this->db->bind(":mobile",$mobile);
            $this->db->bind(":password",$password);
            $this->db->execute();

            if ($this->db->rowCount()>0) {
                $session = new Session();
                $session->set("mobile", $mobile);
                $session->set("nameCustomer",$this->db->resultSet()[0]->name);

                header('Location: /');
            }
            return  "Username and Password not match";
        }
    }

}
