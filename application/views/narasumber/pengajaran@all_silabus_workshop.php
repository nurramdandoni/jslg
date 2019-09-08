<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu_narasumber');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				All Silabus Workshop
			</h3>
		</div>
	</div>
	<!-- awal -->
		<div class="kt-portlet__body">
			<div class="row">
				<!-- awal -->
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-6" style="margin-top:30px;">
							<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
								Image 1
							</div>
						</div>
						<div class="col-md-6" style="margin-top:30px;">
							<div>
								<label>Materi :</label>
								<span>Nama Materi 1</span>
							</div>
							<div>
								<label>Status :</label>
								<span>Waiting Approved</span>
							</div>
							<div class="kt-form__actions">
							<a class="btn btn-default" href="<?php echo base_url() ?>peserta/detail_workshop">Detail</a>
							</div>
						</div>
					</div>
				</div>
				<!-- akhir -->
				<!-- awal -->
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-6" style="margin-top:30px;">
							<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
								Image 2
							</div>
						</div>
						<div class="col-md-6" style="margin-top:30px;">
							<div>
								<label>Materi :</label>
								<span>Nama Materi 2</span>
							</div>
							<div>
								<label>Status :</label>
								<span>Approved</span>
							</div>
							<div class="kt-form__actions">
							<a class="btn btn-default" href="<?php echo base_url() ?>peserta/detail_workshop">Detail</a>
							</div>
						</div>
					</div>
				</div>
				<!-- akhir -->
				<!-- awal -->
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-6" style="margin-top:30px;">
							<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
								Image 3
							</div>
						</div>
						<div class="col-md-6" style="margin-top:30px;">
							<div>
								<label>Materi :</label>
								<span>Nama Materi 3</span>
							</div>
							<div>
								<label>Status :</label>
								<span>Approved</span>
							</div>
							<div class="kt-form__actions">
							<a class="btn btn-default" href="<?php echo base_url() ?>peserta/detail_workshop">Detail</a>
							</div>
						</div>
					</div>
				</div>
				<!-- akhir -->
			</div>
			<div class="row">
				<div class="col-md-12">
					<center>
						<div class="kt-form__actions" style="margin:30px;">
							<a class="btn btn-default">More</a>
							</div>
					</center>
				</div>
				
			</div>
		</div>

		<div class="kt-portlet__body">
			<!--begin: Datatable -->
			<div>
			  <label>Daftar Peserta Diklat</label>
			</div>
			<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
				<thead>
					<tr>
				  		<th>NIK</th>
				  		<th>Nama</th>
				  		<th>Email</th>
				  		<th>Kategori</th>
				  	</tr>
				</thead>
				<tbody>
					<tr>
						<td>320708xxx</td>
						<td>Irpan Setaiana</td>
						<td>Setiana@gmail.com</td>
						<td>Individu</td>
					</tr>
					<tr>
						<td>320908xxx</td>
						<td>Rei Andrian</td>
						<td>rei@gmail.com</td>
						<td>Instansi</td>
					</tr>
				</tbody>
			</table>
			<!--end: Datatable -->
		</div>
		
</div>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>