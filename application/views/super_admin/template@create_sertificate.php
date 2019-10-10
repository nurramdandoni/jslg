<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Create Setificate
			</h3>
		</div>
	</div>
	<!-- awal -->
		<div class="kt-portlet__body">
			<div class="row">
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Legal Drafting
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Auditor Hukum
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Legislative
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Pengacara Pajak
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Legal Tech
					</div>
				</div>
			</div>
		</div>
		<div class="kt-portlet__body">
			
			<form action="" method="post" enctype="multipart/form-data" id="frm">
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
					<div class="custom-file">
						<input type="file" class="custom-file-input" name="img" id="img-load" onchange="previewimg();">
						<label class="custom-file-label" for="customFile">Upload Setificate</label>
					</div>
				</div>
				<!-- <div class="kt-form__actions">
					<a class="btn btn-default">Edit</a>
				</div> -->
				<div class="row">
					<div class="col-md-12">
						<label>Max. 2Mb png | jpg | jpeg</label>
						<div class="card" style="min-height: 70px; margin-bottom:20px;padding:10px; min-width: 70px;">
							<img src="" alt="" id="img-prev" class="img-thumbnail">
						</div>
					</div>
				</div>
				</form>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<button type="button" class="btn btn-primary" id="id_simpan">Simpan</button>
						<button type="button" class="btn btn-primary" id="id_update">Update</button>
					</div>
				</div>
			
		</div>
		<!-- akhir -->
		
</div>

<script>

$(document).ready(function(){
	$('#id_simpan').click(function(event){

		event.preventDefault();
		// Get form
        var form = $('#frm')[0];

		// Create an FormData object 
        var data = new FormData(form);

		$.ajax({
			type: "POST",
            enctype: 'multipart/form-data',
            url: '<?php echo base_url()?>admin/save_create_sertificate',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
			success: function (res){
				// console.log(res);
				if(res=='0'){
					// console.log("Produk Belum Dipilih");
					alert("Produk Belum Dipilih!");
									}else if(res=='1'){
					// console.log("Template Belum Dipilih");
					alert("Template Belum Dipilih!");
									}else if(res=='3'){
					// console.log("Data Gagal Disimpan!");
					alert("Data Gagal Disimpan!");
									}else{
					// console.log("Data Berhasil Disimpan!");
					alert('Data Berhasil Disimpan!');
									}
			}
		});
		
	});

	$('#id_update').click(function(event){
		event.preventDefault();
		// Get form
		var id = $('#pilih_diklat').val();
		console.log(id);
        var form = $('#frm')[0];

		// Create an FormData object 
        var data = new FormData(form);

		$.ajax({
			type: "POST",
            enctype: 'multipart/form-data',
            url: '<?php echo base_url()?>admin/update_create_sertificate',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
			success: function (res){
				// console.log(res);
				if(res=='0'){
					// console.log("Produk Belum Dipilih");
					alert("Produk Belum Dipilih!");
									}else if(res=='1'){
					// console.log("Template Belum Dipilih");
					alert("Template Belum Dipilih!");
									}else if(res=='3'){
					// console.log("Data Gagal Disimpan!");
					alert("Data Gagal Diperbaharui!");
									}else if(res=='4'){
					// console.log("Data Tidak Ditemukan!");
					alert("Data Tidak Ditemukan!");
									}else{
					// console.log("Data Berhasil Disimpan!");
					alert('Data Berhasil Diperbaharui!');
									}
			}
		});
	});


});

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