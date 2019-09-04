<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Instansi
			</h3>
		</div>
	</div>
	<!-- awal -->
	<div class="kt-portlet kt-portlet--mobile">
		<div class="kt-portlet__body">
			<div>
				<div>
					<h5>
						<label>Nama Kantor :</label>
						<label>Kantor Contoh</label>
					</h5>
				</div>
				<div>
					<h5>
						<label>Nomor Telepon :</label>
						<label>021xxx</label>
					</h5>
				</div>
			</div>
			<!--begin: Datatable -->
			<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
				<thead>
					<tr>
				  		<th>Nama Lengkap</th>
				  		<th>NIK</th>
				  		<th>Email</th>
				  		<th>Telepon</th>
				  		<th>Aksi</th>
				  	</tr>
				</thead>
				<tbody>
					<tr>
				  		<td>Doni</td>
				  		<td>320710xxxx</td>
				  		<td>doni@gmail.com</td>
				  		<td>021xxx</td>
				  		<td><a href="<?php echo base_url() ?>admin/detail_peserta">Detail</a></td>
					</tr>
					<tr>
				  		<td>Doni2</td>
				  		<td>320710xxxx</td>
				  		<td>doni2@gmail.com</td>
				  		<td>021xxx</td>
				  		<td><a href="<?php echo base_url() ?>admin/detail_peserta">Detail</a></td>
					</tr>
				</tbody>
			</table>
			<!--end: Datatable -->
		</div>
	</div>
	<!-- akhir -->
</div>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>