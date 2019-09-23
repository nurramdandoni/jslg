<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8"/>

        <title>JIMLY SCHOOL LAW AND GOVERNMENT | Login</title>
        <meta name="description" content="Updates and statistics">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">       
         <!--end::Fonts -->

        <!--begin::Page Custom Styles(used by this page) -->
        <link href="<?php echo base_url(); ?>template/assets2/css/demo1/pages/login/login-5.css" rel="stylesheet" type="text/css" />
        <!--end::Page Custom Styles -->

         <!--begin::Page Vendors Styles(used by this page) -->
        <link href="<?php echo base_url(); ?>template/assets2/vendors/custom/datatables.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors Styles -->

        <!--begin:: Global Mandatory Vendors -->
        <link href="<?php echo base_url(); ?>template/assets2/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
        <!--end:: Global Mandatory Vendors -->

        
        <!--begin::nav mobile quick -->
        <!-- <link href="<?php echo base_url(); ?>template/assets2/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" /> -->
        <link href="<?php echo base_url(); ?>template/assets2/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>template/assets2/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
        <!--end::nav mobile quick -->

        <!--begin::Global Theme Styles(used by all pages) -->
        <link href="<?php echo base_url(); ?>template/assets2/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        <link href="<?php echo base_url(); ?>template/assets2/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
        <!-- <link href="<?php echo base_url(); ?>template/assets2/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" /> -->
        <link href="<?php echo base_url(); ?>template/assets2/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>template/assets2/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css" />       
        <!--end::Layout Skins -->

        <link rel="shortcut icon" href="<?php echo base_url(); ?>template/assets2/media/logos/icon.ico" />
    </head>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >

       
    	<!-- begin:: Page -->
	<div class="kt-grid kt-grid--ver kt-grid--root">
		<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v5 kt-login--signin" id="kt_login">
	<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile" style="background-image: url(<?php echo base_url(); ?>template/assets2/media//bg/bg-3.jpg);">
		
	 	<div class="kt-login__left" style="margin-top: 12%">
			<div class="kt-login__wrapper">
				<div class="kt-login__content">
					<a class="kt-login__logo" href="#">
						<img src="<?php echo base_url(); ?>template/assets2/media/logos/jimly.png" width="50%">  	
					</a>					 
					
					<h3 class="kt-login__title">JIMLY SCHOOL LAW AND GOVERNMENT</h3>
					
					<span class="kt-login__desc">
						<h6>Saya Belum Mempunyai Account</h6>
					</span>	
					<span class="kt-login__desc">
						<h6>Buat Account barumu dengan mudah dalam 2 menit</h6>
					</span>	
					
					<div class="kt-login__actions">
						<a href="<?php echo base_url() ?>login/register_peserta" class="btn btn-outline-brand btn-pill">Peserta</a>
						<a href="<?php echo base_url() ?>login/register_narasumber" class="btn btn-outline-brand btn-pill">Narasumber</a>
					</div>
				</div>	
			</div>
		</div>
		
		<!-- <div class="kt-login__divider"> -->
		
		<div class="kt-login__right" style="margin-top: 5%">
			<div class="kt-login__wrapper">
				<div class="kt-login__signin">
					<div class="kt-login__head">
						<h3 class="kt-login__title">Login</h3>
					</div>				
					<div class="kt-login__form">
					<span class="kt-login__desc">
						<h6>Saya Sudah Memiliki Account</h6>
					</span>	
						<form class="kt-form" action="<?php echo base_url() ?>login/process_login" method="post">
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Username" name="username" autocomplete="off">
							</div>
							<div class="form-group">
								<input class="form-control form-control-last" type="Password" placeholder="Password" name="password">
							</div>
							<div class="row kt-login__extra">
								<div class="col kt-align-right">
									<a href="javascript:;" id="kt_login_forgot" class="kt-link">Forget Password ?</a>
								</div>
							</div>
							<input type="submit" name="" class="btn btn-brand btn-pill btn-elevate" value="Login">
						</form>			
					</div>
				</div>		
				<div class="kt-login__forgot">
					<div class="kt-login__head">
						<h3 class="kt-login__title">Forgotten Password ?</h3>
						<div class="kt-login__desc">Enter your email to reset your password:</div>
					</div>
					<div class="kt-login__form">
						<form class="kt-form" action="">
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
							</div>
							<div class="kt-login__actions">
								<button id="kt_login_forgot_submit" class="btn btn-brand btn-pill btn-elevate">Request</button>
								<button id="kt_login_forgot_cancel" class="btn btn-outline-brand btn-pill">Cancel</button>
							</div>
						</form>
					</div>
				</div>			 
			</div>
		</div> 
	</div>
</div>		 	</div>
	
<!-- end:: Page -->


       <!--begin:: Global Mandatory Vendors -->
        <script src="<?php echo base_url(); ?>template/assets2/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>

        <!-- awal untuk hi sean pop up-->
        <script src="<?php echo base_url(); ?>template/assets2/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
        <!-- akhir untuk hi sean pop up-->

        <script src="<?php echo base_url(); ?>template/assets2/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- awal menu collapse dan sweet alert -->
        <script src="<?php echo base_url(); ?>template/assets2/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
        <!-- akhir menu collapse dan sweet alert -->
        
        <script src="<?php echo base_url(); ?>template/assets2/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
        <!--end:: Global Mandatory Vendors -->

        <!--begin::Global Theme Bundle(used by all pages) -->
        <!-- <script src="<?php echo base_url(); ?>template/assets2/js/demo1/scripts.bundle.js" type="text/javascript"></script> -->
        <!--end::Global Theme Bundle -->

        <!--begin::Page Vendors(used by this page) -->
        <!-- <script src="<?php echo base_url(); ?>template/assets2/vendors/custom/datatables.bundle.js" type="text/javascript"></script> -->
        <!--end::Page Vendors -->

        <!--begin::Page Scripts(used by this page) -->
                            <script src="<?php echo base_url(); ?>template/assets2/js/demo1/pages/login/login-general.js" type="text/javascript"></script>
                        <!--end::Page Scripts -->

        <!--end::Page Scripts -->
            </body>
    <!-- end::Body -->
</html>
