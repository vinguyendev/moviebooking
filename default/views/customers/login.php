<?php
/** @var TYPE_NAME $data */
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    include ("../components/header.php");
    ?>
    <link rel="stylesheet" href="../public/css/style-default.css">
</head>
<body>

<?php
    $customer = new CustomerController();

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $login = $customer->loginCustomer($mobile, $password);
    }
?>

<div class="header">
    <?php
    include ("../components/header-mini.php");
    include ("../components/header-main.php");
    ?>
</div>

<div style="margin-top: 50px">
    <div class="container" style="width: 500px;margin: auto">
        <h1 style="text-align: center">Đăng nhập</h1>
        <br><br>
        <form action="/default/customer/login" method="POST" enctype="multipart/form-data" >

            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Số điện thoại</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="mobile">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Mật khẩu</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" name="password">
                </div>
            </div>

            <p>Bạn chưa có tài khoản? <a href="/default/customer/register">Đăng ký</a></p>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label"></label>
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
include ('../components/footer-content.php');
include ('../components/footer.php');
?>

</body>