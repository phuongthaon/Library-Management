<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <title>Library</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./front-end/asset/css/reader.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!--Heading-->
    <div class="header">
        <!--Logo-->
        <div class="logo">
            <div class="iconbar"></div>
            <div class="logotext">DEADLIB</div>
        </div>
        <!--User-->
        <div class="user">
            <div class="username">Nguyễn Ngọc Chi</div>
            <i class="fa fa-user-circle-o"></i>
            <i class="fa fa-caret-down"></i>
        </div>
    </div>

    <!--Menu-->
    <div class="menu">
        <!--MenuItem-->
        <div class="menu-content">
            <!--Reader-->
            <div class="menu-item">
                <div class="menu-item-icon-reader"></div>
                <div class="menu-item-text-reader">Quản lý độc giả</div>
            </div>
            <!--Thủ thư-->
            <div class="menu-item">
                <div class="menu-item-icon-keeper"></div>
                <div class="menu-item-text-keeper">Quản lý thủ thư</div>
            </div>
            <!--Tài liệu-->
            <div class="menu-item">
                <div class="menu-item-icon-doc"></div>
                <div class="menu-item-text-doc">Quản lý tài liệu</div>
            </div>
            <!--Kho sách-->
            <div class="menu-item">
                <div class="menu-item-icon-kho"></div>
                <div class="menu-item-text-kho">Quản lý kho sách</div>
            </div>
            <!--Mượn trả-->
            <div class="menu-item">
                <div class="menu-item-icon-muontra"></div>
                <div class="menu-item-text-muontra">Quản lý mượn trả</div>
            </div>
            <div class="menu-item">
                <div class="menu-item-icon-nxb"></div>
                <div class="menu-item-text-nxb">Quản lý NXB</div>
            </div>
            <!--Mượn sách-->
            <div class="menu-item">
                <div class="menu-item-icon-borrow"></div>
                <div class="menu-item-text-borrow">Mượn sách</div>
            </div>
            <!--Trợ giúp-->
            <div class="menu-item">
                <div class="menu-item-icon-help"></div>
                <div class="menu-item-text-help">Trợ giúp</div>
            </div>
        </div>
    </div>
    <!--Content-->
    <div class="content">
    <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our app.</h1>
    </div>
</body>

</html>