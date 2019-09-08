<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu_peserta');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Silabus
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
					<label>Status :</label>
					<span>Approved</span>
				</div>
				
			</div>
		</div>
	</div>

			<div class="kt-portlet__body">
			<!--begin: Datatable -->
			<div>
			  <label>Peserta</label>
			</div>
			<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
				<thead>
					<tr>
				  		<th>NIK</th>
				  		<th>Nama</th>
				  		<th>Email</th>
				  		<th>Kategori</th>
				  		<th>Aksi</th>
				  	</tr>
				</thead>
				<tbody>
					<tr>
						<td>320708xxx</td>
						<td>Irpan Setaiana</td>
						<td>Setiana@gmail.com</td>
						<td>Individu</td>
						<td><a href="#">Detail</a></td>
					</tr>
					<tr>
						<td>320908xxx</td>
						<td>Rei Andrian</td>
						<td>rei@gmail.com</td>
						<td>Instansi</td>
						<td><a href="#">Detail</a></td>
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