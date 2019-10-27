<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Upload Dokumentasi
			</h3>
		</div>
	</div>
	<!--begin::Form-->
	<form action="<?php echo base_url() ?>admin/save_upload_dokumentasi" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-6">
			<div class="kt-portlet__body">
					<div class="form-group">
						<input type="text" class="form-control"  placeholder="Nama" required="" name="nama_dokumentasi">
						<span class="form-text text-muted"></span>
					</div>
					<div class="form-group">
					<div class="custom-file">
						<input type="file" class="custom-file-input" name="file" id="img-load" onchange="previewimg();">
						<label class="custom-file-label" for="customFile"></label>
					</div>
					<label>Max. 2Mb png | jpg | jpeg</label>
					<div class="card" style="min-height: 70px; margin-bottom:20px;padding:10px; min-width: 70px;">
						<img src="" alt="" id="img-prev" class="img-thumbnail">
					</div>
					</div>
					<div class="kt-portlet__foot">
						<div class="kt-form__actions">
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				
				<!--end::Form-->	
			</div>
		</div>
		<div class="col-md-3">
			<div class="kt-portlet__body">
				<div class="form-group">
					<select class="form-control" id="id_batch" name="id_batch">
						<option value="0">-Pilih Batch-</option>
						<?php foreach($list_batch->result() as $batch){ ?>
							<option value="<?php echo $batch->id_batch; ?>">
								<?php echo $batch->nama_batch; ?>
							</option>
						<?php } ?>
					</select>
				</div>
			</div>
		</div>
		<div class="col-md-3">
		</div>
	</div>
</form>
		
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