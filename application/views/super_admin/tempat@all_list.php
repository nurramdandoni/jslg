<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				All List
			</h3>
		</div>
	</div>
	<!-- awal -->
	<div class="kt-portlet kt-portlet--mobile">
		<div class="kt-portlet__head kt-portlet__head--lg">
			<div class="kt-portlet__head-toolbar">
	            <div class="kt-portlet__head-wrapper">
				<div class="kt-portlet__head-actions">
					<a href="<?php echo base_url() ?>admin/create_date" class="btn btn-brand btn-elevate btn-icon-sm">
						<i class="la la-plus"></i>
						Create New Date
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
				  		<th>Tanggal</th>
				  		<th>Nama Diklat</th>
				  		<th>Tempat</th>
				  		<th>Kapasitas</th>
				  		<th>Aksi</th>
				  	</tr>
				</thead>
				<tbody>
					<?php foreach($list_jadwal->result() as $jadwal){ ?>
					<tr>
						<td><?php echo $jadwal->tanggal; ?></td>
						<td><?php echo $jadwal->nama_produk; ?></td>
						<td><?php echo $jadwal->nama_tempat; ?></td>
						<td><?php echo $jadwal->kapasitas; ?></td>
						<td>
							<a href="#" data-toggle="modal" data-target="#edit<?php echo $jadwal->id_tempat; ?>">Update</a> | 
							<a  href="<?php echo base_url()?>admin/delete_tempat/<?php echo $jadwal->id_tempat; ?>">Delete</a>
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
<?php foreach($list_jadwal->result() as $jadwal){ ?>
	<div id="edit<?php echo $jadwal->id_tempat; ?>" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		<form method="post" action="<?php echo base_url()?>admin/update_create_date">
		<input type="hidden" value="<?php echo $jadwal->id_tempat; ?>" name="id_tempat">
		<div class="modal-header">
			
			<h4 class="modal-title">Edit Tempat & Jadwal</h4>
		</div>
		<div class="modal-body">
			<!-- awal -->
				<div class="form-group">
					<select class="form-control" id="pilih_diklat" name="id_diklat">
						<option value="<?php echo $jadwal->id_diklat; ?>"><?php echo $jadwal->nama_kategori_produk." - ".$jadwal->nama_produk; ?></option>
						<?php foreach($list_produk->result() as $produk){ ?>
							<option value="<?php echo $produk->id_produk; ?>">
								<?php echo $produk->nama_kategori_produk." - ".$produk->nama_produk; ?>
							</option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="tgl_diklat" required="" name="tanggal" value="<?php echo $jadwal->tanggal_diklat; ?>" disabled="">
					<span class="form-text text-muted"></span>
				</div>
				<div class="form-group">
					<input type="text" class="form-control"  placeholder="Nama Tempat" required="" name="nama_tempat" value="<?php echo $jadwal->nama_tempat; ?>">
					<span class="form-text text-muted"></span>
				</div>
				<div class="form-group">
					<input type="number" class="form-control"  placeholder="Kapasitas Ruangan" required="" name="kapasitas" value="<?php echo $jadwal->kapasitas; ?>">
					<span class="form-text text-muted"></span>
				</div>
				<div class="row">
				<div class="col-md-12">
					<div class="card" style="height: 200px; margin:20px;padding:10px;">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5738365947964!2d106.8217226143099!3d-6.187740562347541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f425e1bb5c07%3A0x557c23d6dc2ef837!2sJimly%20School%20Of%20Law%20And%20Government!5e0!3m2!1sen!2sid!4v1570696856676!5m2!1sen!2sid"  height="200px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>
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

	<script>
	$(document).ready(function(){
		$('#pilih_diklat').change(function(){
			var id_diklat = $('#pilih_diklat').val();

			$.ajax({
				type:'POST',
				data:{id:id_diklat},
				url:'<?php echo base_url()?>admin/cek_id_diklat',
				dataType:'JSON',
				success:function(response){
					console.log(response.tanggal_diklat);
					$('#tgl_diklat').val(response.tanggal_diklat);
				}

			});
		});
	});
	</script>
<?php } ?>

<!-- akhir modal -->

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>