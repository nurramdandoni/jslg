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
			<?php foreach($list_peserta->result() as $data_sertificate){ ?>
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin:20px;padding:5px;background-image:url('<?php echo $data_sertificate->template_img; ?>');background-size:100%;background-repeat:no-repeat;">
					<span style="padding:-3px; border-radius:5px;opacity:0.5;">
						<?php echo $data_sertificate->nama_peserta; ?>
					</span>
						
					</div>
					<div class="kt-form__actions" style="margin:20px;">
					<a class="btn btn-default" onclick="alert('Comming Soon!');">Preview</a>
					<a class="btn btn-default" onclick="alert('Comming Soon!');">Print</a>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
		
</div>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>