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
		<form method="post" action="<?php echo base_url()?>admin/">
		<input type="hidden" value="<?php echo $narsum->id_narasumber; ?>" name="id_narasumber">
		<div class="modal-header">
			
			<h4 class="modal-title">Edit Narasumber</h4>
		</div>
		<div class="modal-body">
			<!-- awal -->
				<div class="form-group">
					<input type="text" class="form-control" id="nama_narasumber" required="" name="nama_narasumber" value="<?php echo $narsum->nama_narasumber; ?>" placeholder="Nama Narasumber">
					<span class="form-text text-muted"></span>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="nik_narasumber" required="" name="nik_narasumber" value="<?php echo $narsum->nik_narasumber; ?>" placeholder="NIK Narasumber">
					<span class="form-text text-muted"></span>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="npwp_narasumber" required="" name="npwp_narasumber" value="<?php echo $narsum->npwp_narasumber; ?>" placeholder="NPWP Narasumber">
					<span class="form-text text-muted"></span>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="tempat_lahir_narasumber" required="" name="tempat_lahir_narasumber" value="<?php echo $narsum->tempat_lahir_narasumber; ?>" placeholder="Tempat Lahir Narasumber">
					<span class="form-text text-muted"></span>
				</div>
				<div class="form-group">
					<input type="date" class="form-control" id="tanggal_lahir_narasumber" required="" name="tanggal_lahir_narasumber" value="<?php echo $narsum->tanggal_lahir_narasumber; ?>" placeholder="Tanggal Lahir Narasumber">
					<span class="form-text text-muted"></span>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="jenis_kelamin_narasumber" required="" name="jenis_kelamin_narasumber" value="<?php echo $narsum->jenis_kelamin_narasumber; ?>" placeholder="Jenis Kelamin Narasumber">
					<span class="form-text text-muted"></span>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="keahlian_narasumber" required="" name="keahlian_narasumber" value="<?php echo $narsum->keahlian_narasumber; ?>" placeholder="Keahlian Narasumber">
					<span class="form-text text-muted"></span>
				</div>
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
						<img src="`+key.foto+`" alt="" id="img-prev" class="img-thumbnail" width="100px">
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
								<img src="`+key.foto+`" alt="" id="img-prev" class="img-thumbnail" width="100px">
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
								<img src="`+key.foto+`" alt="" id="img-prev" class="img-thumbnail" width="100px">
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