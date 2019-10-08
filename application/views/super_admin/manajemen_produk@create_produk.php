<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Create Produk
			</h3>
		</div>
	</div>
	<!--begin::Form-->
	<form action="<?php echo base_url()?>admin/save_create_produk" method="post" enctype="multipart/form-data">
		<div class="kt-portlet__body">
			<div class="form-group form-group-last">
				<!-- <div class="alert alert-secondary" role="alert">
					<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
						<div class="alert-text">Info sukses!
						</div>
					</div>
				</div> -->
			<div class="form-group">
			<input type="text" class="form-control" name="NamaDiklat"  placeholder="Nama Diklat" required="">
			<span class="form-text text-muted"></span>
			</div>
			<div class="form-group">
				<select class="form-control" id="kategori_diklat" name="KategoriDiklat">
					<option value="0">-Pilih Kategori Diklat-</option>
					<?php foreach($kategori_produk->result() as $kategori){ ?>
						<option value="<?php echo $kategori->id_kategori_produk; ?>"><?php echo $kategori->nama_kategori_produk; ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<div class="custom-file">
					<input type="file" class="custom-file-input" name="img" id="img-load" onchange="previewimg();">
					<label class="custom-file-label" for="customFile">Upload Image</label>
				</div>
			</div>
			<label>Max. 2Mb png | jpg | jpeg</label>
			<div class="card" style="min-height: 70px; margin-bottom:20px;padding:10px; min-width: 70px;">
				<img src="" alt="" id="img-prev" class="img-thumbnail">
			</div>
			
			<div class="form-group">
				<input type="text" class="form-control" name="HargaDiskon"  placeholder="Harga Diskon" required="">
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

<script>
	function previewimg(){
			document.getElementById('img-prev').style.display = "block";
			var oFread = new FileReader();
			oFread.readAsDataURL(document.getElementById('img-load').files[0]);

			oFread.onload = function(ofevent){
				document.getElementById('img-prev').src = ofevent.target.result;
			}
		}
</script>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>