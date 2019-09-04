<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Permohonan Narasumber
			</h3>
		</div>
	</div>
	<!-- awal -->
		<div class="kt-portlet__body">
			
			<form>
				<div class="form-group">
					<select class="form-control" id="narasumber">
						<option value="0">-Pilih Email Narasumber-</option>
						<option value="1">narasumber 1</option>
						<option value="1">narasumber 2</option>
						<option value="1">narasumber 3</option>
						<option value="1">narasumber 4</option>
					</select>
				</div>
				<div class="form-group">
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="customFile">
						<label class="custom-file-label" for="customFile">Upload Surat</label>
					</div>
				</div>
				<div class="kt-form__actions">
					<a class="btn btn-default">Edit</a>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="card" style="height: 350px; margin:20px;padding:10px;">
						Preview Surat
						</div>
					</div>
				</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<button type="submit" class="btn btn-primary">Send</button>
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