<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Create Produk
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
			<input type="text" class="form-control"  placeholder="Nama Diklat" required="">
			<span class="form-text text-muted"></span>
			</div>
			<div class="form-group">
				<select class="form-control" id="kategori_diklat">
					<option value="0">-Pilih Kategori Diklat-</option>
					<option value="1">Legal Drafting</option>
					<option value="2">Auditor Hukum</option>
					<option value="3">Legislative Drafting</option>
					<option value="4">Pengacara Pajak</option>
					<option value="5">Legal Tech</option>
				</select>
			</div>
			<div class="form-group">
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="customFile">
					<label class="custom-file-label" for="customFile">Upload Image</label>
				</div>
			</div>
			<div class="form-group">
				<input type="text" class="form-control"  placeholder="Harga Diskon" required="">
				<span class="form-text text-muted"></span>
			</div>
			<div class="kt-portlet__foot">
				<div class="kt-form__actions">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
	</form>
	<!--end::Form-->			
</div>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>