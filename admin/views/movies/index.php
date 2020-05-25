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
        </div>
    </div>
    <?php
    include_once ("../components/footer-admin.php")
    ?>
</body>
</html>
