<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				All Narasumber
			</h3>
		</div>
	</div>
	<!-- awal -->
	<div class="kt-portlet kt-portlet--mobile">
		<div class="kt-portlet__head kt-portlet__head--lg">
			<div class="kt-portlet__head-toolbar">
	            <div class="kt-portlet__head-wrapper">
				<div class="kt-portlet__head-actions">
					<div class="form-group" style="margin:20px;">
						<select class="form-control" id="narasumber">
							<option value="1">By Waiting Verification</option>
							<option value="1">By Verification</option>
						</select>
					</div>
				</div>	
				</div>
			</div>
		</div>
		<div class="kt-portlet__body">
			<!--begin: Datatable -->
			<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
				<thead>
					<tr>
				  		<th>Nama Narasumber</th>
				  		<th>Keahlian</th>
				  		<th>NPWP</th>
				  		<th>Portofolio</th>
				  		<th>Pendidikan</th>
				  		<th>Verifikasi</th>
				  		<th>Aksi</th>
				  	</tr>
				</thead>
				<tbody>
					<tr>
				  		<td>Dadang</td>
				  		<td>SQL</td>
				  		<td>353536</td>
				  		<td>Portofolio.jpg</td>
				  		<td>S1.jpg S2.jpg S3.jpg</td>
				  		<td>Waiting Verification</td>
				  		<td><a href="">Detail</a>|Update|Delete</td>
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