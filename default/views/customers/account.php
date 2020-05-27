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

</div>

<?php
include ('../components/footer-content.php');
include ('../components/footer.php');
?>

</body>