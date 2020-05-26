<!doctype html>
<html lang="en">
<head>
    <?php
        include ("./components/header.php");
    ?>
</head>
<?php
    require ('./config/config.php');
    require ('./admin/lib/Database.php');
    require ('./admin/lib/Session.php');

    $db = new Database();


    $db->query("SELECT * FROM movies");

    $movies = $db->resultSet();

?>

<body>
<!--TODO:   HEADER + 2 fixed BANNER-->
<div class="header">
    <?php
        include ("./components/header-mini.php");
        include ("./components/header-main.php");
    ?>
</div>

<!--TODO:   CONTAINER -->
<div class="my-container">
    <div class="widget">
        <p></p><p></p>
        <ul>
            <!-- Tổ hợp phím Shift-Alt -->
            <li id="widget-1"><a href="#" class="widget-full"></a></li>
            <li id="widget-2"><a href="#" class="widget-full"></a></li>
            <li id="widget-3"><a href="#" class="widget-full"></a></li>
            <li id="widget-4"><a href="#" class="widget-full"></a></li>
            <li id="widget-5"><a href="#" class="widget-full"></a></li>
            <li id="widget-6"><a href="#" class="widget-full"></a></li>
            <li id="widget-7"><a href="#" class="widget-full"></a></li>
        </ul>
        <p></p>
    </div>
    <div class="slide">
        <div class="slide-quang-cao parent">
            <div class="menu-ne">
                <ul class="slide-container">
                    <li id="lastClone"><a href="#"><img src="./public/assets/slide5.jpg" alt=""></a></li>
                    <li><a href="#"><img src="./public/assets/silde1.jpg" alt=""></a></li>
                    <li><a href="#"><img src="./public/assets/silde2.jpg" alt=""></a></li>
                    <li><a href="#"><img src="./public/assets/slide3.jpg" alt=""></a></li>
                    <li><a href="#"><img src="./public/assets/slide4.jpg" alt=""></a></li>
                    <li><a href="#"><img src="./public/assets/slide5.jpg" alt=""></a></li>
                    <li id="firstClone"><a href="#"><img src="./public/assets/silde1.jpg" alt=""></a></li>

                </ul>
            </div>
            <button class="next child-abs hover-effect" onclick="next()"><i id="next-slide" class='fas fa-chevron-right' style='font-size:48px; color :rgb(230, 230, 230)'></i></button>
            <button class="prev child-abs hover-effect"><i id="prev-slide" class='fas fa-chevron-left' style='font-size:48px; color:rgb(231, 231, 231)'></i></button>
        </div>
    </div>

    <div class="home-movie-selector">
        <div class="home-title">
            <img src="./public/assets/h3_movie_selection.gif" alt="">
        </div>
    </div>

    <div class="container-movie">
        <div class="justify-content-element parent">
            <div class="menu-movie" ng-controller="tablePhim">
                <ul class="slide-movie">
                    <?php
                        foreach ($movies as $movie) {
                            ?>
                            <li class="parent poster-movie" ng-repeat="item in listMovie">
                                <div class="poster-movie parent hover-effect">
                                    <div class="rating-P child-abs"></div>
                                    <img src="public/uploads/<?php echo $movie->image?>" alt="" class="poster-off-movie">
                                </div>
                                <div class="infor-buyticket child-abs hover-effect movie-banner">
                                    <div class="infor-movie">
                                        <div class="name-movie"><?php echo $movie->name?></div>
                                        <div class="gr-button">
                                            <a href="/default/<?php echo $movie->slug?>" class="xem-chi-tiet">Xem chi tiết</a>
                                            <a href="#" class="buy-ticket" onclick="selectMovie(<?php echo $movie->id?>)">
                                                <span class="icon-call"></span>
                                                Mua vé
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php
                        }
                    ?>
                </ul>
            </div>
            <div  id="next-movie" class="child-abs next" onclick="next_movie()"></div>
            <div  id="prev-movie" class="child-abs prev" onclick="prev_movie()"></div>
        </div>
    </div>

    <div class="home-movie-selector">
        <div class="home-title">
            <img src="./public/assets/h3_event.gif" alt="">
        </div>
    </div>

    <div class="quang-cao">
        <div class="parent">
            <div class="content-quang-cao">
                <ul class="abv-content">
                    <li><img src="./public/assets/captainmarvel_combo_240x201.jpg" alt=""></li>
                    <li><img src="./public/assets/web_240x201_13.jpg" alt=""></li>
                    <li><img src="./public/assets/gudetama2_240-x-201.jpg" alt=""></li>
                    <li><img src="./public/assets/sjora_240x201.jpg" alt=""></li>
                    <li><img src="./public/assets/waffle_240-x-201.jpg" alt=""></li>
                </ul>
                <div id="prev-adv" class="child-abs prev" onclick="prev_abv()"></div>
                <div id="next-adv" class="child-abs next" onclick="next_abv()"></div>
            </div>
        </div>
    </div>
</div>
<form method="get">
    <input type="hidden" id="movie" name="movie">
</form>

<?php
    include ('./components/footer-content.php');
    include ('./components/footer.php');
?>

<script>
    function selectMovie(movie) {
        $('#movie').val(movie);
        $('form').submit();
    }
</script>

<?php
    $movie_id = !empty($_GET['movie'])?$_GET['movie']: '';

    if ($movie_id) {
        include ('./components/popup-select-theater.php');
    }

?>

</body>
</html>