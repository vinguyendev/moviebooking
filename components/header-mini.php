<?php
$session = new Session();

$mobile_cus = $session::get('mobile');
$nameCus = $session::get('nameCustomer');

?>

<div class="header-mini">
    <ul>
        <li><a href="#">tuyển dụng</a></li>
        <li><a href="#">liên hệ cgv</a></li>
        <li><a href="#"><?php
                if(empty($nameCus))  echo 'Đăng nhập đăng ký';
                else echo $nameCus;
                ?></a></li>
        <li><a href="#" id="VNese">VN</a><a href="#" id="EN">EN</a></li>
    </ul>
</div>