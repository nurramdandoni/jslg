<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				All Diklat
			</h3>
		</div>
	</div>
	<!-- awal -->
	<div class="kt-portlet kt-portlet--mobile">
		<div class="kt-portlet__head kt-portlet__head--lg">
			<div class="kt-portlet__head-toolbar">
	            <div class="kt-portlet__head-wrapper">
				<div class="kt-portlet__head-actions">
					<a href="<?php echo base_url() ?>jslg/create_diklat" class="btn btn-brand btn-elevate btn-icon-sm">
						<i class="la la-plus"></i>
						Create New Record
					</a>
				</div>	
				</div>
			</div>
		</div>
		<div class="kt-portlet__body">
			<!--begin: Datatable -->
			<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
				<thead>
					<tr>
				  		<th>Tanggal Diklat</th>
				  		<th>Nama Diklat</th>
				  		<th>Jenis Diklat</th>
				  		<th>Kategori Peserta Diklat</th>
				  		<th>Narasumber</th>
				  		<th>Keterangan</th>
				  		<th>Harga Diskon</th>
				  		<th>Aksi</th>
				  	</tr>
				</thead>
				<tbody>
					<tr>
						<td>13-07-2019</td>
						<td>Contoh Nama</td>
						<td>Legal Drafting</td>
						<td>Intansi/ Individu</td>
						<td>Dr. Dadang</td>
						<td>Dokumen</td>
						<td>300000</td>
						<td>Update|Delete</td>
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