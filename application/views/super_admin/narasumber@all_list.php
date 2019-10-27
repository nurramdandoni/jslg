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
						<select class="form-control" id="narasumber">
							<option value="all">All</option>
							<option value="0">By Waiting Verification</option>
							<option value="1">By Verified</option>
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
					<tbody id="list"><script>
$(document).ready(function(){
	var tbl = '';
	$.ajax({
			
            url: '<?php echo base_url()?>admin/list_all_narsum',
            dataType : 'JSON',
			success: function (res){
				$.each(res, function(i, key){
					tbl += `<tr>
				  		<td>
						  <div class="card" style="min-height: 35px; margin-bottom:10px;padding:10px; min-width: 35px;">
						<img src="`+key.foto+`" alt="" id="img-prev" class="img-thumbnail">
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
				  		<td><a href="<?php echo base_url() ?>admin/detail_narasumber">Detail</a>|Update|Delete</td>
				  	</tr>`;
				});
				$('#list').html(tbl);
			}
	});

});
</script>
					</tbody>
				</table>
			</div>
			<!--end: Datatable -->
		</div>
	</div>
	<!-- akhir -->
</div>



<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>