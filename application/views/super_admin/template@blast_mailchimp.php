<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Blast Mailchimp
			</h3>
		</div>
	</div>
	<!-- awal -->
		<div class="kt-portlet__body">
			<div class="row">
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Legal Drafting
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Auditor Hukum
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Legislative
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Pengacara Pajak
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Legal Tech
					</div>
				</div>
			</div>
		</div>
		<div class="kt-portlet__body">
			<!--begin: Datatable -->
			<div class="checkbox">
			  <label><input type="checkbox" value="">Check All</label>
			</div>
			<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
				<thead>
					<tr>
				  		<th>Nama User</th>
				  		<th>Email</th>
				  		<th>Aksi</th>
				  	</tr>
				</thead>
				<tbody>
					<tr>
						<td>Irpan Setaiana</td>
						<td>Setiana@gmail.com</td>
						<td><input type="checkbox" value=""></td>
					</tr>
				</tbody>
			</table>
			<!--end: Datatable -->
			<form>
				<div class="form-group">
				<input type="text" class="form-control"  placeholder="Subject Email" required="">
				<span class="form-text text-muted"></span>
				</div>
				<div class="form-group form-group-last">
							<label for="exampleTextarea">Detail Email</label>
							<textarea class="form-control" id="exampleTextarea" rows="3" required=""></textarea>
						</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<button type="submit" class="btn btn-primary">Buat Email</button>
					</div>
				</div>
			</form>
		</div>
		<!-- akhir -->
		
</div>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>