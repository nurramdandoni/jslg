<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
		<div class="kt-portlet__body">
			<div class="row">
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Legal Drafting
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Auditor Hukum
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Legislative
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Pengacara Pajak
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Legal Tech
					</div>
				</div>
			</div>
		</div>
</div>
<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>