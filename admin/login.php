<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <title>Movie Booking</title>
</head>

<?php
    include ('controllers/Admin.php');
?>

<?php

    $admin = new Admin();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username =$_POST['username'];
        $password =$_POST['password'];

        $login = $admin->loginAdmin($username, $password);

    }

?>

<body class="bg-dark">

    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header text-center">
                <h3>Login</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div style="margin-bottom: 15px">
                        <span style="color: red;font-size: 15px;margin-bottom: 10px">
                            <?php
                            if (isset($login)) {
                                echo '* '.$login;
                            }
                            ?>
                        </span>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
