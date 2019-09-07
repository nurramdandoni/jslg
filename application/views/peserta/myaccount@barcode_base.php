<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu_peserta');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Barcode Base
			</h3>
		</div>
	</div>
	<!--begin::Form-->
	<div class="row">
		<div class="col-md-4">
			<div class="kt-portlet__body">
				
			</div>
		</div>
		<div class="col-md-4">
			<div class="kt-portlet__body" style="align-items: center;">
				<h5>Scan</h5>
				<img src="<?php echo base_url() ?>template/assets2/qr/qr_jimly.png">
			</div>
		</div>
		<div class="col-md-4">
			<div class="kt-portlet__body">
				
			</div>
		</div>
	</div>
		
</div>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>