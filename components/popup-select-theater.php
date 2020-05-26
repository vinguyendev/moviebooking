<div id="cboxOverlay" style="opacity: 0.9;cursor: pointer;visibility: visible;display: block;"></div>
<?php
    $data = new DateTime();

    $arrDates = [];
    $arrDates[0] = [
        'weekday'=>$data->format('D'),
        'month'=>$data->format('m'),
        'day'=>$data->format('d'),
        'id'=>(int)$data->format('Ymd')
    ];
    for ($i = 1; $i < 14; $i++) {
        $date = $data->modify('+1 days');
        $arrDates[$i] = [
            'weekday'=>$data->format('D'),
            'month'=>$data->format('m'),
            'day'=>$data->format('d'),
            'id'=>$data->format('Ymd')
        ];
    }

    $date = !empty($_GET['date'])? $_GET['date']: $arrDates[0]['id'];
    $area = !empty($_GET['area']) ? $_GET['area'] : 1;
    $cinema = !empty($_GET['cinema']) ? $_GET['cinema'] : 0;
    $show_time = !empty($_GET['show_time']) ? $_GET['show_time'] : 0;
    $movie_id = !empty($_GET['movie'])?$_GET['movie']: '';

    $db = new Database();

    $db->query("SELECT * FROM areas");

    $areas = $db->resultSet();
    $db = new Database();
    $db->query("SELECT * FROM cinemas WHERE area_id='$area'");
    $cinemas = $db->resultSet();
    $db = new Database();
    $db->query("SELECT * FROM show_times");
    $show_times = $db->resultSet();

?>
<div class="contain-popup">
    <div id="boxOverlay">
        <form action="" method="GET">
            <input type="hidden" value="<?php echo $movie_id ?>" name="movie">
            <input type="hidden" id="date" name="date">
            <input type="hidden" id="area" name="area">
            <input type="hidden" id="cinema" name="cinema">
            <input type="hidden" id="show_time" name="show_time">
        </form>
        <div class="list-day">
            <ul>

                <?php
                foreach ($arrDates as $arrDate) {
                    if($arrDate['id'] == $date) {
                        ?>
                        <li class="day-item current" onclick="onSubmitDate(<?php echo $arrDate['id'];?>)">
                            <span><?php echo $arrDate['month'] ?></span>
                            <em><?php echo $arrDate['weekday'] ?></em>
                            <strong><?php echo $arrDate['day'] ?></strong>
                        </li>

                    <?php
                    } else {
                    ?>
                        <li class="day-item" onclick="onSubmitDate(<?php echo $arrDate['id'];?>)">
                            <span><?php echo $arrDate['month'] ?></span>
                            <em><?php echo $arrDate['weekday'] ?></em>
                            <strong><?php echo $arrDate['day'] ?></strong>
                        </li>
                <?php
                }}
                ?>
            </ul>
        </div>
        <div class="popup-content">
            <div class="list-area">
                <ul>
                    <?php
                    foreach ($areas as $item) {
                        if ($item->id == $area) {
                            ?>
                            <li class="list-area-active" onclick="onSubmitArea(<?php echo $item->id?>)"><?php echo $item->name;?></li>
                            <?php
                        } else {
                            ?>
                            <li onclick="onSubmitArea(<?php echo $item->id?>)"><?php echo $item->name;?></li>
                            <?php
                        }}
                    ?>
                </ul>
            </div>
            <div class="list-cinemas">
                <ul>
                    <?php
                    foreach ($cinemas as $cinema) {
                        ?>
                        <li>
                            <span><?php echo $cinema->name?></span>
                            <div class="list-show-time">
                                <?php
                                foreach ($show_times as $show_time) {
                                    ?>
                                    <div class="show-date-cinemas" onclick="onSubmit(<?php echo $cinema->id?>,<?php echo $show_time->id?>)">
                                        <p><?php echo $show_time->name?></p>
                                        <p>150 ghế trống</p>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    function onSubmitDate(date) {
        $('#date').val(date);
        $("form").submit();
    }
    function onSubmitArea(area) {
        $('#area').val(area);
        $("form").submit();
    }
    function onSubmit(cinema,show_time) {
        $('#cinema').val(cinema);
        $('#show_time').val(show_time);
        $("form").attr('action','/default/movies/booking');
        $("form").submit();
    }
</script>