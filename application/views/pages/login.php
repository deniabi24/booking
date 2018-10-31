<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="FutsallApp v.1">
  <meta name="author" content="Deni Abisuma">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>150 FutsallApp</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="<?php echo base_url() ?>asset/img/logomi.png">
 
    </head>

    <body id="mimin" class="dashboard form-signin-wrapper">

      <div class="container">

        <form method="post" class="form-signin" action="<?php echo base_url() ?>index.php/login/logMeIn">
          <div class="panel periodic-login">
              <span class="atomic-number">FutsallApp</span>
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol"><?php echo $tittle ?></h1>
                  <p class="atomic-mass"></p>
                  <p class="element-name"><?php echo $error ?></p>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input name="username" type="text" class="form-text" required>
                    <span class="bar"></span>
                    <label>Username</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input name="password" type="password" class="form-text" required>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
                  
                  <input type="submit" class="btn col-md-12" value="SignIn"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="denilabs.github.io">Powered by denilabs </a>
                </div>
          </div>
        </form>

      </div>

      <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="<?php echo base_url() ?>asset/js/jquery.min.js"></script>
      <script src="<?php echo base_url() ?>asset/js/jquery.ui.min.js"></script>
      <script src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>

      <script src="<?php echo base_url() ?>asset/js/plugins/moment.min.js"></script>
      <script src="<?php echo base_url() ?>asset/js/plugins/icheck.min.js"></script>

      <!-- custom -->
      <script src="<?php echo base_url() ?>asset/js/main.js"></script>
     
     <!-- end: Javascript -->
   </body>
   </html>