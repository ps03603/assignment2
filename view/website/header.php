<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" type="text/css" href="../view/website/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
   <link rel="stylesheet" type="text/css" href="../view/website/css/jumbotron.css">
    <link rel="stylesheet" type="text/css" href="../view/website/css/custom.css">
    <link href='https://fonts.googleapis.com/css?family=Lobster&subset=vietnamese' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../view/website/css/font-awesome.css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Bà Ngoại Cuisine</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="?action=home">Trang Chủ</a></li>
        <li><a href="?action=gioithieu">Giới Thiệu</a></li>
        <li class="dropdown">
          <a href="?action=sanpham" class="dropdown-toggle" data-toggle="dropdown">Sản Phẩm<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="?action=monman">Món Mặn</a></li>
            <li><a href="?action=monngot">Món Ngọt</a></li>
            <li><a href="?action=monanvat">Món Ăn Vặt</a></li>
            <li class="divider"></li>
            <li><a href="#">Món Đặc Biệt</a></li>
            <li class="divider"></li>
            <li><a href="#">Khuyến Mãi</a></li>
          </ul>
        </li>
         <li><a href="?action=lienhe">Liên Hệ</a></li>
         <?php
            if (isset($_SESSION['user'])){
                if ($_SESSION['user'] == "admin"){
                    echo '<li><a href="?action=product_manager">Quản lý sản phẩm</a>';
                }
            }
         ?>
         </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
      </form>
          
 <?php if (isset($_SESSION['user']))include '../view/website/afterlogin.php'; else {
     include '../view/website/beforelogin.php';
 } ;      ?>