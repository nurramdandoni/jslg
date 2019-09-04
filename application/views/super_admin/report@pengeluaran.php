<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Pengeluaran
			</h3>
		</div>
	</div>
	<!--begin::Form-->
	<div class="row">
		<div class="col-md-6">
			<div class="kt-portlet__body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="date" class="form-control" required="">
							<span class="form-text text-muted"></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						<input type="date" class="form-control" required="">
						<span class="form-text text-muted"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="kt-portlet__body">
				<span>Total Pemasukan : 400000</span>
			</div>
		</div>
		<div class="col-md-4">
			<div class="kt-portlet__body">
				<span>Total Pengeluaran : 400000</span>
			</div>
		</div>
		<div class="col-md-4">
			<div class="kt-portlet__body">
				<span>Margin : 400000</span>
			</div>
		</div>
	</div>
	<div class="kt-portlet__head-actions col-md-4">
		<div class="form-group" style="margin:20px;">
			<select class="form-control" id="diklat">
				<option value="0">--Pilih Nama Diklat--</option>
				<option value="1">diklat 1</option>
			</select>
		</div>
	</div>
	<div class="kt-portlet__body">
			<!--begin: Datatable -->
			<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
				<thead>
					<tr>
				  		<th>Nama Diklat</th>
				  		<th>Nama Pemasukan</th>
				  		<th>Nominal</th>
				  		<th>Nama Pengeluaran</th>
				  		<th>Nominal</th>
				  	</tr>
				</thead>
				<tbody>
					<tr>
				  		<td>Legal Tech</td>
				  		<td>Tersing pemasukan</td>
				  		<td>300000</td>
				  		<td>Testing pengeluaran</td>
				  		<td>500000</td>
				  	</tr>
				</tbody>
			</table>
			<!--end: Datatable -->
		</div>
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<div class="kt-portlet__body">
				<span>Jumlah Pemasukan : 400000</span>
			</div>
		</div>
		<div class="col-md-4">
			<div class="kt-portlet__body">
				<span>Jumlah Pengeluaran : 400000</span>
			</div>
		</div>
	</div>
		
</div>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>