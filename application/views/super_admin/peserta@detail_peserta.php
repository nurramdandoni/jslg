<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Detail Peserta
			</h3>
		</div>
	</div>
	<!--begin::Form-->
	<div class="row">
		<div class="col-md-4">
			<div class="kt-portlet__body">
				<form class="kt-form">
					<center>
					<div class="form-group">
						<div class="card" style="height: 150px; width: 150px;">
						foto
						</div>
					</div>
					</center>
				</form>
				<!--end::Form-->	
			</div>
		</div>
		<div class="col-md-4">
			<div class="kt-portlet__body">
				<div>
					<label>Nama :</label>
					<span>Namanya, S.T</span>
				</div>
				<div>
					<label>NIK :</label>
					<span>3207100703920001</span>
				</div>
				<div>
					<label>Tempat Lahir :</label>
					<span>Bandung</span>
				</div>
				<div>
					<label>Tanggal Lahir :</label>
					<span>07 Maret 1992 </span>
				</div>
				<div>
					<label>Alamat :</label>
					<span>Bandung </span>
				</div>
				<div>
					<label>Nama Kantor/ Instansi :</label>
					<span>BUMN </span>
				</div>
				<div>
					<label>Jabatan/ Pekerjaan :</label>
					<span>Designer </span>
				</div>
				<div>
					<label>Pendidikan :</label>
					<span>S1 </span>
				</div>
				<div>
					<label>Telepon :</label>
					<span>089xxxx</span>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="kt-portlet__body">
				<div>
					<label>Email :</label>
					<span>namanya@gmail.com</span>
				</div>
				<div>
					<label>Jenis Kelamin :</label>
					<span>Laki - laki</span>
				</div>
				<div class="form-group">
						<div class="kt-form__actions">
								<button type="submit" class="btn btn-primary">Edit</button>
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