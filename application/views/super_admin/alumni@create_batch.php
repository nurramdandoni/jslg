<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Create Batch
			</h3>
		</div>
	</div>
	<!-- awal -->
		<div class="kt-portlet__body">
			<form method="post" action="<?php echo base_url()?>admin/save_create_batch" enctype="multipart/form-data">
				<div class="form-group">
				<input type="text" class="form-control"  placeholder="Nama Batch" required="" name="nama_batch">
				<span class="form-text text-muted"></span>
				</div>
				<div class="form-group">
						<select class="form-control" id="pilih_diklat" name="id_produk">
							<option value="0">-Pilih Produk-</option>
							<?php foreach($list_produk->result() as $produk){ ?>
								<option value="<?php echo $produk->id_produk; ?>">
									<?php echo $produk->nama_kategori_produk." - ".$produk->nama_produk; ?>
								</option>
							<?php } ?>
						</select>
					</div>
				<div class="form-group">
				<input type="text" class="form-control"  placeholder="Deskripsi" required="" name="deskripsi">
				<span class="form-text text-muted"></span>
				</div>
				<div class="form-group">
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="customFile" name="file">
					<label class="custom-file-label" for="customFile">Upload Data Alumni</label><span> *.csv</span>
				</div>
				</div>
			<div class="kt-portlet__foot">
				<div class="kt-form__actions">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<a href="<?php echo base_url()?>format_csv/format_alumni.xlsx" class="btn btn-primary">Download Format</a>
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