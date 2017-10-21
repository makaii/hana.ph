<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <!-- <link href="http://localhost/softeng/./assets/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url('assets/css/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Loading Flat UI -->
    <!-- <link href="http://localhost/softeng/./assets/css/flat-ui.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url('assets/css/flat-ui.min.css'); ?>" rel="stylesheet">
    <!-- <link href="http://localhost/softeng/./assets/css/custom.css" rel="stylesheet"> -->
    <link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet">

    <!-- Loading Fonts -->
    <!-- <link rel="stylesheet" type="text/css" href="http://localhost/softeng/./assets/css/whhg.css"> -->
    <link href="<?php echo base_url('assets/css/whhg.css'); ?>" rel="stylesheet">

    <!-- Loading Icon -->
    <!-- <link rel="shortcut icon" href="http://localhost/softeng/./assets/img/favicon.ico"> -->
    <link href="<?php echo base_url('assets/img/favicon.ico'); ?>" rel="shortcut icon">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  
 <body style="background-color: #3498DB;">

  <nav class="navbar navbar-default navbar-lg" role="navigation">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
        <span class="sr-only">Toggle navigation</span>
      </button>
      <a href="<?php echo base_url(); ?>" class="navbar-left"><img class="img-circle" src="<?php echo base_url('assets/img/icons/icon.png'); ?>" style="max-width:85px; max-height:80px;margin-top: 5px"></a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse-01">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url();?>company/job_posts">Job Posts</a></li>
      </ul>

      <div class="navbar-right">
        <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="<?php echo base_url('profile/'); ?>"><?php echo $email_address; ?></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <i class="fui-gear"></i></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('profile/');?>">Profile</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url('main/logout'); ?>">Logout</a></li>
          </ul>
        </li>
      </ul>
      </div>
    </div>
  </nav>