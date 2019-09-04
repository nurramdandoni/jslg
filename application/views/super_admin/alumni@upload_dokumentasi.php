<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Upload Dokumentasi
			</h3>
		</div>
	</div>
	<!--begin::Form-->
	<div class="row">
		<div class="col-md-6">
			<div class="kt-portlet__body">
				<form class="kt-form">
					<div class="form-group">
						<input type="text" class="form-control"  placeholder="Nama" required="">
						<span class="form-text text-muted"></span>
					</div>
					<div class="form-group">
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="customFile">
						<label class="custom-file-label" for="customFile">Images</label>
					</div>
					</div>
					<div class="kt-portlet__foot">
						<div class="kt-form__actions">
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				
				<!--end::Form-->	
			</div>
		</div>
		<div class="col-md-3">
			<div class="kt-portlet__body">
				<div class="form-group">
					<select class="form-control" id="narasumber_diklat">
						<option value="0">-Pilih Batch-</option>
						<option value="1">Batch 1</option>
						<option value="2">Batch 2</option>
					</select>
				</div>
			</div>
		</div>
		<div class="col-md-3">
		</div>
		</form>
	</div>
		
</div>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>