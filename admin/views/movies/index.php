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
                <h1>
                    <?php
                        var_dump($data['movies'][0]->name);
                    ?>
                </h1>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2019</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <?php
    include_once ("../components/footer-admin.php")
    ?>
</body>
</html>
