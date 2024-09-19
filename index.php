<?php
session_start();
ob_start();

// include "model/pdo.php;";
include "view/head.php";
include "view/header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        
        
        case "register":
            /*xử lí đăng ký*/
        include "view/user/register.php";
        break;

        case "changepw":
        include "view/user/changepw.php";
        break;

        case "login":
        /* xử lí đăng nhập  ...*/
        include "view/user/login.php";
        break;

        case 'logout':
            session_unset();
            header('Location: index.php?act=login');
        break;
        
        case "myaccount":
        include "view/user/myaccount.php";
        break;

        case "gthieu":
        include "view/gioithieu.php";
        break;
        
        case "tintuc":
        include "view/news.php";
        break;
        
        case "xkld":
        include "view/xkld.php";
        break;

        case "duhoc":
        include "view/duhoc.php";
        break;

        case "lienhe":
        include "view/contact.php";
        break;

        default: 
        include "view/content.php";
        break;
    }}else{
        include "view/content.php";
    }

include "view/footer.php"
?>