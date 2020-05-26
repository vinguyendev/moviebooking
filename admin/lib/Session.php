<?php

class Session {

    public function __construct()
    {
        if(session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    function set($key, $val) {
        $_SESSION[$key] = $val;
    }

    public static function get($key) {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
        return false;
    }

    public static function checkSession() {
        if (!self::get("login")) {
            self::destroy();
        }
    }

    function isLoginAdmin() {

        $username = self::get("username");

        if($username!=false) {
            $sql = "SELECT username FROM admin WHERE username = :username";

            $db = new Database();

            $db->query($sql);
            $db->bind(":username",$username);
            $db->execute();

            if ($db->rowCount()>0) {
                return true;
            }
            else {
                header("Location: /admin/login");
            }
        }

        header("Location: /admin/login");
    }

    function isLoginCustomer()
    {
        $nameCustomer = self::get("nameCustomer");

        if ($nameCustomer!=false) {
            $sql = "SELECT name FROM customers WHERE name = :name";

            $db = new Database();

            $db->query($sql);
            $db->bind(":name",$nameCustomer);
            $db->execute();

            if ($db->rowCount()>0) {
                return true;
            }
            else {
                header("Location: /default/customer/login");
            }

        }
        header("Location: /default/customer/login");
    }

    public static function destroy() {
        session_destroy();
        header("Location: /admin/login.html");
    }

}