<?php
/**
 * @var array $data
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Movie Booking</title>
    <link rel="stylesheet" href="../../public/css/style-admin.css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
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
                    
                    <h1 style="text-align: center">Thêm phim mới</h1>
                    <br><br>

                    <form action="/admin/movies/create" method="POST" enctype="multipart/form-data" >

                        <div class="form-group">
                            <label>Tên phim</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name movie">
                        </div>

                        <div class="form-group">
                            <label>Đạo diễn</label>
                            <input class="form-control" name="directors" placeholder="Enter directors">
                        </div>

                        <div class="form-group">
                            <label>Diễn viên</label>
                            <input class="form-control" name="casts" placeholder="Enter casts">
                        </div>

                        <div class="form-group">
                            <label>Thể loại</label>
                            <input class="form-control" name="categories" placeholder="Enter categories">
                        </div>

                        <div class="form-group">
                            <label>Khởi chiếu</label>
                            <input class="form-control" name="premiere" placeholder="Enter premiere">
                        </div>

                        <div class="form-group">
                            <label>Thời lượng</label>
                            <input class="form-control" name="duration" placeholder="Enter duration">
                        </div>

                        <div class="form-group">
                            <label>Ngôn ngữ</label>
                            <input class="form-control" name="language" placeholder="Enter language">
                        </div>

                        <div class="form-group">
                            <label>Giới hạn</label>
                            <input class="form-control" name="rated" placeholder="Enter rated">
                        </div>

                        <div class="form-group">
                            <label>Media Trailer</label>
                            <textarea rows="3" class="form-control" name="media" placeholder="Enter Media Trailer"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea rows="3" class="form-control" name="description" placeholder="Enter description"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input">
                                <label class="custom-file-label">Choose file...</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </form>
                </div>

            </main>
        </div>
    </div>
        <?php
        include_once ("../components/footer-admin.php")
        ?>
</body>
</html>
