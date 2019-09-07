<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu_peserta');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Create Diklat
			</h3>
		</div>
	</div>
	<!--begin::Form-->
	<div class="row">
		<div class="col-md-6">
			<div class="kt-portlet__body">
				<form class="kt-form">
					
					<div class="form-group">
						<input type="text" class="form-control"  placeholder="Nama Bank" required="">
						<span class="form-text text-muted"></span>
					</div>
					<div class="form-group">
						<input type="number" class="form-control"  placeholder="Nominal Transfer" required="">
						<span class="form-text text-muted"></span>
					</div>
					<div class="form-group">
						<input type="text" class="form-control"  placeholder="referensi Kode" required="">
						<span class="form-text text-muted"></span>
					</div>
					<div class="kt-form__actions">
						<button type="submit" class="btn btn-primary">Send</button>
					</div>
				</form>
				<!--end::Form-->	
			</div>
		</div>
		<div class="col-md-6">
			<div class="kt-portlet__body">
				<div class="form-group">
						<input type="text" class="form-control"  placeholder="Account Name" required="">
						<span class="form-text text-muted"></span>
					</div>
					<div class="form-group">
						<input type="text" class="form-control"  placeholder="Account Number" required="">
						<span class="form-text text-muted"></span>
					</div>
					<div class="form-group">
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="customFile">
						<label class="custom-file-label" for="customFile">Upload Bukti Transfer</label>
					</div>
				</div>
			</div>
		</div>
	</div>
		
</div>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>