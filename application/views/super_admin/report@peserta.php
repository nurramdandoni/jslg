<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Daftar Peserta
			</h3>
		</div>
	</div>
	<!-- awal -->
	<div class="kt-portlet kt-portlet--mobile">
		<div class="kt-portlet__head kt-portlet__head--lg">
			<div class="kt-portlet__head-toolbar">
	            <div class="kt-portlet__head-wrapper">
				<div class="kt-portlet__head-actions">
					<a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
						<i class="la la-download"></i>
						Download CSV
					</a>
				</div>	
				</div>
			</div>
		</div>
		<div class="kt-portlet__body">
			<!--begin: Datatable -->
			<div class="table-responsive">
			<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
				<thead>
					<tr>
				  		<th>Nama</th>
				  		<th>NIK</th>
				  		<th>Tempat Lahir</th>
				  		<th>Tanggal Lahir</th>
				  		<th>Alamat</th>
				  		<th>Nama Kantor/Instansi</th>
				  		<th>Jabatan Pekerjaan</th>
				  		<th>Pendidikan</th>
				  		<th>Telepon</th>
				  		<th>Email</th>
				  		<th>Jenis Kelamin</th>
				  		<th>Aksi</th>
				  	</tr>
				</thead>
				<tbody>
					<tr>
						<td>Fauzi</td>
				  		<td>3209xxx</td>
				  		<td>Bandung</td>
				  		<td>23 jan 1992</td>
				  		<td>Bandung</td>
				  		<td>Bea Cukai</td>
				  		<td>Pranata</td>
				  		<td>S1</td>
				  		<td>085xxx</td>
				  		<td>fauzi@gmail.com</td>
				  		<td>Laki -laki</td>
				  		<td>Detail | Update | Delete</td>
					</tr>
				</tbody>
			</table>
			</div>
			<!--end: Datatable -->
		</div>
	</div>
	<!-- akhir -->
</div>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>