<?php
/**
 * @var array $data
 */
?>

<!doctype html>
<html lang="en">
<head>
    <?php
    include_once ("../components/header-admin.php");
    ?>
</head>
<body class="sb-nav-fixed">
<?php include ("../components/nav.php")?>
<div id="layoutSidenav">
    <?php
    include ("../components/sidebar.php")
    ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container">
                <h1 style="text-align: center">Danh sách booking</h1>
                <br><br>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Movie</th>
                        <th scope="col">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            require_once ('models/MovieModel.php');
                            require_once ('models/CustomerModel.php');
                            $customer = new CustomerModel();
                            $movie = new MovieModel();

                            foreach ($data as $booking) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $booking->id?>
                                    </td>
                                    <td>
                                        <?php echo $customer->getNameById($booking->customer_id)->name?>
                                    </td>
                                    <td>
                                        <?php echo $movie->getNameMovieById($booking->movie_id)->name?>
                                    </td>
                                    <td>
                                        <?php echo $booking->total?>
                                    </td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
<?php
include_once ("../components/footer-admin.php")
?>


</body>
</html>
