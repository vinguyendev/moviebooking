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
                    <h1 style="text-align: center">Danh sách phim</h1>
                    <br><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($data as $movie) {
                            ?>
                            <tr class="tr-movie">
                                <td><?php echo $movie->id?></td>
                                <td>
                                    <img src="../public/uploads/<?php echo $movie->image?>" alt="">
                                </td>
                                <td><?php echo $movie->name?></td>
                                <td>
                                    <button type="button" class="btn btn-danger myBtn" onclick="deleteMovie(<?php echo $movie->id?>)">Xóa</button>
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
    <div class="container">
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header model-delete">
                        <h4 class="modal-title">Bạn có chắc chắn xóa</h4>
                    </div>
                    <div class="modal-body model-delete-btn">
                        <button type="button" class="btn btn-success" onclick="confirmDelete()">Xác nhận</button>
                        <button type="button" class="btn btn-danger">Hủy</button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <form method="post" action="/admin/movies/delete">
        <input type="hidden" id="idMovie" name="idmovie">
    </form>

    <script>
        $(document).ready(function(){
            $(".myBtn").click(function(){
                $("#myModal").modal();
            });
        });
        function deleteMovie(id) {
            $('#idMovie').val(id);
        }
        function confirmDelete() {
            $('form').submit();
        }
    </script>
</body>
</html>
