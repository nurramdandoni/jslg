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
					<?php foreach($list_calon_peserta->result() as $calon){ ?>
					<tr>
						<td><?php echo $calon->nik_peserta ?></td>
				  		<td><?php echo $calon->nama_peserta ?></td>
				  		<td><?php echo $calon->email_peserta ?></td>
				  		<td><?php echo $calon->id_kategori_peserta ?></td>
				  		<td>
							  <div class="card" style="min-height: 70px; margin-bottom:10px;padding:10px; max-width: 100%;">
							  <a href="<?php echo base_url()?><?php echo $calon->bukti_pembayaran ?>" data-fancybox="gallery">

								  <img src="<?php echo base_url()?><?php echo $calon->bukti_pembayaran ?>" alt="" id="img-prev" class="img-thumbnail" width="100%">
								</a>
							</div>
						  </td>
				  		<td><a class="btn btn-primary" href="<?php echo base_url()?>admin/approve_kepesertaan/<?php echo $calon->id_peserta ?>">Approve</a></td>
				  		<td><?php echo $calon->status_kepesertaan ?></td>
					</tr>
					<?php } ?>
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