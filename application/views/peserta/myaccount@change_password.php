<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu_peserta');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Change Password
			</h3>
		</div>
	</div>
	<!--begin::Form-->
	<form class="kt-form">
		<div class="kt-portlet__body">
			<div class="form-group form-group-last">
				<div class="alert alert-secondary" role="alert">
					<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
						<div class="alert-text">Info sukses!
						</div>
					</div>
				</div>
			<div class="form-group">
				<input type="password" class="form-control"  placeholder="Password Lama" required="">
				<span class="form-text text-muted"></span>
			</div>
			<div class="form-group">
				<input type="password" class="form-control"  placeholder="Password Baru" required="">
				<span class="form-text text-muted"></span>
			</div>
			<div class="form-group">
				<input type="password" class="form-control"  placeholder="Ulangi Password" required="">
				<span class="form-text text-muted"></span>
			</div>
			
			<div class="kt-portlet__foot">
				<div class="kt-form__actions">
					<button type="submit" class="btn btn-primary">Change Password</button>
				</div>
			</div>
	</form>
	<!--end::Form-->			
</div>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>