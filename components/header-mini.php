<?php
$session = new Session();

$mobile_cus = $session::get('mobile');
$nameCus = $session::get('nameCustomer');

?>

<div class="header-mini">
    <ul>
        <li><a href="#">tuyển dụng</a></li>
        <li><a href="#">liên hệ cgv</a></li>
        <?php
        if(!empty($nameCus)) {
            ?>
            <li><a href="/default/customer/account"><?php echo $nameCus?></a></li>
            <li><a href="/default/customer/logout">Thoát</a></li>
            <?php
            } else {
                ?>
            <li><a href="/default/customer/login">Đăng nhập/Đăng ký</a></li>
            <?php
        }
        ?>
        <li><a href="#" id="VNese">VN</a><a href="#" id="EN">EN</a></li>
    </ul>
</div>