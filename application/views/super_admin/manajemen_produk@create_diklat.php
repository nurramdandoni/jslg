<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Create Diklat
			</h3>
		</div>
	</div>
	<!--begin::Form-->
	<div class="row">
		<div class="col-md-6">
			<div class="kt-portlet__body">
				<form method="post" action="<?php echo base_url()?>admin/save_create_diklat">
					<!-- <div class="alert alert-secondary" role="alert">
						<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
						<div class="alert-text">Info sukses!</div>
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
						<select class="form-control" id="narasumber_diklat" name="id_narsum">
							<option value="0">-Pilih Narasumber-</option>
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
							<option value="0">-Pilih Penyelenggara-</option>
							<?php foreach($list_penyelenggara->result() as $penyelenggara){ ?>
								<option value="<?php echo $penyelenggara->id_penyelenggara; ?>">
									<?php echo $penyelenggara->nama_penyelenggara; ?>
								</option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" id="silabus_diklat" name="id_silabus">
							<option value="0">-Pilih Silabus-</option>
							<?php foreach($list_silabus->result() as $silabus){ ?>
								<option value="<?php echo $silabus->id_silabus; ?>">
									<?php echo $silabus->nama_narasumber." - ".$silabus->nama_silabus; ?>
								</option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<input type="number" class="form-control"  placeholder="Jumlah Sesi" required="" name="jumlah_sesi">
						<span class="form-text text-muted"></span>
					</div>
					<div class="kt-portlet__foot">
						<div class="kt-form__actions">
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</form>
				<!--end::Form-->	
			</div>
		</div>
		<div class="col-md-3">
			<div class="kt-portlet__body">
				<div>
					<label>Nama Narasumber :</label>
					<span id="namanya"></span>
				</div>
				<div>
					<label>Alamat :</label>
					<span id="alamat"></span>
				</div>
				<div>
					<label>Email :</label>
					<span id="email"></span>
				</div>
				<div>
					<label>Keahlian :</label>
					<span id="skill"></span>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="kt-portlet__body">
			<div class="card" style="min-height: 70px; margin-bottom:20px;padding:10px; min-width: 70px;" id="img_narsum">
				
			</div>
			</div>
		</div>
	</div>
		
</div>

<script>
$(document).ready(function(){

	$('#narasumber_diklat').change(function(){
		var id_narsum_v = $('#narasumber_diklat').val();
		console.log(id_narsum_v);
		$.ajax({
				url: '<?php base_url() ?>view_image_narasumber',
				data: 'id='+id_narsum_v,
				cache: false,
				dataType: 'JSON',
				success: function(msg){
					console.log(msg);
					$('#img_narsum').html("<img src='<?php echo base_url()?>"+msg.foto+"' alt='' id='img-prev' class='img-thumbnail'>");
					$('#namanya').html(msg.nama_narasumber);
					$('#alamat').html(msg.alamat_narasumber);
					$('#email').html(msg.email_narasumber);
					$('#skill').html(msg.keahlian_narasumber);
					
				}
			});
		
	});
	
});
</script>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>