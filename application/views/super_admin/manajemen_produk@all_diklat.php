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
					<a href="<?php echo base_url() ?>admin/create_diklat" class="btn btn-brand btn-elevate btn-icon-sm">
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
					<?php foreach($list_diklat->result() as $data_diklat){ ?>
						<tr>
							<td><?php echo $data_diklat->tanggal_diklat; ?></td>
							<td><?php echo $data_diklat->nama_produk; ?></td>
							<td><?php echo $data_diklat->nama_kategori_produk; ?></td>
							<td></td>
							<td><?php echo $data_diklat->nama_narasumber; ?></td>
							<td><?php echo "Jumlah Sesi : ".$data_diklat->jumlah_sesi; ?></td>
							<td><?php echo $data_diklat->harga_diskon; ?></td>
							<td>
							<a href="#" data-toggle="modal" data-target="#edit<?php echo $data_diklat->id_diklat; ?>">Update</a> | 
							<a  href="<?php echo base_url()?>admin/delete_diklat/<?php echo $data_diklat->id_diklat; ?>">Delete</a>
							</td>
							
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
<?php foreach($list_diklat->result() as $data_diklat){ ?>
	<div id="edit<?php echo $data_diklat->id_diklat; ?>" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		<form method="post" action="<?php echo base_url()?>admin/update_create_diklat">
		<input type="hidden" value="<?php echo $data_diklat->id_diklat; ?>" name="id_diklat">
		<div class="modal-header">
			
			<h4 class="modal-title">Edit Diklat</h4>
		</div>
		<div class="modal-body">
			<!-- awal form -->
			
					<!-- <div class="alert alert-secondary" role="alert">
						<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
						<div class="alert-text">Info sukses!</div>
					</div> -->
					<div class="form-group">
						<select class="form-control" id="pilih_diklat" name="id_produk">
							<option value="<?php echo $data_diklat->id_produk; ?>"><?php echo "Nama Diklat : ".$data_diklat->nama_produk; ?></option>
							<?php foreach($list_produk->result() as $produk){ ?>
								<option value="<?php echo $produk->id_produk; ?>">
									<?php echo $produk->nama_produk; ?>
								</option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" id="narasumber_diklat" name="id_narsum">
							<option value="<?php echo $data_diklat->id_narasumber; ?>"><?php echo "Narasumber : ".$data_diklat->nama_narasumber; ?></option>
							<?php foreach($list_narasumber->result() as $narasumber){ ?>
								<option value="<?php echo $narasumber->id_narasumber; ?>">
									<?php echo $narasumber->nama_narasumber; ?>
								</option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<input type="datetime-local" class="form-control"  placeholder="tanggal" required="" name="tanggal">
						<span class="form-text text-muted"></span>
					</div>
					<div class="form-group">
						<select class="form-control" id="penyelenggara_diklat" name="id_penyelenggara">
							<option value="<?php echo $data_diklat->id_penyelenggara ?>"><?php echo "Penyelenggara : ".$data_diklat->nama_penyelenggara ?></option>
							<?php foreach($list_penyelenggara->result() as $penyelenggara){ ?>
								<option value="<?php echo $penyelenggara->id_penyelenggara; ?>">
									<?php echo $penyelenggara->nama_penyelenggara; ?>
								</option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" id="silabus_diklat" name="id_silabus">
							<option value="<?php echo $data_diklat->id_silabus ?>"><?php echo "Silabus : ".$data_diklat->nama_silabus ?></option>
							<?php foreach($list_silabus->result() as $silabus){ ?>
								<option value="<?php echo $silabus->id_silabus; ?>">
									<?php echo $silabus->nama_narasumber." - ".$silabus->nama_silabus; ?>
								</option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<input type="number" class="form-control"  placeholder="Jumlah Sesi" required="" name="jumlah_sesi" value="<?php echo $data_diklat->jumlah_sesi ?>">
						<span class="form-text text-muted"></span>
					</div>
				
			<!-- akhir form -->
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