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
            $customer = $this->db->single();

            if ($customer) {
                $session = new Session();
                $session->set("mobile", $mobile);
                $session->set("nameCustomer",$customer->name);
                $session->set("idCustomer",$customer->id);

                header('Location: /');
            }
            return  "Username and Password not match";
        }
    }

}
