<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Calon Peserta
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
				  		<th>NIK</th>
				  		<th>Nama</th>
				  		<th>Email</th>
				  		<th>Kategori</th>
				  		<th>Bukti Bayar Asli</th>
				  		<th>Aksi</th>
				  		<th>Status</th>
				  	</tr>
				</thead>
				<tbody>
					<tr>
						<td>3207100703920001</td>
				  		<td>Dadang</td>
				  		<td>dadang@gmail.com</td>
				  		<td>Individu</td>
				  		<td>image.jpg</td>
				  		<td><button class="success">Approve</button></td>
				  		<td>Approval</td>
					</tr>
					<tr>
						<td>3208100703920001</td>
				  		<td>Dani</td>
				  		<td>dani@gmail.com</td>
				  		<td>Instansi</td>
				  		<td>image.jpg</td>
				  		<td><button class="success">Approve</button></td>
				  		<td>Waiting Approval</td>
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