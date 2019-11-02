<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Peserta
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
				  		<th>Nama Lengkap</th>
				  		<th>NIK</th>
				  		<th>Email</th>
				  		<th>Nama Diklat</th>
				  		<th>Kategori</th>
				  		<th>Telepon</th>
				  		<th>Aksi</th>
				  	</tr>
				</thead>
				<tbody>
					<?php foreach($list_peserta_list->result() as $peserta){ ?>
					<tr>
				  		<td><?php echo $peserta->nama_peserta ?></td>
				  		<td><?php echo $peserta->nik_peserta ?></td>
				  		<td><?php echo $peserta->email_peserta ?></td>
						  <td><?php echo $peserta->nama_produk ?></td>
						  <td><?php echo $peserta->id_kategori_peserta ?></td>
				  		<td><?php echo $peserta->telp_peserta ?></td>
				  		<td><a href="<?php echo base_url() ?>admin/detail_peserta/<?php echo $peserta->id_peserta ?>">Detail</a> | Update | Delete</td>
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