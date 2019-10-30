<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Permohonan Narasumber
			</h3>
		</div>
	</div>
	<!-- awal -->
		<div class="kt-portlet__body">
			
			<form  action="<?php echo base_url() ?>admin/send_email_attach" method="post" enctype="multipart/form-data" id="frm2">
				<div class="form-group">
					<select class="form-control" id="narasumber" name="narasumber">
						<option value="0">-Pilih Email Narasumber-</option>
						<?php foreach($list_email_narasumber->result() as $list){ ?>
							<option value="<?php echo $list->email_narasumber ?>"><?php echo $list->nama_narasumber."- ".$list->email_narasumber ?></option>
						<?php } ?>
					</select>
				</div>
				<div id="d">
					<div class="form-group">
						<span class="form-text text-muted">Subject Email</span>
						<input type="text" class="form-control"  placeholder="Subject Email" required="" name="subject">
					</div>
					<div class="form-group">
						<label for="exampleTextarea">Detail Email</label>
						<textarea class="form-control" id="exampleTextarea" rows="3" required="" name="isi_email"></textarea>
					</div>
					<div class="form-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="surat" name="surat">
							<label class="custom-file-label" for="customFile">Upload Surat</label>
						</div>
					</div>
					<div class="kt-form__actions">
						<!-- <a class="btn btn-default">Edit</a> -->
					</div>
					<div class="row" id="e">
						<div class="col-md-12">
								<span class="form-text text-muted">Preview Surat</span>
							<div class="card" style="height: 500px; margin:20px;padding:10px;" id="x_show">
									<!-- <?php 
									$google = 'https://docs.google.com/viewer?url=';
									$file = base_url().$detail->cv; 
									$c = '&embedded=true';

									// echo $google.$file.$c;
									
									?>
									<iframe src="<?php echo $google.$file.$c ?>" style="width:300px; height:300px;" frameborder="0"></iframe> -->
							</div>
						</div>
					</div>
				</div>

				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<button type="submit" class="btn btn-primary">Send Email</button>
					</div>
				</div>
			</form>
		</div>
		<!-- akhir -->
		
</div>

<script>
$(document).ready(function(){
	$('#d').hide();
	$('#e').hide();
	$('#narasumber').change(function(){
		var email = $('#narasumber').val();
		if(email != 0){
			$('#d').show();
		}
	});

	$('#surat').change(function(){
		var email = $('#narasumber').val();
		event.preventDefault();
		// Get form
        var form = $('#frm2')[0];

		// Create an FormData object 
        var data = new FormData(form);
		$.ajax({
			type: "POST",
            enctype: 'multipart/form-data',
            url: '<?php echo base_url()?>admin/save_temp_permohonan_narasumber',
            data: data,
			dataType: 'JSON',
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
			success: function (res){
				// console.log(res.status);
				if(res.status=='0'){
					// console.log("Produk Belum Dipilih");
					alert("Narasumber Belum Dipilih!");
					// window.location.href=base_url('admin/permohonan_narasumber');
									}else if(res.status=='1'){
					// console.log("Template Belum Dipilih");
					alert("Surat Belum Dipilih!");
					// window.location.href=base_url('admin/permohonan_narasumber');
									}else if(res.status=='3'){
					// console.log("Data Gagal Disimpan!");
					alert("Data Gagal Disimpan!");
					// window.location.href=base_url('admin/permohonan_narasumber');
									}else{
					// console.log("Data Berhasil Disimpan!");
					alert('Data Berhasil Sincronisasi Google Docs!');
					$('#e').show();
					$('#x_show').html(`<iframe src="<?php echo $google.$file.$c ?>" style=" height:500px;" frameborder="0"></iframe><input type="hidden" name="last_id" value="`+res.key+`">`);
					// window.location.href=base_url('admin/permohonan_narasumber');
									}
			console.log(email);
			}
		});

	}
	);
});
</script>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>