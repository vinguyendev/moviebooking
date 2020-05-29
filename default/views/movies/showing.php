<?php
/** @var TYPE_NAME $data */
/** @var TYPE_NAME $movies */
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
                <a href="" title="">Phim Đang Chiếu</a>
                <span>/ </span>
            </li>
        </ul>
    </div>
    <div class="main">
        <div class="main-default">
            <div class="header-movie">
                <h3>Phim đang chiếu</h3>
                <h5><a href="/default/movies/coming">Phim sắp chiếu</a></h5>
            </div>
            <hr>
            <div class="list-movies">
                <?php
                    foreach ($data as $movie) {
                ?>
                        <div class="movie-item">
                            <div class="product-image">
                                <a href="">
                                    <img src="/public/uploads/<?php echo $movie->image?>" alt="">
                                </a>
                            </div>
                            <div class="product-info">
                                <h2>
                                    <a href=""><?php echo $movie->name?></a>
                                </h2>
                                <div class="movie-info">
                                    <span class="movie-info-bold">Thể loại: </span>
                                    <span class="movie-info-normal"><?php echo $movie->categories?></span>
                                </div>
                                <div class="movie-info">
                                    <span class="movie-info-bold">Thời lượng: </span>
                                    <span class="movie-info-normal"><?php echo $movie->duration?></span>
                                </div>

                                <div class="movie-info">
                                    <span class="movie-info-bold">Khởi chiếu: </span>
                                    <span class="movie-info-normal"><?php echo $movie->premiere?></span>
                                </div>

                                <div class="movie-link">
                                    <div class="fb-like fb_iframe_widget"
                                         data-href=""
                                         data-layout="button_count"
                                         data-action="like"
                                         data-show-faces="true"
                                         data-share="false"
                                         fb-xfbml-state="rendered"
                                         fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=92&amp;href=https%3A%2F%2Fwww.cgv.vn%2Fdefault%2Ftruyen-thuyet-quan-tien.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=true">
                                <span style="vertical-align: bottom; width: 75px; height: 20px;">
                                    <iframe name="f149e8edaea63" width="1000px" height="1000px" data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.0/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D46%23cb%3Df18b26b68591bfc%26domain%3Dwww.cgv.vn%26origin%3Dhttps%253A%252F%252Fwww.cgv.vn%252Ff2f2ccb54369d98%26relation%3Dparent.parent&amp;container_width=92&amp;href=https%3A%2F%2Fwww.cgv.vn%2Fdefault%2Ftruyen-thuyet-quan-tien.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=true" style="border: none; visibility: visible; width: 75px; height: 20px;" class=""></iframe>
                                </span>
                                    </div>
                                    <button type="button" title="Mua vé" onclick="selectMovie(<?php echo $movie->id?>)" class="button btn-booking btn-book">
                                        <span>Mua vé</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                ?>

            </div>
        </div>
    </div>
</div>
<form method="get">
    <input type="hidden" id="movie" name="movie">
</form>

<script>
    function selectMovie(movie) {
        $('#movie').val(movie);
        $('form').submit();
    }
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