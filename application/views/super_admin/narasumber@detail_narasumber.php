<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Detail Narasumber
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
					<div class="form-group">
						<div class="kt-form__actions">
								<button type="submit" class="btn btn-primary">Approve</button>
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
					<label>Keahlian :</label>
					<span>PHP, Javascript, Design </span>
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
				<div>
					<label>NPWP :</label>
					<span>3536356</span>
				</div>
				<div>
					<label>Portofolio :</label>
					<span>portofolio.jpg </span>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="kt-portlet__body" style="margin-left: 30px;">
				<div class="row">
					<div style="margin:30px;">
						<h5>Pendidikan</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<center>
								<div class="card" style="height: 100px; width: 100px;">
								foto
								</div>
							</center>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<center>
								<div class="card" style="height: 100px; width: 100px;">
								foto
								</div>
							</center>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<center>
								<div class="card" style="height: 100px; width: 100px;">
								foto
								</div>
							</center>
						</div>
					</div>
				</div>
				<div class="row">
					<div style="margin:30px;">
						<h5>Silabus</h5>
					</div>
				</div>
				<div class="row">
					<div>
						<div>Silabus 1</div>
						<div>Silabus 2</div>
						<div>Silabus 3</div>
					</div>
				</div>
				<div class="row">
					<div style="margin:30px;">
						<h5>Penialain Peserta</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div>
							Pertanyaan 1
						</div>
					</div>
					<div class="col-md-4">
						<div>
							Jawaban Pertanyaan 1
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div>
							Pertanyaan 2
						</div>
					</div>
					<div class="col-md-4">
						<div>
							Jawaban Pertanyaan 2
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="col-md-6">
			<div class="kt-portlet__body">
				<center>
					<span>CV</span>
					<div class="form-group">
						<div class="card" style="height: 300px; width: 300px;">
						preview cv
						</div>
					</div>
				</center>
			</div>
		</div>
	</div>
		
</div>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>