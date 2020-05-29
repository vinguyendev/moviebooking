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

<div class="header">
    <?php
    include ("../components/header-mini.php");
    include ("../components/header-main.php");
    ?>
</div>


<div class="my-container">
    <div class="breadcrumbs" itemprop="breadcrumb">
        <ul>
            <li class="home">
                <a href="" title="Trở về trang chủ">Trang chủ</a>
                <span>/</span>
            </li>
            <li class="category3">
                <a href="" title="">Phim</a>
                <span>/ </span>
            </li>
            <li class="category5">
                <a href="" title="">Phim Sắp Chiếu</a>
                <span>/ </span>
            </li>
        </ul>
    </div>
    <div class="main">
        <div class="main-default">


        </div>
    </div>
</div>
<form method="get">
    <input type="hidden" id="movie" name="movie">
</form>

<script>

</script>

<?php
include ('../components/footer-content.php');
include ('../components/footer.php');
?>

<?php
$movie_id = !empty($_GET['movie'])?$_GET['movie']: '';

if ($movie_id) {
    include ('../components/popup-select-theater.php');
}

?>

</body>