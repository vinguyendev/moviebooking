<?php
    include ("../config/db.php");

    $admin = $_SESSION['admin'];

    $ses_sql = mysqli_query($db,"SELECT username from admin where username = '$admin' ");

    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

    $login_session = $row['username'];

    if(!isset($_SESSION['admin'])){
        header("Location: /admin/login.html");
        die();
    }

