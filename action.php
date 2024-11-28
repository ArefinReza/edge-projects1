<?php
require_once 'vendor/autoload.php';
require_once 'App/classes/Fullname.php';

use App\classes\Category;
use App\classes\Blog;
use App\classes\Fullname;
use App\classes\Series;
use App\classes\Calculator;
use App\classes\Home;
use App\classes\News;
use App\classes\Gallery;

session_start();
$category = new Category();
$categories = $category->getCategories();

if (isset($_GET['page'])) {
    if ($_GET['page'] == "home") {

        $slider = new Home();
        $sliders = $slider->getSlider();

        $blog = new Blog();
        $blogs = $blog->getLastThreeBlog();

        $news = new News();
        $newes = $news->getNews();
        // $newsId = $_GET['id'];
        // $singleNews = $news->getSingleNews($newsId);
        include 'pages/home.php';

    } 
    elseif($_GET['page']== 'newsdetails'){
        $news = new News();
        $newsId = $_GET['id'];
        $singleNews = $news->getSingleNews($newsId);
        include 'pages/newsdetails.php';
    }
    
    
    
    elseif ($_GET['page'] == "about") {
        include 'pages/about.php';
    } elseif ($_GET['page'] == "blog-category") {
        $categoryId = $_GET['id'];
        $blog = new Blog();
        $categoryBlogs = $blog->getBlogByCategoryId($categoryId);
        include 'pages/category.php';
    } elseif ($_GET['page'] == "blog-detail") {
        $blogId = $_GET['id'];
        $blog = new Blog();
        $singleBlog = $blog->getBlogById($blogId);
        include 'pages/detail.php';
    } elseif ($_GET['page'] == "gallery") {

        $galleryimage = new Gallery();
        $gellery = $galleryimage->getGallery();
        include 'pages/gallery.php';
    }

    elseif ($_GET['page'] == "contact") {
        // Retrieve results from session if they exist
        $fullname = $_SESSION['fullname'] ?? '';
        $allNumbers = $_SESSION['allNumbers'] ?? '';
        $oddEvenNumbers = $_SESSION['oddEvenNumbers'] ?? '';
        $calculationResult = $_SESSION['calculationResult'] ?? '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $action = $_POST['action'] ?? '';

            if ($action === 'fullname') {
                // Handle Full Name
                $firstname = $_POST['firstname'] ?? '';
                $middlename = $_POST['middlename'] ?? '';
                $lastname = $_POST['lastname'] ?? '';
                $fullnameObject = new Fullname($firstname, $middlename, $lastname);
                $_SESSION['fullname'] = $fullnameObject->getFullname();
            } elseif ($action === 'print_all') {
                // Handle Print All Numbers
                $num1 = $_POST['num1'] ?? 0;
                $num2 = $_POST['num2'] ?? 0;
                $seriesObject = new Series();
                $_SESSION['allNumbers'] = implode(', ', $seriesObject->getNumberSeries($num1, $num2));
            } elseif ($action === 'odd_even') {
                // Handle Print Odd/Even Numbers
                $num1 = $_POST['num1'] ?? 0;
                $num2 = $_POST['num2'] ?? 0;
                $type = $_POST['type'] ?? 'odd';
                $seriesObject = new Series();
                $_SESSION['oddEvenNumbers'] = implode(', ', $seriesObject->getOddEvenSeries($num1, $num2, $type));
            } elseif ($action === 'calculate') {
                // Handle Calculator
                $num1 = $_POST['calc_num1'] ?? 0;
                $num2 = $_POST['calc_num2'] ?? 0;
                $operation = $_POST['operation'] ?? 'add';
                $calculator = new Calculator();
                $_SESSION['calculationResult'] = $calculator->calculate($num1, $num2, $operation);
            }
            elseif ($action === 'reset') {
                session_unset(); 
                session_destroy(); 
                header("Location: ?page=contact"); 
                exit;
            }

            // Reload the page to clear POST data
            header("Location: ?page=contact");
            exit;
        }

        include 'pages/contact.php';
    }
}
