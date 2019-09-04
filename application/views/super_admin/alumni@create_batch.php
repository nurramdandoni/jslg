<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Create Batch
			</h3>
		</div>
	</div>
	<!-- awal -->
		<div class="kt-portlet__body">
			<form>
				<div class="form-group">
				<input type="text" class="form-control"  placeholder="Nama Batch" required="">
				<span class="form-text text-muted"></span>
				</div>
				<div class="form-group">
					<select class="form-control" id="narasumber">
						<option value="0">-Pilih Diklat-</option>
						<option value="1">nama diklat 1</option>
						<option value="1">nama diklat 2</option>
						<option value="1">nama diklat 3</option>
						<option value="1">nama diklat 4</option>
					</select>
				</div>
				<div class="form-group">
				<input type="text" class="form-control"  placeholder="Deskripsi" required="">
				<span class="form-text text-muted"></span>
				</div>
				<div class="form-group">
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="customFile">
					<label class="custom-file-label" for="customFile">Upload Data Alumni</label><span> *.csv</span>
				</div>
				</div>
			<div class="kt-portlet__foot">
				<div class="kt-form__actions">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
			</form>
		</div>

		<!-- akhir -->
		
</div>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>