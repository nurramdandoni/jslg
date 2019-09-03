<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Create Date
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
				<select class="form-control" id="pilih_diklat">
					<option value="0">-Pilih Diklat-</option>
					<option value="1">nama diklat 1</option>
					<option value="2">nama diklat 2</option>
					<option value="3">nama diklat 3</option>
					<option value="4">nama diklat 4</option>
					<option value="5">nama diklat 5</option>
				</select>
			</div>
			<div class="form-group">
				<input type="date" class="form-control" required="">
				<span class="form-text text-muted"></span>
			</div>
			<div class="form-group">
				<input type="text" class="form-control"  placeholder="Nama Tempat" required="">
				<span class="form-text text-muted"></span>
			</div>
			<div class="form-group">
				<input type="number" class="form-control"  placeholder="Kapasitas Ruangan" required="">
				<span class="form-text text-muted"></span>
			</div>
			<div class="row">
					<div class="col-md-6">
						<div class="card" style="height: 200px; margin:20px;padding:10px;">
						Preview Maps
						</div>
					</div>
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