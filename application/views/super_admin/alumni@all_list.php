<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				All Alumni
			</h3>
		</div>
	</div>
	<!-- awal -->
	<div class="kt-portlet kt-portlet--mobile">
		<div class="kt-portlet__head kt-portlet__head--lg">
			<div class="kt-portlet__head-toolbar">
	            <div class="kt-portlet__head-wrapper">
				<div class="kt-portlet__head-actions">
					<a href="<?php echo base_url() ?>admin/create_batch" class="btn btn-brand btn-elevate btn-icon-sm">
						<i class="la la-plus"></i>
						Create Batch
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
				  		<th>Nama Batch</th>
				  		<th>Nama Alumni</th>
				  		<th>Angkatan Tahun</th>
				  		<th>Instansi</th>
				  		<th>Diklat</th>
				  		<th>Aksi</th>
				  	</tr>
				</thead>
				<tbody>
				<?php foreach($list_alumni->result() as $alumni){ ?>
					<tr>
						<td><?php echo $alumni->nama_batch ?></td>
						<td><?php echo $alumni->nama_alumni ?></td>
						<td><?php echo $alumni->angkatan_alumni ?></td>
						<td><?php echo $alumni->instansi_alumni ?></td>
						<td><?php echo $alumni->nama_produk ?></td>
						<td><a href="#" data-toggle="modal" data-target="#edit<?php echo $alumni->id_alumni; ?>">Update</a></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			<!--end: Datatable -->
		</div>
	</div>
	<!-- akhir -->
</div>



<!-- awal modal -->
<?php foreach($list_alumni->result() as $alumni){ ?>
	<div id="edit<?php echo $alumni->id_alumni; ?>" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		<form method="post" action="<?php echo base_url()?>admin/update_create_batch">
		<input type="hidden" value="<?php echo $alumni->id_alumni ?>" name="id_alumni">
		<div class="modal-header">
			
			<h4 class="modal-title">Edit Alumni</h4>
		</div>
		<div class="modal-body">
			<!-- awal -->
				<div class="form-group">
					<select class="form-control" id="pilih_batch" name="id_batch">
						<option value="<?php echo $alumni->id_batch ?>"><?php echo $alumni->nama_batch ?></option>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="nama_alumni" required="" name="nama_alumni" value="<?php echo $alumni->nama_alumni ?>" placeholder="Nama Alumni">
					<span class="form-text text-muted"></span>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="angkatan_tahun" required="" name="angkatan_tahun" value="<?php echo $alumni->angkatan_alumni ?>" placeholder="Angkatan Tahun">
					<span class="form-text text-muted"></span>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="instansi_alumni" required="" name="instansi_alumni" value="<?php echo $alumni->instansi_alumni ?>" placeholder="Instansi">
					<span class="form-text text-muted"></span>
				</div>
			<!-- akhir -->
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Update</button>
		</div>
	</form>
		</div>
	

	</div>
	</div>
<?php } ?>

<!-- akhir modal -->

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>