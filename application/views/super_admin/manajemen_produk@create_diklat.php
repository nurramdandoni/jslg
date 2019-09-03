<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

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
					<div class="alert alert-secondary" role="alert">
						<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
						<div class="alert-text">Info sukses!</div>
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
						<select class="form-control" id="narasumber_diklat">
							<option value="0">-Pilih Narasumber-</option>
							<option value="1">narasumber 1</option>
							<option value="2">narasumber 2</option>
						</select>
					</div>
					<div class="form-group">
						<input type="date" class="form-control"  placeholder="tanggal" required="">
						<span class="form-text text-muted"></span>
					</div>
					<div class="form-group">
						<select class="form-control" id="penyelenggara_diklat">
							<option value="0">-Pilih Penyelenggara-</option>
							<option value="1">Penyelenggara</option>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" id="silabus_diklat">
							<option value="0">-Pilih Silabus-</option>
							<option value="1">silabus 1</option>
						</select>
					</div>
					<div class="kt-portlet__foot">
						<div class="kt-form__actions">
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</form>
				<!--end::Form-->	
			</div>
		</div>
		<div class="col-md-3">
			<div class="kt-portlet__body">
				<div>
					<label>Nama Narasumber :</label>
					<span>Namanya</span>
				</div>
				<div>
					<label>Alamat :</label>
					<span>Bandung, Jabar</span>
				</div>
				<div>
					<label>Email :</label>
					<span>jslg@gmail.com</span>
				</div>
				<div>
					<label>Keahlian :</label>
					<span>SQL, Design</span>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="kt-portlet__body">
				<div class="card" style="height: 100px; width: 100px;">
					foto
				</div>
			</div>
		</div>
	</div>
		
</div>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>