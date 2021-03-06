<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="description" content="Dashboard">
	<meta name="author" content="Deni Abisuma">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $judul; ?></title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/bootstrap.min.css">

    <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/plugins/fullcalendar.min.css"/>
  <link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">

  <link rel="shortcut icon" href="<?php echo base_url() ?>asset/img/logomi.png">
  <style>
    .dtp > .dtp-content{
      max-width: 400px !important;
    }
    .dtp .dtp-close > a > i{
      display: none;
    }
  </style>
  
    </head>

<body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.html" class="navbar-brand"> 
                 <b>BookingApp</b>
                </a>

              <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text" required>
                      <span class="bar"></span>
                      <label class="label-search">Type anywhere to <b>Search</b> </label>
                    </div>
                  </div>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>Administrator</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="<?php echo base_url() ?>asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     
                     <li class="more">
                      <ul>
                        <li><a href=""><span class="fa fa-cogs"></span></a></li>
                        <li><a href="<?php site_url() ?>login/logMeOut"><span class="fa fa-power-off "></span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="dashboard"><a href="<?php site_url() ?>dashboard">
                      <span class="fa-home fa"></span>
                      Dashboard</a>
                    </li>

                    <li class="booking ripple">
                      <a class="tree-toggle nav-header"><span class="fa-calendar fa"></span> Booking 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="<?php echo site_url() ?>booking">Data Booking</a></li>
                          <li><a href="<?php echo site_url() ?>booking/add">Input Booking</a></li>
                      </ul>
                    </li>

                    <li class="transaksi ripple">
                      <a class="tree-toggle nav-header"><span class="icons icon-credit-card"></span> Transaction 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="<?php echo site_url()?>transaksi">Data Transaksi</a></li>
                          <li><a href="<?php echo site_url()?>transaksi/add">Input Transaksi</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->



