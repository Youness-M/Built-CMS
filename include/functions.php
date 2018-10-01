<?php
session_start();

    function config(){
        $server="localhost";
        $user="root";
        $spassword="";
        $db="CMS";
        $connect=mysqli_connect($server,$user,$spassword,$db);
        mysqli_set_charset($connect,"utf8");
        return $connect;
    }




@$m=$_GET['m']?$_GET['m']:'index';
     switch ($m) {
            case 'index':
                include_once 'menu.php';
                include_once 'product_category.php';
                include_once 'products.php';
                include_once 'news_category .php';
                include_once 'news.php';
                include_once 'givingmail.php';
                include_once 'setting.php';
                include_once 'widget.php';




                break;
            case 'menu':
                include_once 'menu.php';
                break;
            case 'product';
                include_once 'product_category.php';
                break;
            case 'products';
                include_once 'products.php';
                break;
            case 'uploader':
                include_once 'uploader.php';
                break;
            case 'newscategory':
                include_once 'news_category .php';
                break;
            case 'news':
                include_once 'news.php';
                break;
            case 'contact':
                include_once 'givingmail.php';
                break;
            case 'settings':
                include_once 'setting.php';
                break;
             case 'widget':
                 include_once 'widget.php';
                 break;

        }



