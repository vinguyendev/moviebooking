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
                <a href="/default/movies/showing" title="">Phim Đang Chiếu</a>
                <span>/ </span>
            </li>
            <li class="product">
                <strong><?php echo $data->name ?></strong>
            </li>
        </ul>
    </div>
    <div class="main">
        <div class="main-default">
            <div class="product-view">
                <div class="product-essential">
                    <div class="page-title product-view">
                        <span>Nội Dung Phim</span>
                    </div>

                    <hr>

                    <div class="content-movie">
                        <div class="product-img-box">
                            <div class="product-image product-image-zoom zoom-available">
                                <div class="product-image-gallery">
                                    <img id="image-main" class="gallery-image visible" src="../public/uploads/<?php echo $data->image ?>" alt="TRUYỀN THUYẾT VỀ QUÁN TIÊN" title="TRUYỀN THUYẾT VỀ QUÁN TIÊN">
                                </div>
                            </div>

                        </div>

                        <div class="product-shop">
                            <div class="product-name">
                                <span class="h1"><?php echo $data->name ?></span>
                            </div>

                            <hr>

                            <!-- Build test -->
                            <div class="movie-director movie-info">
                                <label>Đạo diễn: </label>
                                <div class="std">&nbsp; <?php echo $data->directors ?></div>
                            </div>
                            <div class="movie-actress movie-info">
                                <label>Diễn viên:</label>
                                <div class="std">&nbsp; <?php echo $data->casts ?></div>
                            </div>
                            <div class="movie-genre movie-info">
                                <label>Thể loại: </label>
                                <div class="std">&nbsp; <?php echo $data->categories ?></div>
                            </div>
                            <div class="movie-release movie-info">
                                <label>Khởi chiếu: </label>
                                <div class="std">&nbsp; <?php echo $data->premiere ?></div>
                            </div>
                            <div class="movie-actress movie-info">
                                <label>Thời lượng: </label>
                                <div class="std">&nbsp; <?php echo $data->duration ?></div>
                            </div>
                            <div class="movie-language movie-info">
                                <label>Ngôn ngữ: </label>
                                <div class="std">&nbsp; <?php echo $data->language ?></div>
                            </div>
                            <div class="movie-rating movie-info">
                                <label>Rated: </label>
                                <div class="std">&nbsp; <?php echo $data->rated ?></div>
                            </div>

                            <div class="movie-technology-icons movie-info">
                                <span class="movie-rating-detail c18">Rated : C18</span>

                                <a href="javascript:void(0)" class="movie-detail-icon-type" title="Starium">
                                    <span class="movie-detail-type-starium">Starium</span>
                                </a>
                            </div>

                            <div class="movie-detail-fb-booking movie-info">
                                <div class="fb-like fb_iframe_widget" data-href="" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=92&amp;href=https%3A%2F%2Fwww.cgv.vn%2Fdefault%2Ftruyen-thuyet-quan-tien.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=true"><span style="vertical-align: bottom; width: 75px; height: 20px;"><iframe name="f149e8edaea63" width="1000px" height="1000px" data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.0/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D46%23cb%3Df18b26b68591bfc%26domain%3Dwww.cgv.vn%26origin%3Dhttps%253A%252F%252Fwww.cgv.vn%252Ff2f2ccb54369d98%26relation%3Dparent.parent&amp;container_width=92&amp;href=https%3A%2F%2Fwww.cgv.vn%2Fdefault%2Ftruyen-thuyet-quan-tien.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=true" style="border: none; visibility: visible; width: 75px; height: 20px;" class=""></iframe></span></div>

                                <button type="button" title="Mua vé" onclick="selectMovie(<?php echo $data->id?>)" class="button btn-booking btn-book">
                                    <span>Mua vé</span>
                                </button>
                            </div>

                        </div>
                    </div>

                    <div class="clearer"></div>
                </div>

                <div class="product-collateral toggle-content tabs tabs-format-cgv">
                    <ul class="toggle-tabs">

                        <li class="toggle-tabs-left" onclick="changeTabDefault(1)">
                            <div id="toggle-tabs-left" class="toggle-current toggle-current-active"></div>
                            <span>Chi tiết</span>
                        </li>
                        <li class="toggle-tabs-right" onclick="changeTabDefault(2)">
                            <div id="toggle-tabs-right" class="toggle-current "></div>
                            <span>Trailer</span>
                        </li>
                        <script>
                            function changeTabDefault(index) {
                                if(index==1) {
                                    $('#toggle-tabs-left').addClass('toggle-current-active');
                                    $('#toggle-tabs-right').removeClass('toggle-current-active');
                                    $('#tabs-left').addClass('toggle-tabs-detail-active');
                                    $('#tabs-right').removeClass('toggle-tabs-detail-active');
                                }
                                else  {
                                    $('#toggle-tabs-right').addClass('toggle-current-active');
                                    $('#toggle-tabs-left').removeClass('toggle-current-active');
                                    $('#tabs-left').removeClass('toggle-tabs-detail-active');
                                    $('#tabs-right').addClass('toggle-tabs-detail-active');
                                }
                            }
                        </script>
                    </ul>
                    <div>
                        <div id="tabs-left" class="toggle-tabs-detail toggle-tabs-detail-active">
                            <p>
                                <?php echo $data->description ?>
                            </p>
                        </div>
                        <div id="tabs-right" class="toggle-tabs-detail">
                            <iframe width="560" height="315" src="<?php echo $data->media ?>" frameborder="0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>

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