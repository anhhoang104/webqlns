<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo1.jpg" type="image/x-icon">
    <title>CÔNG TY CỔ PHẦN VẠN XUÂN VIVAXAN</title>
    <link rel="stylesheet" href="view/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">  

</head>
<body>
<div class="user">
    <ul class="nbar">
        <li><a href="index.php?act=register">Đăng ký</a></li>
        <li><a href="index.php?act=login">Đăng nhập</a></li>
        <div class="dropdown-content">
        <?php if (!isset($_SESSION['user'])) { ?>
            <a href="index.php?act=login"><i class="fa-solid fa-right-to-bracket"></i> Đăng nhập</a>
            <?php } else if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 1) { ?>
            <a href="./admin/index.php">Vào trang Admin <i class="fa-solid fa-gears"></i></a>
            <a href="index.php?act=myaccount">Thông tin tài khoản <i class="fa-solid fa-circle-info"></i></a>
            <a href="index.php?act=logout" onclick="return confirm('Bạn chắc chắc muốn đăng xuất tài khoản?')">Đăng xuất <i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
        <?php } else { ?>
            <a href="index.php?act=changepw">Đổi mật khẩu </a>
            <a href="index.php?act=logout" onclick="return confirm('Bạn chắc chắc muốn đăng xuất tài khoản?')">Đăng xuất <i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
        <?php } ?>
    </ul>
</div>
<header>
  
