<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Slastenov Dmitry">
  <title>Парикмахер-стилист Кристина Носенко</title>
  <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
  <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
  <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
  <link rel="stylesheet" href="css/style.css">
    <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
  <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
  <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
  <link rel="stylesheet" href="css/et-line-fonts.css" type="text/css">
  <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
  <link href="css/flaticon.css" rel="stylesheet">
  <!-- =-=-=-=-=-=-= Magnific PopUP CSS =-=-=-=-=-=-= -->
  <link href="js/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!-- =-=-=-=-=-=-= Revolution Main Stylesheet =-=-=-=-=-=-= -->
  <link href="js/revolution/css/settings.css" rel="stylesheet" media="screen" />
  <!-- =-=-=-=-=-=-= Google Fonts =-=-=-=-=-=-= -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,700,600' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Dosis:300,700,600' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- JavaScripts -->
  <script src="js/modernizr.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<!-- =-=-=-=-=-=-= HEADER =-=-=-=-=-=-= -->
<section class="top-bar" id="header_top">
  <div class="container">
    <div class="left-text pull-left">
      <p><span>Часы работы :</span> Понедельник - Воскресенье  с 11:00 до 19:00</p>
    </div>
    <!-- /.left-text -->
    
    <div class="social-icons pull-right">
      <ul> <?php require ("social.php"); ?> </ul>
    </div>
    <!-- /.social-icons --> 
  </div>
</section>
<header class="header-area"> 
  
  <!-- Logo Bar -->
  <div class="logo-bar">
    <div class="container clearfix"> 
      <!-- Logo -->
      <div class="logo"> <a href="index.php"><img src="images/logo-1.png" alt=""></a> </div>
      
      <!--Info Outer-->
      <div class="information-content"> 
        <!--Info Box-->
        <div class="info-box  hidden-sm">
          <div class="icon"><span class="icon-envelope"></span></div>
          <div>EMAIL</div>
          <a href="mailto:order@kristina-hairstylist.ru">kristina-hairstylist@mail.ru</a> </div>
        <!--Info Box-->
        <div class="info-box">
          <div class="icon"><span class="icon-phone"></span></div>
          <div>Запись по телефону</div>
          <a class="location" href="#">8 924 114 60-22</a> </div>
        <div class="info-box">
          <div class="icon"><span class="icon-map"></span></div>
          <div>Найти на карте</div>
          <a class="location page-scroll" href="#find_on_map">Комсомольск-на-Амуре, Мандарин </a> </div>
      </div>
    </div>
  </div>
  <!-- Header Top End --> 
  
  <!-- Menu Section -->
  <div class="navigation-2"> 
    <!-- navigation-start -->
    <nav class="navbar navbar-default ">
      <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-navigation">
          <ul class="nav navbar-nav">
            <li><a class="page-scroll" href="<?php echo isset($index_page)? "":"index.php"; ?>#about-us">Обо мне</a></li>
            <li><a class="page-scroll" href="<?php echo isset($index_page)? "":"index.php"; ?>#my-testimonils">Отзывы </a></li>
            <li><a class="page-scroll" href="<?php echo isset($index_page)? "":"index.php"; ?>#our-services">Услуги </a></li>
            <li><a class="page-scroll" href="<?php echo isset($index_page)? "":"index.php"; ?>#rates">Цены </a></li>
            <li><a class="page-scroll" href="<?php echo isset($index_page)? "":"index.php"; ?>#portfolio">Портфолио </a></li>
            <li><a href="contact.php">Напишите мне</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <div class="appoinment-button"><a class="appoinment-button" href="appointment.php">Запись он-лайн</a></div>
      </div>
      <!-- /.container-end --> 
    </nav>
  </div>
  <!-- /.navigation-end --> 
  <!-- Menu  End --> 
</header>
<!-- =-=-=-=-=-=-= HEADER END =-=-=-=-=-=-= --> 