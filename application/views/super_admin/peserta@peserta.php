<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Peserta
			</h3>
		</div>
	</div>
	<!-- awal -->
	<div class="kt-portlet kt-portlet--mobile">
		<div class="kt-portlet__body">
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
				  		<td>Dadang</td>
				  		<td>3207100703920001</td>
				  		<td>dadang@gmail.com</td>
				  		<td>089xxxxx</td>
				  		<td><a href="<?php echo base_url() ?>admin/detail_peserta">Detail</a> | Update | Delete</td>
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