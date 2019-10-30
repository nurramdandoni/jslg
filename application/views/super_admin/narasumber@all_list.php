<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				All Narasumber
			</h3>
		</div>
	</div>
	<!-- awal -->
	<div class="kt-portlet kt-portlet--mobile">
		<div class="kt-portlet__head kt-portlet__head--lg">
			<div class="kt-portlet__head-toolbar">
	            <div class="kt-portlet__head-wrapper">
				<div class="kt-portlet__head-actions">
					<div class="form-group" style="margin:20px;">
						<select class="form-control" id="status_t">
							<option value="">All</option>
							<option value="Waiting Verification">By Waiting Verification</option>
							<option value="Verified">By Verified</option>
						</select>
					</div>
				</div>	
				</div>
			</div>
		</div>
		<div class="kt-portlet__body">
			<!--begin: Datatable -->
			<div class="table-responsive">
				<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
					<thead>
						<tr>
							  <th>Foto</th>
							  <th>Nama Narasumber</th>
							  <th>Keahlian</th>
							  <th>NPWP</th>
							  <th>Portofolio</th>
							  <th>Pendidikan</th>
							  <th>Verifikasi</th>
							  <th>Aksi</th>
						  </tr>
					</thead>
					<tbody id="list">
					</tbody>
				</table>
			</div>
			<!--end: Datatable -->
		</div>
	</div>
	<!-- akhir -->
</div>

<!-- awal modal -->
<?php foreach($list_narasumber->result() as $narsum){ ?>
	<div id="edit<?php echo $narsum->id_narasumber; ?>" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		<form method="post" action="<?php echo base_url()?>admin/update_narasumber" enctype="multipart/form-data">
		<input type="hidden" value="<?php echo $narsum->id_narasumber; ?>" name="id_narasumber">
		<div class="modal-header">
			
			<h4 class="modal-title">Edit Narasumber</h4>
		</div>
		<div class="modal-body">
			<!-- awal -->
				<div class="row">
					<div class="col-md-4">
					</div>
					<div class="card col-md-4" style="min-height: 70px; margin-bottom:20px;padding:10px; min-width: 70px;">
						<img src="" alt="" id="img-prev<?php echo $narsum->id_narasumber; ?>" class="img-thumbnail">
					</div>
					<div class="col-md-4">
					</div>
				</div>
				<div class="form-group">
					<div class="custom-file">
						<input type="file" class="custom-file-input" name="foto" id="img-load<?php echo $narsum->id_narasumber; ?>" onchange="previewimg('<?php echo $narsum->id_narasumber; ?>')">
						<label class="custom-file-label" for="customFile">Foto Narasumber</label>
					</div>
				</div>
				<div class="form-group">
					<span class="form-text text-muted">Nama Lengkap & Gelar</span>
					<input type="text" class="form-control" id="nama_narasumber" required="" name="nama_narasumber" value="<?php echo $narsum->nama_narasumber; ?>" placeholder="Nama Narasumber">
				</div>
				<div class="form-group">
					<span class="form-text text-muted">Nomor Induk Kependudukan</span>
					<input type="text" class="form-control" id="nik_narasumber" required="" name="nik_narasumber" value="<?php echo $narsum->nik_narasumber; ?>" placeholder="NIK Narasumber">
				</div>
				<div class="form-group">
					<span class="form-text text-muted">NPWP</span>
					<input type="text" class="form-control" id="npwp_narasumber" required="" name="npwp_narasumber" value="<?php echo $narsum->npwp_narasumber; ?>" placeholder="NPWP Narasumber">
				</div>
				<div class="form-group">
					<span class="form-text text-muted">Tempat Lahir</span>
					<input type="text" class="form-control" id="tempat_lahir_narasumber" required="" name="tempat_lahir_narasumber" value="<?php echo $narsum->tempat_lahir_narasumber; ?>" placeholder="Tempat Lahir Narasumber">
				</div>
				<div class="form-group">
					<span class="form-text text-muted">Tanggal Lahir</span>
					<input type="date" class="form-control" id="tanggal_lahir_narasumber" required="" name="tanggal_lahir_narasumber" value="<?php echo $narsum->tanggal_lahir_narasumber; ?>" placeholder="Tanggal Lahir Narasumber">
				</div>
				<div class="form-group">
				<span class="form-text text-muted">Jenis Kelamin</span>
					<select class="form-control" id="jenis_kelamin_narasumber" required="" name="jenis_kelamin_narasumber">
						<option value="<?php echo $narsum->jenis_kelamin_narasumber; ?>">
							<?php echo $narsum->jenis_kelamin_narasumber; ?>
						</option>
						<option value="L">
							L
						</option>
						<option value="P">
							P
						</option>
					</select>
				</div>
				<div class="form-group">
					<span class="form-text text-muted">Alamat</span>
					<textarea class="form-control" name="alamat_narasumber" id="" rows="3" style="text-align: left;">Alamat Narasumber</textarea>
				</div>
				<div class="form-group">
					<span class="form-text text-muted">Email</span>
					<input type="text" class="form-control" id="email_narasumber" required="" name="email_narasumber" value="<?php echo $narsum->email_narasumber; ?>" placeholder="Email Narasumber">
				</div>
				<div class="form-group">
					<span class="form-text text-muted">Keahlian</span>
					<input type="text" class="form-control" id="keahlian_narasumber" required="" name="keahlian_narasumber" value="<?php echo $narsum->keahlian_narasumber; ?>" placeholder="Keahlian Narasumber">
				</div>
				<div class="form-group">
					<span class="form-text text-muted">Portofolio</span>
					<input type="text" class="form-control" id="portofolio_narasumber" required="" name="portofolio_narasumber" value="<?php echo $narsum->portofolio_narasumber; ?>" placeholder="Portofolio Narasumber">
				</div>
				<div class="form-group">
					<span class="form-text text-muted">Pendidikan S1</span>
					<input type="text" class="form-control" id="pendidikan_s1_narasumber" required="" name="pendidikan_s1_narasumber" value="<?php echo $narsum->pendidikan_s1_narasumber; ?>" placeholder="Pendidikan S1 Narasumber">
				</div>
				<div class="form-group">
					<span class="form-text text-muted">Ijazah S1</span>
					<div class="custom-file">
						<input type="file" class="custom-file-input" name="ijazah_s1" id="s1">
						<label class="custom-file-label" for="customFile"></label>
					</div>
				</div>
				<div class="form-group">
					<span class="form-text text-muted">Pendidikan S2</span>
					<input type="text" class="form-control" id="pendidikan_s2_narasumber" required="" name="pendidikan_s2_narasumber" value="<?php echo $narsum->pendidikan_s2_narasumber; ?>" placeholder="Pendidikan S2 Narasumber">
				</div>
				<div class="form-group">
					<span class="form-text text-muted">Ijazah S2</span>
					<div class="custom-file">
						<input type="file" class="custom-file-input" name="ijazah_s2" id="s2">
						<label class="custom-file-label" for="customFile"></label>
					</div>
				</div>
				<div class="form-group">
					<span class="form-text text-muted">Pendidikan S3</span>
					<input type="text" class="form-control" id="pendidikan_s3_narasumber" required="" name="pendidikan_s3_narasumber" value="<?php echo $narsum->pendidikan_s3_narasumber; ?>" placeholder="Pendidikan S3 Narasumber">
				</div>
				<div class="form-group">
					<span class="form-text text-muted">Ijazah S3</span>
					<div class="custom-file">
						<input type="file" class="custom-file-input" name="ijazah_s3" id="s3">
						<label class="custom-file-label" for="customFile"></label>
					</div>
				</div>
				<span class="form-text text-muted">Status Verifikasi</span>
					<select class="form-control" id="status_verifikasi_narasumber" required="" name="status_verifikasi_narasumber">
						<option value="<?php echo $narsum->status_verifikasi_narasumber; ?>">
							<?php echo $narsum->status_verifikasi_narasumber; ?>
						</option>
						<option value="Verified">
							Verified
						</option>
						<option value="Waiting Verification">
							Waiting Verification
						</option>
					</select>
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
		function previewimg(a){
			document.getElementById('img-prev'+a).style.display = "block";
			var oFread = new FileReader();
			oFread.readAsDataURL(document.getElementById('img-load'+a).files[0]);

			oFread.onload = function(ofevent){
				document.getElementById('img-prev'+a).src = ofevent.target.result;
			}
		}
	</script>
<?php } ?>

<!-- akhir modal -->

<script>

$(document).ready(function(){
	var tbl = '';
	$.ajax({
			
            url: '<?php echo base_url()?>admin/list_all_narsum',
            dataType : 'JSON',
			success: function (res){
				$.each(res, function(i, key){
					tbl += `<tr>
				  		<td>
						  <div class="card" style="min-height: 70px; margin-bottom:10px;padding:10px; min-width: 70px;">
						<img src="<?php echo base_url()?>`+key.foto+`" alt="" id="img-prev" class="img-thumbnail" width="100px">
						</div>
						</td>
				  		<td>`+key.nama_narasumber+`</td>
				  		<td>`+key.keahlian_narasumber+`</td>
				  		<td>`+key.npwp_narasumber+`</td>
				  		<td>`+key.portofolio_narasumber+`</td>
				  		<td><b>S1</b> :`
						  +key.pendidikan_s1_narasumber+`<br><hr><b>S2</b> :`
						  +key.pendidikan_s2_narasumber+`<br><hr><b>S3</b> :`
						  +key.pendidikan_s3_narasumber+`
						</td>
				  		<td>`+key.status_verifikasi_narasumber+`</td>
				  		<td><a href="<?php echo base_url() ?>admin/detail_narasumber/`+key.id_narasumber+`">Detail</a>|<a href="#" data-toggle="modal" data-target="#edit`+key.id_narasumber+`">Update</a></td>
				  	</tr>`;
				});
				$('#list').html(tbl);
			}
	});

	$('#status_t').change(function(){
		var status = $('#status_t').val();
		var tbl1 = '';
		if(status==''){

			$.ajax({
			
					url: '<?php echo base_url()?>admin/list_all_narsum',
					dataType : 'JSON',
					success: function (res){
						$.each(res, function(i, key){
							tbl1 += `<tr>
								<td>
								<div class="card" style="min-height: 70px; margin-bottom:10px;padding:10px; min-width: 70px;">
								<img src="<?php echo base_url()?>`+key.foto+`" alt="" id="img-prev" class="img-thumbnail" width="100px">
								</div>
								</td>
								<td>`+key.nama_narasumber+`</td>
								<td>`+key.keahlian_narasumber+`</td>
								<td>`+key.npwp_narasumber+`</td>
								<td>`+key.portofolio_narasumber+`</td>
								<td><b>S1</b> :`
								+key.pendidikan_s1_narasumber+`<br><hr><b>S2</b> :`
								+key.pendidikan_s2_narasumber+`<br><hr><b>S3</b> :`
								+key.pendidikan_s3_narasumber+`
								</td>
								<td>`+key.status_verifikasi_narasumber+`</td>
								<td><a href="<?php echo base_url() ?>admin/detail_narasumber/`+key.id_narasumber+`">Detail</a>|<a href="#" data-toggle="modal" data-target="#edit`+key.id_narasumber+`">Update</a></td>
							</tr>`;
						});
						$('#list').html(tbl1);
					}
			});

		}else{

			$.ajax({
					type: 'post',
					data: {sts:status},
					url: '<?php echo base_url()?>admin/list_all_narsum_stat',
					dataType : 'JSON',
					success: function (res){
						$.each(res, function(i, key){
							tbl1 += `<tr>
								<td>
								<div class="card" style="min-height: 70px; margin-bottom:10px;padding:10px; min-width: 70px;">
								<img src="<?php echo base_url()?>`+key.foto+`" alt="" id="img-prev" class="img-thumbnail" width="100px">
								</div>
								</td>
								<td>`+key.nama_narasumber+`</td>
								<td>`+key.keahlian_narasumber+`</td>
								<td>`+key.npwp_narasumber+`</td>
								<td>`+key.portofolio_narasumber+`</td>
								<td><b>S1</b> :`
								+key.pendidikan_s1_narasumber+`<br><hr><b>S2</b> :`
								+key.pendidikan_s2_narasumber+`<br><hr><b>S3</b> :`
								+key.pendidikan_s3_narasumber+`
								</td>
								<td>`+key.status_verifikasi_narasumber+`</td>
								<td><a href="<?php echo base_url() ?>admin/detail_narasumber/`+key.id_narasumber+`">Detail</a>|<a href="#" data-toggle="modal" data-target="#edit`+key.id_narasumber+`">Update</a></td>
							</tr>`;
						});
						$('#list').html(tbl1);
					}
			});
		}
	});

});
</script>


<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>