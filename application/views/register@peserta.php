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

		<!-- <link rel="shortcut icon" href="<?php echo base_url(); ?>template/assets2/media/logos/icon.ico" /> -->
		<link rel="shortcut icon" type="image/ico" href="<?php echo base_url(); ?>template/assets2/media/logos/A7eUV8OZt8H93930i90E.png" />
		<script src="<?php echo base_url(); ?>asset/jquery/jquery331.min.js" type="text/javascript"></script>
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    </head>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >

       
    	<!-- begin:: Page -->
	<div class="kt-grid kt-grid--ver kt-grid--root">
		<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v5 kt-login--signin" id="kt_login">
	<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile" style="background-image: url(<?php echo base_url(); ?>template/assets2/media//bg/bg-3.jpg);">
		
	 	<div class="kt-login__left" style="margin-top: 5%;">
			<div class="kt-login__wrapper">
				<div class="kt-login__content">
					<a class="kt-login__logo" href="#">
						<img src="<?php echo base_url(); ?>template/assets2/media/logos/jimly.png" width="50%">  	
					</a>					 
					
					<h3 class="kt-login__title">JIMLY SCHOOL LAW AND GOVERNMENT</h3>
					
					<span class="kt-login__desc">
						<h6>Saya Peserta Baru</h6>
					</span>	
					<span class="kt-login__desc">
						<h6>Buat Account barumu dengan mudah dalam 2 menit</h6>
					</span>
					<form action="<?php echo base_url() ?>login/proses_register_peserta" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" class="form-control"  placeholder="Nama Lengkap & Gelar" required="" name="nama_lengkap">
						<span class="form-text text-muted"></span>
					</div>
					<div class="form-group">
						<input type="text" maxlength="16" class="form-control"  placeholder="NIK" required="" name="nik">
						<span class="form-text text-muted"></span>
					</div>
					<div class="form-group">
						<input type="text" class="form-control"  placeholder="Tempat Lahir" required="" name="tempat_lahir">
						<span class="form-text text-muted"></span>
					</div>
					<div class="form-group">
						<input type="date" class="form-control"  placeholder="Tanggal Lahir Lahir" required="" name="tanggal_lahir">
						<span class="form-text text-muted"></span>
					</div>
					<div class="form-group">
						<input type="text" class="form-control"  placeholder="Alamat Sesuai KTP" required="" name="alamat">
						<span class="form-text text-muted"></span>
					</div>
					<div class="form-group">
						<select class="form-control" id="provinsi" name="provinsi">
							<option value="0">-Pilih Provinsi-</option>
							<?php 
								foreach($provinsi->result() as $prov){
							?>
							<option value="<?php echo $prov->id_provinsi; ?>"><?php echo $prov->nama_provinsi; ?></option>
							<?php 
								}
							?>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" id="kabkot" name="kabkot">
							<option value="0">-Pilih Kab/Kota-</option>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" id="kec" name="kec">
							<option value="0">-Pilih Kecamatan-</option>
						</select>
					</div>
					<div class="form-group">
						<input type="text" class="form-control"  placeholder="Jabatan Pekerjaan" required="" name="pekerjaan">
						<span class="form-text text-muted"></span>
					</div>
					<div class="form-group">
						<input type="text" class="form-control"  placeholder="Pendidikan Terakhir" required="" name="pendidikan">
						<span class="form-text text-muted"></span>
					</div>
					<div class="form-group">
						<input type="text" maxlength="15" class="form-control"  placeholder="No Telp/ Whatsapps" required="" name="wa">
						<span class="form-text text-muted"></span>
					</div>
				</div>	
			</div>
		</div>
		
		<div class="kt-login__right" style="margin-top: 1%;">
			<div class="kt-login__wrapper">
				<div class="kt-login__content">
					<h4><?php echo $menu.' - '.$submenu; ?></h4>
					<br>
					<br>
					<div class="form-group">
						<input type="text" class="form-control"  placeholder="Nama Kantor/ Instansi" required="" name="nama_kantor">
						<span class="form-text text-muted"></span>
					</div>
					<div class="form-group">
						<input type="email" class="form-control"  placeholder="Email" required="" name="email">
						<span class="form-text text-muted"></span>
					</div>
					<div class="form-group">
						<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
							<option value="0">-Pilih Jenis Kelamin-</option>
							<option value="1">Laki - Laki</option>
							<option value="2">Perempuan</option>
						</select>
					</div>
					<div class="col-md-6">
						<div class="card" style="min-height: 70px; margin-bottom:20px;padding:10px; min-width: 70px;">
							<img src="" alt="" id="img-prev" class="img-thumbnail">
						</div>
						<div class="form-group">
							<!-- <input type="file" class="form-control" id="img-load" name="foto" onchange="previewimg();"> -->
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="img-load" name="foto" onchange="previewimg();">
								<label class="custom-file-label" for="customFile">Foto</label>
							</div>
							<label>Max. 2Mb png | jpg | jpeg</label>
						</div>
					</div>
					<div class="kt-login__actions">
						<!-- <button id="kt_login_signin_submit" class="btn btn-brand btn-pill btn-elevate">Register</button> -->
						<input type="submit" value="Register" id="kt_login_signin_submit" class="btn btn-brand btn-pill btn-elevate">
					</div>
				</div>	 
			</div>
		</div> 
	</form>
	</div>
</div>		 	
</div>


<script type="text/javascript">
	function previewimg(){
		document.getElementById('img-prev').style.display = "block";
		var oFread = new FileReader();
		oFread.readAsDataURL(document.getElementById('img-load').files[0]);

		oFread.onload = function(ofevent){
			document.getElementById('img-prev').src = ofevent.target.result;
		}
	}
	$(document).ready(function(){

		$('#provinsi').change(function(){
			var provinsi = $('#provinsi').val();
			$.ajax({
				url: '<?php base_url() ?>ambilkota',
				data: 'provinsi='+provinsi,
				cache: false,
				success: function(msg){
					//jika data success diambil dari server kita tampilkan di <select id=kota>
					$('#kabkot').html(msg);
					console.log(msg);
				}
			});
		});
		$('#kabkot').change(function(){
			var kota = $('#kabkot').val();
			$.ajax({
				url: '<?php base_url() ?>ambilkecamatan',
				data: 'kota='+kota,
				cache: false,
				success: function(msg){
					//jika data success diambil dari server kita tampilkan di <select id=kota>
					$('#kec').html(msg);
				}
			});
		});


	});
</script>
	
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
                            <!-- <script src="<?php echo base_url(); ?>template/assets2/js/demo1/pages/login/login-general.js" type="text/javascript"></script> -->
                        <!--end::Page Scripts -->

        <!--end::Page Scripts -->
            </body>
    <!-- end::Body -->
</html>
