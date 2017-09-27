<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="<?php echo base_url('assets/css/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="<?php echo base_url('assets/css/flat-ui.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet">

    <!-- Loading Fonts -->
    <link href="<?php echo base_url('assets/css/whhg.css'); ?>" rel="stylesheet">

    <!-- Loading Icon -->
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
        <li><a href="<?php echo base_url('register#email'); ?>">Jobs</a></li>
        <li><a href="<?php echo base_url('register#email'); ?>">Post Jobs</a></li>
        <!-- <li><a href="#" class="disabled"><?php echo date('D F d, Y g:i a'); ?></a></li> -->
      </ul>
      
      <div class="navbar-right">
        <a class="navbar-text" href="<?php echo base_url('login#email'); ?>">Sign in</a>
        <a href="<?php echo base_url('register#email'); ?>"><button class="btn btn-primary navbar-btn">Sign Up</button></a>
      </div>
    </div>

  </nav>