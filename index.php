<!doctype html>
<html lang="en">
<head>
    <?php
        include ("./components/header.php");
    ?>
</head>
<body>
<!--TODO:   HEADER + 2 fixed BANNER-->
<div class="header">
    <div class="header-mini">
        <ul>
            <li><a href="#">tuyển dụng</a></li>
            <li><a href="#">liên hệ cgv</a></li>
            <li><a href="#">đănng nhập/đăng ký</a></li>
            <li><a href="#" id="VNese">VN</a><a href="#" id="EN">EN</a></li>
        </ul>
    </div>
    <div class="header-main">
        <div class="menu-header">
            <ul class="parent">
                <li>
                    <a href="#" class="logo"><img src="./public/assets/cgvlogo.png" alt=""></a>
                </li>
                <li id="mini-menu1" class="hover-effect">
                    <ul id="child-menu1" class="child-menu">
                        <li><a href="#" class="hover-red">Phim đang chiếu</a></li>
                        <li><a href="#" class="hover-red">Phim sắp chiếu</a></li>
                    </ul>
                    phim
                </li>
                <li id="mini-menu2" class="hover-effect">
                    <ul class="child-menu"  id="child-menu2">
                        <li><a href="#" class="hover-red">Tất cả các rạp</a></li>
                        <li><a href="#" class="hover-red">Rạp đặc biệt</a></li>
                        <li><a href="#" class="hover-red">Rạp sắp mở </a></li>
                    </ul>rạp cgv
                </li>
                <li id="mini-menu3" class="hover-effect">
                    <ul class="child-menu"  id="child-menu3">
                        <li><a href="#" class="hover-red">Tài khoản CGV </a></li>
                        <li><a href="#" class="hover-red">Quyền lợi</a></li>
                    </ul>
                    thành viên
                </li>
                <li id="mini-menu4" class="hover-effect">
                    <ul class="child-menu"  id="child-menu4">
                        <li><a href="#" class="hover-red">Quầy online</li>
                        <li><a href="#" class="hover-red">Sự kiện & Vé nhóm</a></li>
                        <li><a href="#" class="hover-red">E-CGV</a></li>
                        <li><a href="#" class="hover-red">CGV Restaurant</a></li>
                        <li><a href="#" class="hover-red">Thẻ quà tặng</a></li>
                    </ul>
                    cultureplex
                </li>
            </ul>
            <div class="search-buy-infor">
                <div class="quick-choose">
                    <div class="search">
                        <i class="fa fa-search"></i>
                        <input type="text" placeholder="Tìm kiếm">
                    </div>
                    <a href="#" class="tin-tuc"><img src="./public/assets/tin-moi-uu-dai.gif" alt=""></a>
                </div>
                <a href="#" class="mua-ve"><img src="./public/assets/mua-ve_ngay.png" alt=""></a>
            </div>
        </div>
    </div>
    <div class="banner">
        <div class="banner-left">
            <a href="#" class="banner-left"><img src="./public/assets/baner-left-vn.jpg" alt=""></a>
        </div>
        <div class="banner-right">
            <a href="#"><img src="./public/assets/en-banner-right-1.png" alt=""></a>
            <a href="#"><img src="./public/assets/en-banner-right-2.png" alt=""></a>
            <a href="#"><img src="./public/assets/vn-banner-right-3.png" alt=""></a>
            <a href="#"><img src="./public/assets/vn-banner-right-4.png" alt=""></a>
        </div>
    </div>
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
                    <li class="parent poster-movie" ng-repeat="item in listMovie">
                        <div class="poster-movie parent hover-effect">
                            <div class="rating-P child-abs"></div>
                            <img src="https://www.cgv.vn/media/catalog/product/cache/1/small_image/240x388/dd828b13b1cb77667d034d5f59a82eb6/b/_/b_ho_ng_n_i_d_i_cgv_1.jpg" alt="" class="poster-off-movie">
                        </div>
                        <div class="infor-buyticket child-abs hover-effect movie-banner">
                            <div class="infor-movie">
                                <div class="name-movie">Bà hoàng nói dối</div>
                                <div class="gr-button">
                                    <a href="#" class="xem-chi-tiet">Xem chi tiết</a>
                                    <a href="#" class="buy-ticket">
                                        <span class="icon-call"></span>
                                        Mua vé
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>


               <ul class="slide-movie">


                        <li class="parent" id="poster-movie-1">
                            <div class="poster-movie parent hover-effect">
                                <div class="rating-P child-abs"></div>
                                <img src="./public/assets/240_10_27.jpg" alt="" class="poster-off-movie">
                            </div>
                            <div class="infor-buyticket child-abs hover-effect" id="movie-1">
                                <div class="infor-movie">
                                    <div class="name-movie">Captain Marvel</div>
                                    <div class="gr-button">
                                        <a href="#" class="xem-chi-tiet">Xem chi tiết</a>
                                        <a href="#" class="buy-ticket">
                                            <span class="icon-call"></span>
                                            Mua vé
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="parent" id="poster-movie-2">
                                <div class="poster-movie parent hover-effect">
                                    <div class="rating-13 child-abs"></div>
                                    <img src="./public/assets/240_10_47.jpg" alt="" class="poster-off-movie">
                                </div>
                                <div class="infor-buyticket child-abs hover-effect" id="movie-2">
                                    <div class="infor-movie">
                                        <div class="name-movie">chị trợ lý của anh</div>
                                        <div class="gr-button">
                                            <a href="#" class="xem-chi-tiet">Xem chi tiết</a>
                                            <a href="#" class="buy-ticket">
                                                <span class="icon-call"></span>
                                                Mua vé
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li class="parent" id="poster-movie-3">
                                <div class="poster-movie parent hover-effect">
                                    <div class="rating-18 child-abs"></div>
                                    <img src="./public/assets/240_12_3.jpg" alt="" class="poster-off-movie">
                                </div>
                                <div class="infor-buyticket child-abs hover-effect" id="movie-3">
                                    <div class="infor-movie">
                                        <div class="name-movie">hai phượng</div>
                                        <div class="gr-button">
                                            <a href="#" class="xem-chi-tiet">Xem chi tiết</a>
                                            <a href="#" class="buy-ticket">
                                                <span class="icon-call"></span>
                                                Mua vé
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li class="parent" id="poster-movie-4">
                                <div class="poster-movie parent hover-effect">
                                    <div class="rating-18 child-abs"></div>
                                    <img src="./public/assets/240_14_19.jpg" alt="" class="poster-off-movie">
                                </div>
                                <div class="infor-buyticket child-abs hover-effect" id="movie-4">
                                    <div class="infor-movie">
                                        <div class="name-movie">Mật vụ thanh trừng</div>
                                        <div class="gr-button">
                                            <a href="#" class="xem-chi-tiet">Xem chi tiết</a>
                                            <a href="#" class="buy-ticket">
                                                <span class="icon-call"></span>
                                                Mua vé
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li class="parent" id="poster-movie-5">
                                <div class="poster-movie parent hover-effect">
                                    <div class="rating-P child-abs"></div>
                                    <img src="./public/assets/240_12_6.jpg" alt="" class="poster-off-movie">
                                </div>
                                <div class="infor-buyticket child-abs hover-effect" id="movie-5">
                                    <div class="infor-movie">
                                        <div class="name-movie">Công viên kỳ diệu</div>
                                        <div class="gr-button">
                                            <a href="#" class="xem-chi-tiet">Xem chi tiết</a>
                                            <a href="#" class="buy-ticket">
                                                <span class="icon-call"></span>
                                                Mua vé
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li class="parent" id="poster-movie-6">
                                <div class="poster-movie parent hover-effect">
                                    <div class="rating-16 child-abs"></div>
                                    <img src="./public/assets/240_10_27.jpg" alt="" class="poster-off-movie">
                                </div>
                                <div class="infor-buyticket child-abs hover-effect" id="movie-6">
                                    <div class="infor-movie">
                                        <div class="name-movie">Yêu nhầm bạn thân</div>
                                        <div class="gr-button">
                                            <a href="#" class="xem-chi-tiet">Xem chi tiết</a>
                                            <a href="#" class="buy-ticket">
                                                <span class="icon-call"></span>
                                                Mua vé
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li class="parent" id="poster-movie-7">
                                <div class="poster-movie parent hover-effect">
                                    <div class="rating-13 child-abs"></div>
                                    <img src="./public/assets/240_10_27.jpg" alt="" class="poster-off-movie">
                                </div>
                                <div class="infor-buyticket child-abs hover-effect" id="movie-7">
                                    <div class="infor-movie">
                                        <div class="name-movie">Hạnh phúc của mẹ</div>
                                        <div class="gr-button">
                                            <a href="#" class="xem-chi-tiet">Xem chi tiết</a>
                                            <a href="#" class="buy-ticket">
                                                <span class="icon-call"></span>
                                                Mua vé
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </li>
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
<!--        <div class="demo">-->
<!--                <ul class="toggle-tabs">-->
<!--                        <li id="ribon-left"><span>tức & Ưu đãi</span></li>-->
<!--                        <li id= "ribon-right"><span>Thành viên CGV</span></li>-->
<!--                </ul>-->
<!--        </div>-->
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

<div class="ticket-couples">
    <div class="content-ticket">
        <a href="#">
            <img src="./public/assets/phototicket---496x247_1.jpg" alt="">
        </a>
    </div>
</div>

<!-- TODO : FOOTER -->

<div class="footer-content">
    <div class="footer-brand-slide">
        <ul class="list-brand-film">
            <li><a id="brand-1" href="#"></a></li>
            <li><a id="brand-2" href="#"></a></li>
            <li><a id="brand-3" href="#"></a></li>
            <li><a id="brand-4" href="#"></a></li>
            <li><a id="brand-5" href="#"></a></li>
            <li><a id="brand-6" href="#"></a></li>
            <li><a id="brand-7" href="#"></a></li>
            <li><a id="brand-8" href="#"></a></li>
        </ul>
    </div>
    <div class="footer-main">
        <div class="footer-main-content">
            <div class="cgv-vietnam">
                <h3>CGV Việt Nam</h3>
                <ul>
                    <li><a href="#">Giới Thiệu</a></li>
                    <li><a href="#">Tiện ích Online</a></li>
                    <li><a href="#">Thẻ Quà Tặng</a></li>
                    <li><a href="#">Tuyển Dụng</a></li>
                    <li><a href="#">Liên Hệ Quảng Cáo CGV</a></li>
                </ul>
            </div>
            <div class="cgv-policy">
                <h3>Điều khoản sử dụng</h3>
                <ul>
                    <li><a href="#"><p>Điều khoản chung</p></a></li>
                    <li><a href="#">Điều khoản giao dịch</a></li>
                    <li><a href="#">Chính sách thanh toán</a></li>
                    <li><a href="#">Chính sách bảo mật</a></li>
                    <li><a href="#">Câu hỏi thường gặp</a></li>
                </ul>
            </div>
            <div class="cgv-follow-us">
                <h3>Kết nối với chúng tôi</h3>
                <div class="icon-follow">
                    <ul>
                        <li><a class="zoom-icon" id="fb" href="#"></a></li>
                        <li><a class="zoom-icon" id="youtube" href="#" ></a></li>
                        <li><a class="zoom-icon" id="line" href="#"></a></li>
                        <li><a class="zoom-icon" id="insta" href="#"></a></li>
                        <li><a class="zoom-icon" id="zalo" href="#"></a></li>
                    </ul>
                </div>
                <a href="#"><img src="./public/assets/cong-thuong.PNG" alt=""></a>
            </div>
            <div class="customer-cgv">
                <h3>Chăm sóc khách hàng</h3>
                <p>Hotline: 1900 6017</br>
                    Giờ làm việc: 8:00 - 22:00 (Tất cả các ngày bao gồm cả Lễ Tết )</p>
                <p>Email hỗ trợ : <a href="#">hoidap@cgv.vn</a></p>
            </div>
        </div>
    </div>

</div>



    <?php
        include ('./components/footer.php');
    ?>
</body>
</html>