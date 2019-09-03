<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Printing Monitor
			</h3>
		</div>
	</div>
	<!-- awal -->
		<div class="kt-portlet__body">
			<div class="row">
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Sertificate Peserta 1
					</div>
					<div class="kt-form__actions">
					<a class="btn btn-default">Preview</a>
					<a class="btn btn-default">Print</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Sertificate Peserta 2
					</div>
					<div class="kt-form__actions">
					<a class="btn btn-default">Preview</a>
					<a class="btn btn-default">Print</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Sertificate Peserta 3
					</div>
					<div class="kt-form__actions">
					<a class="btn btn-default">Preview</a>
					<a class="btn btn-default">Print</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Sertificate Peserta 4
					</div>
					<div class="kt-form__actions">
					<a class="btn btn-default">Preview</a>
					<a class="btn btn-default">Print</a>
					</div>
				</div>
				
			</div>
		</div>
		
</div>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>