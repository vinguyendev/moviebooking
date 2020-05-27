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

<?php
    $movie = !empty($_GET['movie'])? $_GET['movie']: 0;
    $date = !empty($_GET['date'])? $_GET['date']: 0;
    $area = !empty($_GET['area'])? $_GET['area']: 0;
    $cinema = !empty($_GET['cinema'])? $_GET['cinema']: 0;
    $show_time = !empty($_GET['show_time'])? $_GET['show_time']: 0;

    $db = new Database();

    $db->query("SELECT * FROM cinemas WHERE id='$cinema'");
    $cinema = $db->single();
    $db->query("SELECT * FROM show_times WHERE id='$show_time'");
    $show_time = $db->single();
    $date = substr($date,6,2).'/'.substr($date,4,2).'/'.substr($date,0,4);
    $db->query("SELECT * FROM movies WHERE id='$movie'");
    $movie = $db->single();
    $db->query("SELECT * FROM seats");
    $seats = $db->resultSet();
?>

<div class="container-seat">
    <div class="contain-seat">
        <h4>BOOKING ONLINE</h4>
        <div class="info-room-seat">
            <p><?php echo $cinema->name?> | Số ghế (125/125)</p>
            <p><?php echo $date?> <?php echo $show_time->name?> ~  <?php echo $date?> <?php echo $show_time->end_time?></p>
        </div>
        <div class="contain-seat-info">
            <span>Người / Ghế</span>
        </div>

        <div class="contain-list-seat">
            <div class="row contain-row-seat">
                <table>
                    <tbody>
                        <?php
                            for ($i=0;$i<=6;$i++) {
                                ?>
                                <tr>
                                    <?php
                                        for($j=0;$j<10;$j++) {
                                            if($seats[$i * 10 + $j]->type == 0) {
                                                ?>
                                                <td class="seat-standard"><?php echo $seats[$i*10+$j]->name?></td>
                                                <?php
                                            } else {
                                                ?>
                                                <td class="seat-vip"><?php echo $seats[$i*10+$j]->name?></td>
                                                <?php
                                            }
                                        }
                                    ?>
                                </tr>
                                <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="description-seat">
                <div class="description-seat-item">
                    <div>
                        <span class="checkbox seat-checked"></span>
                        <span>Checked</span>
                    </div>
                    <div>
                        <span class="checkbox seat-selected"></span>
                        <span>Đã chọn</span>
                    </div>
                </div>
                <div class="description-seat-item">
                    <div>
                        <span class="checkbox seat-standard"></span>
                        <span>Thường</span>
                    </div>
                    <div>
                        <span class="checkbox seat-vip"></span>
                        <span>Vip</span>
                    </div>
                    <div>
                        <span class="checkbox seat-sw"></span>
                        <span>SW</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="inform-booking">
            <div class="inform-detail">
                <img src="../../public/uploads/<?php echo $movie->image?>" alt="">
                <div class="inform-name">
                    <p><?php echo $movie->name?></p>
                    <p>2D</p>
                    <p>C18</p>
                </div>
                <div class="inform-cinema">
                    <p>CGV Vincom Bà Triệu</p>
                    <p><?php echo $show_time->name?></p>
                    <p><?php echo $date?></p>
                </div>
                <div class="inform-cinema">
                    <p>Phim: 0</p>
                    <p>Combo: 0</p>
                    <p>Tổng: 0</p>
                </div>
            </div>
            <div class="btn-payment">
                <span class="payment-inform"></span>
            </div>
        </div>
    </div>
</div>

<?php
include ('../components/footer-content.php');
include ('../components/footer.php');
?>

</body>