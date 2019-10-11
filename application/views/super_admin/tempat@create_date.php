<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Create Date
			</h3>
		</div>
	</div>
	<!--begin::Form-->
	<form action="<?php echo base_url()?>admin/save_create_date" method="post">
		<div class="kt-portlet__body">
			<!-- <div class="form-group form-group-last">
				<div class="alert alert-secondary" role="alert">
					<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
						<div class="alert-text">Info sukses!
						</div>
					</div>
				</div> -->
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
				<input type="date" class="form-control" required="" name="tanggal">
				<span class="form-text text-muted"></span>
			</div>
			<div class="form-group">
				<input type="text" class="form-control"  placeholder="Nama Tempat" required="" name="nama_tempat">
				<span class="form-text text-muted"></span>
			</div>
			<div class="form-group">
				<input type="number" class="form-control"  placeholder="Kapasitas Ruangan" required="" name="kapasitas">
				<span class="form-text text-muted"></span>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="card" style="height: 200px; margin:20px;padding:10px;">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5738365947964!2d106.8217226143099!3d-6.187740562347541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f425e1bb5c07%3A0x557c23d6dc2ef837!2sJimly%20School%20Of%20Law%20And%20Government!5e0!3m2!1sen!2sid!4v1570696856676!5m2!1sen!2sid"  height="200px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
			<div class="kt-portlet__foot">
				<div class="kt-form__actions">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->			
</div>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>