<?php
    require_once ('../helpers/slug.php');
?>

<?php

class Movies extends Controller {

    private $movie;

    public function __construct()
    {
        $this->movie = $this->model('MovieModel');
    }

    public function index()
    {
        $movies = $this->movie->getMovies();
        $data = [
            'movies' => $movies
        ];

        $this->view('movies/index', $data);
    }

    public function create()
    {
        if($_SERVER['REQUEST_METHOD']=='POST') {
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
                'name'=>trim($_POST['name']),
                'slug'=>changeToSlug(trim($_POST['name'])),
                'directors'=>trim($_POST['directors']),
                'casts'=>trim($_POST['casts']),
                'categories'=>trim($_POST['categories']),
                'description'=>trim($_POST['description']),
                'premiere'=>trim($_POST['premiere']),
                'duration'=>trim($_POST['duration']),
                'language'=>trim($_POST['language']),
                'rated'=>trim($_POST['rated']),
                'media'=>trim($_POST['media']),
                'image'=> changeToSlug(trim($_POST['name'])).'.png'
            ];

            $file_tmp = $_FILES['image']['tmp_name'];

            $target_dir = '../public/uploads/';

            $target_file = $target_dir.basename($data['image']);

            if (move_uploaded_file($file_tmp, $target_file)) {

                if(!empty($data['name'])) {

                    if($this->movie->createMovie($data)){
                        echo '<script language="javascript">alert("Đã thêm phim thành công!");</script>';
                    }
                    else {
                        echo '<script language="javascript">alert("Fail!");</script>';
                    }
                }
                else {
                    echo '<script language="javascript">alert("Fail!");</script>';
                }

            }else{
                echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
            }

            $this->view('movies/create');
        }
        else {
            $this->view('movies/create');
        }
    }
}
