<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu_peserta');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Profile
			</h3>
		</div>
	</div>
	<!--begin::Form-->
	<div class="row">
		<div class="col-md-4">
			<div class="kt-portlet__body">
				<form class="kt-form">
					<div>
					<label>Nama Materi</label>
				</div>
					<center>
					<div class="form-group">
						<div class="card" style="height: 150px; width: 150px;">
						Image
						</div>
					</div>
					</center>
				</form>
				<!--end::Form-->	
			</div>
		</div>
		<div class="col-md-8">
			<div class="kt-portlet__body">
				<div>
					<label>Deskripsi :</label>
					<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</div>
				</div>
				<br>
				<div>
					<label>Pemateri :</label>
					<span>Nama Pemateri</span>
				</div>
				
				<div class="form-group">
					<div class="kt-form__actions">
						<button type="submit" class="btn btn-primary" style="width:200px;">Pilih</button>
					</div>
				</div>
				<div class="form-group">
					<div class="kt-form__actions">
						<button type="submit" class="btn btn-primary" style="width:200px;" disabled="">Download Materi</button>
					</div>
				</div>
				<div class="form-group">
					<div class="kt-form__actions">
						<button type="submit" class="btn btn-primary" style="width:200px;" disabled="">Mulai Essay</button>
					</div>
				</div>
			</div>
		</div>
	</div>
		
</div>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>