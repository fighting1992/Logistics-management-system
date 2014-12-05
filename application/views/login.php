<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Login</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="<?php echo site_url('assets/assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css"/>
   <link href="<?php echo site_url('assets/assets/bootstrap/css/bootstrap-responsive.min.css');?>" rel="stylesheet" />
   <link href="<?php echo site_url('assets/assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet" />
   <link href="<?php echo site_url('assets/css/style.css');?>" rel="stylesheet" />
   <link href="<?php echo site_url('assets/css/style-responsive.css');?>" rel="stylesheet" />  
   <link href="<?php echo site_url('assets/css/style-default.css');?>" rel="stylesheet" id="style_color" /> 
</head>
<style>
   .admin{
       font-size: 26px;
   }
</style>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="lock">
    <div class="lock-header">
        <!-- BEGIN LOGO 
        <a class="center" id="logo" href="index.html">
            <img class="center" alt="logo" src="<?php echo site_url('assets/img/logo.png');?>">
        </a>
         END LOGO -->
         <p class="admin">管理员登录</p>
    </div>
    <div class="login-wrap">
        <div class="metro single-size red">
            <div class="locked">
                <i class="icon-lock"></i>
                <span>登录</span>
            </div>
        </div>
        <form action="<?php echo site_url('admin/do_login');?>" method="post">
	        <div class="metro double-size green">
	           <!-- <form action="<?php echo site_url('user/do_login');?>" method="post">-->
	                <div class="input-append lock-input">
	                    <input type="text" class="" placeholder="管理员名" name="username" method="post">
	                </div>
	            <!--</form>-->
	        </div>
	        <div class="metro double-size yellow">
	           <!-- <form action="<?php echo site_url('user/do_login');?>" method="post">-->
	                <div class="input-append lock-input">
	                    <input type="password" class="" placeholder="密码" name="password">
	                </div>
	            <!--</form>-->
	        </div>
	        <div class="metro single-size terques login">
	            <!--<form action="<?php echo site_url('user/do_login');?>" method="post">-->
	                <button type="submit" class="btn login-btn">
	                    登录
	                    <i class=" icon-long-arrow-right"></i>
	                </button>
	            <!--</form>-->
	        </div>
        </form>
        <!--<div class="metro double-size navy-blue ">
            <a href="index.html" class="social-link">
                <i class="icon-facebook-sign"></i>
                <span>Facebook Login</span>
            </a>
        </div>
        <div class="metro single-size deep-red">
            <a href="index.html" class="social-link">
                <i class="icon-google-plus-sign"></i>
                <span>Google Login</span>
            </a>
        </div>
        <div class="metro double-size blue">
            <a href="index.html" class="social-link">
                <i class="icon-twitter-sign"></i>
                <span>Twitter Login</span>
            </a>
        </div>
        <div class="metro single-size purple">
            <a href="index.html" class="social-link">
                <i class="icon-skype"></i>
                <span>Skype Login</span>
            </a>
        </div>
        <div class="login-footer">
            <div class="remember-hint pull-left">
                <input type="checkbox" id=""> Remember Me
            </div>
            <div class="forgot-hint pull-right">
                <a id="forget-password" class="" href="javascript:;">Forgot Password?</a>
            </div>
        </div>-->
    </div>
</body>
<!-- END BODY -->
</html>