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

    public static function isLoginAdmin() {
        $username = self::get("username");

        if($username!=false) {
            $sql = "SELECT username from admin where username = '$username'";

            include_once "../lib/database.php";

            $db = new Database();

            $result = $db->select($sql);

            if ($result!=false) {
                return false;
            }
        }
        header("Location: /admin/login.php");
    }

    public static function destroy() {
        session_destroy();
        header("Location: /admin/login.php");
    }

}